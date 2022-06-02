<img class="logo" src="{{ asset('img/twt_logo.png') }}">

<!--extend layout master.blade.php -->
@extends('layout.master')

<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
<!-- @section('title', '') -->

<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')

    <h2>Edit your message details</h2>
    <h3>{{ $message->title }}</h3>
    <p>{{ $message->content }}</p>

    <div class="contenedor-formulario text-center">
        <form action="/update/{{ $message->id }}" method="post">
            <input type="text" name="title" value="{{ $message->title }}" class="form-control mb-3">
            <input type="text" name="content" value="{{ $message->content }}" class="form-control mb-3">
            @csrf

            <button class="btn btn-primary" type="submit">Update</button>
        </form>
        <form action="/message/{{ $message->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

@endsection
