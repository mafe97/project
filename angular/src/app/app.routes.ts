import { RouterModule, Routes } from '@angular/router';
import { AddStudentComponent } from './components/add-student/add-student.component';
import { ListStudentComponent } from './components/list-student/list-student.component';
import { UpdateStudentComponent } from './components/update-student/update-student.component';

export const routes: Routes = [

    { path: '**', redirectTo: 'add' }, // default route
    { path: 'add', component: AddStudentComponent },
    { path: 'list', component: ListStudentComponent },
    { path: 'update/:id', component: UpdateStudentComponent } // update route with parameter
];