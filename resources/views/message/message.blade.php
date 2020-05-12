<hr>
<div class="row">
    <div class="col-12 pb-5 text-center">

        <div>
            <label>Message</label><br>
            <textarea name="message" id="message_{{ $message->id }}" cols="30"
                      rows="10">{{ $message->message }}</textarea>
        </div>

        <br>

        @can('update', $message)
            <a href="/messages/{{ $message->id }}/edit" class="btn btn-primary mb-2" role="button">Edit</a>
        @endcan

        @can('delete', $message)
            <form action="/messages/{{ $message->id }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endcan

    </div>
</div>
<hr>
