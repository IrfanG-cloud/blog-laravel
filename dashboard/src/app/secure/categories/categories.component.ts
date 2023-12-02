import {Component, OnInit} from '@angular/core';
import {Category} from '../../interfaces/category';
import { CategoryService } from 'src/app/services/category.service';

@Component({
  selector: 'app-categories',
  templateUrl: './categories.component.html',
  styleUrls: ['./categories.component.css']
})
export class CategoriesComponent implements OnInit {
  categories: Category[] = [];
  lastPage: number;

  constructor(private categoryService: CategoryService) {
  }

  ngOnInit(): void {
    this.load();
  }

  load(page = 1): void {
    this.categoryService.all(page).subscribe(
      (res: any) => {
        console.log(res);
        this.categories = res.data;
        this.lastPage = res.meta.last_page;
      }
    );
  }

  delete(id: number): void {
    if (confirm('Are you sure you want to delete this record?')) {
      this.categoryService.delete(id).subscribe(
        () => {
          this.categories = this.categories.filter(u => u.id !== id);
        }
      );
    }
  }
}
