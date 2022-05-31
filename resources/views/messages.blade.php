<!--extend layout master.blade.php -->


<img class="logo" src="{{ asset('img/twt_logo.png') }}">
@extends('layout/master')

<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', '')

<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')



<h2>Create new message: </h2>

<form action="{{route('create')}}" method="post">
    @csrf

    <!-- TO MAKE AN ALERT IF IT IS EMPTY -->

    @if (session('success'))
    <h1 class="asign-success">{{ session('success') }}</h1>
    @endif

    @error('title')
    <h1 class="asign-danger">{{ $message }}</h1>
    @enderror

    <!-- this blade directive is necessary for all form posts somewhere in between
       the form tags -->

    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    <button type="submit">Submit</button>
</form>

<h2 class="prueba">Recent messages:</h2>

<!-- loops through the $messages, that this blade template
   gets from MessageController.php. for each element of the loop which
   we call $message we print the properties (title, content
   and created_at in an <li> element -->


@foreach ($messages as $message)
<ul>
    <li>
        <b>{{$message->title}}:</b><br><br>
            {{$message->content}}<br><br>

        <!-- ACA PEGO EL FORMULARIO PARA DELETE -->

        <form action="/message/{{$message->id}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>

        <button onclick="window.location.href = '/message/{{$message->id}}'">EDIT</button><br>

        <!-- <a href="/message/{{$message->id}}">EDIT</a> - THIS IS THE ONE THAT WORKS-->





        {{$message->created_at->diffForHumans()}}
    </li>

</ul>
@endforeach

@endsection