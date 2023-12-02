import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup} from '@angular/forms';
import {CategoryService} from '../../../services/category.service';
import {ActivatedRoute, Router} from '@angular/router';

@Component({
  selector: 'app-category-edit',
  templateUrl: './category-edit.component.html',
  styleUrls: ['./category-edit.component.css']
})
export class CategoryEditComponent implements OnInit {
  form: FormGroup;
  id: number;

  constructor(
    private formBuilder: FormBuilder,
    private categoryService: CategoryService,
    private router: Router,
    private route: ActivatedRoute
  ) {
  }

  ngOnInit(): void {
    this.form = this.formBuilder.group({
      id: '',
      title: '',
    });

    this.id = this.route.snapshot.params.id;

    this.categoryService.get(this.id).subscribe(
      category => {
        this.form.patchValue({
          id: category.id,
          title: category.title,

        });
      }
    );
  }

  submit(): void {
    this.categoryService.update(this.id, this.form.getRawValue())
      .subscribe(() => this.router.navigate(['/categories']));
  }

}
