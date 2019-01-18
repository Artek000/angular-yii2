import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {ChatlistComponent} from './chatlist/chatlist.component';
import { MessagesComponent } from './messages/messages.component';

const routes: Routes = [
    {path: 'messages', component: MessagesComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
