@extends('masterRCS')

@section('title', 'Chat')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<br>
<div id="app" class="container">
    <div class="row chat-container animated-container z-depth-2">
        <div class="chat-window z-depth-2">
            <div class="messages">
                <ul>
                    <li v-for="user in newMessage"><h6>@{{(newMessage.user) ? "User: " + newMessage.user : ""}}</h6></li>
                    <li v-for="messageText in newMessage"><h6>@{{(newMessage.messageText) ? "Writes: " + newMessage.messageText : ""}}</h6></li>
                </ul>
            </div>
        </div>
        <label for="username">User Name</label>
        <input v-model="newMessage.user" type="text" name="username">
        <label for="message">Message</label>
        <input v-model="newMessage.messageText" type="text" name="message">
        <button v-on:click='addMessage()' class="z-depth-2 submit-button waves-effect waves-light red btn right" type="submit">Submit</button>
    </div>
</div>

@endsection

@section('messagesScript')

<script>

var a = new Vue({
   el: '#app',
   data: {
       newMessage: [
           {
               user: "",
               messageText: "",
           }
       ],
   },
   methods: {
       addMessage: function () {
           var user = this.user;
           var messageText = this.messageText;
           this.newMessage.push(user);
           this.newMessage.push(messageText);
           user = "";
           messageText = "";

       }
   } 
});
</script>

@endsection