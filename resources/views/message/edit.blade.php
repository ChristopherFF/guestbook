@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12 text-center">

        <form action="/messages/{{ $message->id }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">

                <label>New Message</label><br>
                <textarea name="message" id="message" cols="30"
                          rows="10">{{ old('message', $message->message) }}</textarea>
                @if($errors->has('message'))
                    <div class="error">{{ $errors->first('message') }}</div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>

    </div>


</div>
@endsection
