<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Message;
use App\Models\User;
use Illuminate\Http\Response;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Events\UserCreatedEvent;

class UserController extends Controller
{

    public function index(){
        
        // \Gate::authorize('view', "users");

        // $result = \Cache::get('users');

        // if($result){
        //     return $result;
        // }

        $users = User::with('role')->paginate();

        $resources = UserResource::collection($users);

        \Cache::set('users', $resources, 20);

        return UserResource::collection($users);
    }

    public function show($id){

        \Gate::authorize('view', "users");

        $user = User::find($id);
        
        return new UserResource($user);
    }

    public function store(UserCreateRequest $request){
        
        // \Gate::authorize('edit', "users");
        
        $user = User::create(
            $request->only('first_name', 'last_name', 'email', 'role_id')
            + ['password' => Hash::make(1234)]
        );

        event(new UserCreatedEvent($user));

        return response(new UserResource($user), Response::HTTP_CREATED);
    }

    public function update(UserUpdateRequest $request, $id){

        \Gate::authorize('edit', "users");
        
        $user = User::find($id);

        $user->update($request->only('first_name', 'last_name', 'email', 'role_id'));

        return response(new UserResource($user), Response::HTTP_ACCEPTED);
    }


    public function destroy($id){

        \Gate::authorize('edit', "users");
        
        User::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function user()
    {
        $user = \Auth::user();

        return (new UserResource($user))->additional([
            'data' => [
                'permissions' => $user->permissions(),
            ],
        ]);
    }


    public function updateInfo(Request $request)
    {
        $user = \Auth::user();

        $user->update($request->only('first_name', 'last_name', 'email'));

        return response(new UserResource($user), Response::HTTP_ACCEPTED);
    }

    public function updatePassword(Request $request)
    {
        $user = \Auth::user();

        $user->update([
            'password' => Hash::make($request->input('password')),
        ]);

        return response(new UserResource($user), Response::HTTP_ACCEPTED);
    }
}
