<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Http\Response;
use App\Http\Resources\RoleResource;

class RoleController extends Controller
{

    public function index()
    {
        return RoleResource::collection(Role::paginate());
    }


    public function store(Request $request)
    {
        $role = Role::create($request->only('name'));

        if ($permissions = $request->input('permissions')) {
            foreach ($permissions as $permission_id) {
                \DB::table('role_permission')->insert([
                    'role_id' => $role->id,
                    'permission_id' => $permission_id,
                ]);
            }
        }

        return response(new RoleResource($role), Response::HTTP_CREATED);
    }


    public function show(string $id)
    {
        return new RoleResource(Role::find($id));
    }


    public function update(Request $request, string $id)
    {
        $role = Role::find($id);

        $role->update($request->only('name'));

        \DB::table('role_permission')->where('role_id', $role->id)->delete();

        if ($permissions = $request->input('permissions')) {
            foreach ($permissions as $permission_id) {
                \DB::table('role_permission')->insert([
                    'role_id' => $role->id,
                    'permission_id' => $permission_id,
                ]);
            }
        }

        return response(new RoleResource($role), Response::HTTP_ACCEPTED);
    }



    public function destroy(string $id)
    {
        \DB::table('role_permission')->where('role_id', $id)->delete();

        Role::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
