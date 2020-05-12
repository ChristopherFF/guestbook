@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        @foreach($messages as $message)

            @include('message.message', ['message' => $message])

        @endforeach

    </div>

@endsection

