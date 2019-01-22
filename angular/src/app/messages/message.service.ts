import {Injectable} from '@angular/core';
import { HttpClient } from '@angular/common/http';


// import { Observable, of, Subject } from 'rxjs';

import { Message } from './message';


@Injectable({
  providedIn: 'root'
})

export class MessageService {
    private headers = new Headers({'Content-Type': 'application/json'});
    private booksUrl = 'http://webchat/backend/web/apimessages';  // URL to web api

    constructor(private http: HttpClient) { }

    getData(): Promise<Message[]> {
        return this.http.get(this.booksUrl)
            .toPromise()
            .then(response => response as Message[])
            .catch(this.handleError);
    }

    // getDetail(id: number): Observable<Message> {
    //     return this.http.get(`${this.booksUrl}/${id}`)
    //         .toPromise()
    //         .then(response => response as Message)
    //         .catch(this.handleError);
    // }

    // create(login: string, nick: string, created_at: string, from: string, to: string, message_text: string): Observable<Message> {
    //     return this.http
    //         .post(this.booksUrl, JSON.stringify({
    //             login: login,
    //             nick: nick,
    //             from: from,
    //             to: to,
    //             message_text: message_text,
    //             created_at: created_at,
    //         }), {headers: this.headers})
    //         .toPromise()
    //         .then(res => res as Message)
    //         .catch(this.handleError);
    // }

    private handleError(error: any): Promise<any> {
        console.error('An error occurred', error); // for demo purposes only
        return Promise.reject(error.message || error);
    }
}
