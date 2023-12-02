import {Component, OnInit} from '@angular/core';
import {PostService} from '../../services/post.service';
import {Post} from '../../interfaces/post'

@Component({
  selector: 'app-posts',
  templateUrl: './posts.component.html',
  styleUrls: ['./posts.component.css']
})
export class PostsComponent implements OnInit {
  posts: Post[] = [];
  lastPage: number;

  constructor(private postService: PostService) {
  }

  ngOnInit(): void {
    this.load();
  }

  load(page = 1): void {
    this.postService.all(page).subscribe(
      (res: any) => {
        console.log(res);
        this.posts = res.data;
        this.lastPage = res.meta.last_page;
      }
    );
  }

  delete(id: number): void {
    if (confirm('Are you sure you want to delete this record?')) {
      this.postService.delete(id).subscribe(
        () => {
          this.posts = this.posts.filter(u => u.id !== id);
        }
      );
    }
  }
}
