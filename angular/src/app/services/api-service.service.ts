import { Injectable } from '@angular/core';
import { API } from '../enviroments/ids';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { StudentClass } from '../classes/student.class';
import { Observable } from 'rxjs';


@Injectable({
  providedIn: 'root'
})
export class ApiServiceService {
  baseUrl = API;

  constructor( private http : HttpClient ) { }

  AddStudent(studentData: StudentClass): Observable<any> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    return this.http.post<any>(this.baseUrl, studentData, { headers });
  }
    
  GetStudent(): Observable<any> {
    return this.http.get<any>(this.baseUrl);
  }
}
