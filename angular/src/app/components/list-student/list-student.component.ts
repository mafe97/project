import { Component, OnInit } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { ApiServiceService } from '../../services/api-service.service';

@Component({
  selector: 'app-list-student',
  standalone: true,
  imports: [ReactiveFormsModule, FormsModule],
  templateUrl: './list-student.component.html',
  styleUrl: './list-student.component.css'
})
export class ListStudentComponent implements OnInit {
  Students: any;

  constructor(private apiservice: ApiServiceService) { }

  ngOnInit(): void {
      this.GetStudent();
  }
  GetStudent() {
    this.apiservice.GetStudent().subscribe(response => {
      console.log(response)
      this.Students = response;
    });
  }
}
