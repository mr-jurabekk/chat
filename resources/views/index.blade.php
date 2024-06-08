<x-layout.header>

    <div class="chat">
      <div class="container">
          <div class="chat_inner">
              <div class="user_header">
                  @foreach($messages as $message)
                  @if($message->user->name != auth()->user()->name)
                  <div class="user">
                      <div class="user_img">
                          <img src="assets/img/149071.png" alt="user image">
                      </div>
                      <div class="user_text">
                          <div class="name">{{$message->user->name}}</div>
                          {{$message->message}}
                      </div>
                  </div>
                      @else
                  <div class="user typing">
                      <div class="user_img">
                          <img src="assets/img/149071.png" alt="user image">
                      </div>
                      <div class="user_text">
                          {{$message->message}}
                      </div>
                  </div>
                      @endif

                  @endforeach
              </div>
              <div class="message">
                  <form action="{{route('message.store')}}" method="POST">
                      @csrf
                      <input type="text" class="text" name="message">
                      <button type="submit" class="submit">Send</button>
                  </form>
              </div>
          </div>
      </div>
    </div>

</x-layout.header>
