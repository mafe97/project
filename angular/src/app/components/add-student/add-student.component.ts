import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, FormsModule, ReactiveFormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { ApiServiceService } from '../../services/api-service.service'; 

@Component({
  selector: 'app-add-student',
  standalone: true,
  imports: [ReactiveFormsModule, FormsModule],
  templateUrl: './add-student.component.html',
  styleUrl: './add-student.component.css'
})
export class AddStudentComponent implements OnInit {
  studentsForm: FormGroup;

  constructor(
    public form:FormBuilder,
    private router: Router,
    private apiService: ApiServiceService  )
  {
    this.studentsForm = this.form.group({
      name: [''],
      grade: [''],
      marks: ['']
    });
  }
  ngOnInit(): void {
    
  }

  sendData():any { 
     
    if (this.studentsForm.valid) {
      console.log(this.studentsForm.value);
      this.apiService.AddStudent(this.studentsForm.value).subscribe(response => {
        console.log('Record Created:', response);
      });
      
      this.router.navigate(['/list']);
    }
  }
}
