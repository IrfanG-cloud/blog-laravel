import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup} from '@angular/forms';
import {PostService} from '../../../services/post.service';
import {ActivatedRoute, Router} from '@angular/router';

@Component({
  selector: 'app-post-create',
  templateUrl: './post-create.component.html',
  styleUrls: ['./post-create.component.css']
})
export class PostCreateComponent implements OnInit {
  form: FormGroup;
  id: number;

  constructor(
    private formBuilder: FormBuilder,
    private postService: PostService,
    private router: Router,
    private route: ActivatedRoute
  ) {
  }

  ngOnInit(): void {
    this.form = this.formBuilder.group({
      slug: '',
      title: '',
      subtitle: '',
      content_raw: '',
      post_image: '',
      meta_decription: '',
      layout: ''
    });

    this.id = this.route.snapshot.params.id;

    this.postService.get(this.id).subscribe(
      post => {
        this.form.patchValue({
          slug: post.slug,
          title: post.title,
          subtitle: post.subtitle,
          content_raw: post.content_raw,
          post_image: post.post_image,
          meta_decription: post.meta_description
        });
      }
    );
  }

  submit(): void {
    this.postService.update(this.id, this.form.getRawValue())
      .subscribe(() => this.router.navigate(['/posts']));
  }

}
