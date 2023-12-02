import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup} from '@angular/forms';
import {PostService} from '../../../services/post.service';
import {ActivatedRoute, Router} from '@angular/router';

@Component({
  selector: 'app-post-edit',
  templateUrl: './post-edit.component.html',
  styleUrls: ['./post-edit.component.css']
})
export class PostEditComponent implements OnInit {
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
      meta_decription: '',
    });

    this.id = this.route.snapshot.params.id;

    this.postService.get(this.id).subscribe(
      post => {
        this.form.patchValue({
          slug: post.slug,
          title: post.title,
          subtitle: post.subtitle,
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
