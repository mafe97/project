import { Injectable } from '@angular/core';
import { API } from '../enviroments/ids';
import { HttpClient } from '@angular/common/http';
import { StudentClass } from '../classes/student.class';
import { Observable } from 'rxjs';


@Injectable({
  providedIn: 'root'
})
export class ApiServiceService {
  baseUrl = API;

  constructor( private http : HttpClient ) { }

  AddStudent(studentData : StudentClass): Observable<any> {
      return this.http.post<any>(`${this.baseUrl}/adddata.php`, studentData);
    }
    
  GetStudent(){
    return this.http.get(this.baseUrl);
  }
}
