import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ListStudentComponent } from './components/list-student/list-student.component';
import { AddStudentComponent } from './components/add-student/add-student.component';
import { UpdateStudentComponent } from './components/update-student/update-student.component';

const routes: Routes = [
  
  { path: '**', redirectTo: 'add' }, // default route
  { path: 'add', component: AddStudentComponent },
  { path: 'list', component: ListStudentComponent },
  { path: 'update/:id', component: UpdateStudentComponent } // update route with parameter
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
