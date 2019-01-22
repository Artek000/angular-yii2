import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MessagesComponent } from './messages/messages.component';
import {AuthComponent} from './auth/auth.component';

const routes: Routes = [
    {path: 'messages', component: MessagesComponent},
    {path: 'login', component: AuthComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
