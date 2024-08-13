import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { AddStudentComponent } from './components/add-student/add-student.component';
import { UpdateStudentComponent } from './components/update-student/update-student.component';
import { ListStudentComponent } from './components/list-student/list-student.component';
import { CommonModule } from '@angular/common';

const routes: Routes = [

  { path: '', pathMatch:'full', redirectTo: '/add-student' },
  { path: 'add-student', component: AddStudentComponent },
  { path: 'list-student', component: ListStudentComponent },
  { path: 'update-student/:id', component: UpdateStudentComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes),
    CommonModule,
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
