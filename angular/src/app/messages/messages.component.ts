import { Component, OnInit } from '@angular/core';

import { MessageService } from './message.service';

import { Message } from './message';

@Component({
  selector: 'app-messages',
  templateUrl: './messages.component.html',
  styleUrls: ['./messages.component.css']
})
export class MessagesComponent implements OnInit {
    messages: Message[];

  constructor(
      private _messageService: MessageService,
      ) { }

  ngOnInit() {
      this.getMessages();
  }

  getMessages() {
      this._messageService.getData().then(messages => this.messages = messages);
  }

}
