@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 text-center">

            <form action="/replies" method="POST">
                @csrf

                <input type="hidden" name="message_id" value="{{ $message_id }}">
                <div class="form-group">

                    <label>New Reply</label><br>
                    <textarea name="reply" id="reply" cols="30"
                              rows="10">{{ old('reply') }}</textarea>
                    @if($errors->has('reply'))
                        <div class="error">{{ $errors->first('reply') }}</div>
                    @endif
                    @if($errors->has('message_id'))
                        <div class="error">{{ $errors->first('message_id') }}</div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save</button>

            </form>

        </div>

    </div>
@endsection
