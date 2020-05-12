<hr>
<div class="row">
    <div class="col-12 pb-5 text-center">

        <div style="display:inline-block">
            <label>Message</label><br>
            <textarea id="message_{{ $message->id }}" cols="30"
                      rows="10">{{ $message->message }}</textarea>
        </div>

        @if(!is_null($message->reply))
            <div style="display:inline-block">
                <label>Reply</label><br>
                <textarea id="reply_{{ $message->reply->id }}" cols="30"
                          rows="10">{{ $message->reply->reply }}</textarea>
            </div>
        @endif

        <br>

        @can('update', $message)
            <a href="/messages/{{ $message->id }}/edit" class="btn btn-primary mb-2" role="button">Edit</a>
        @endcan

        @can('delete', $message)
            <form action="/messages/{{ $message->id }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger mb-2">Delete</button>
            </form>
        @endcan

        @if(Auth::user()->isAdmin() && is_null($message->reply))
            <a href="/replies/create/{{ $message->id }}" class="btn btn-primary mb-2" role="button">Reply</a>
        @endif

    </div>
</div>
<hr>
