<!--extend layout master.blade.php -->


<a href='/'><img class="logo-main" src="{{ asset('img/logo2.png') }}"></a>
@extends('layout/master')

<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', '')


<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')



    <div class="text-center">
        <h1 class="fs-1">Gossip something with good vibes</h1>
    </div>

    <form action="{{ route('create') }}" method="post">
        @csrf
        <div class="contenedor-formulario">
            <div class="mb-3">
                <label for="input-title" class="form-label fs-2">Title</label>
                <input type="text" class="form-control" id="" name="title" placeholder="Here goes an amazing title">
            </div>
            <div class="mb-3">
                <label for="input-content" class="form-label fs-2">Message</label>
                <textarea class="form-control" id="" name="content" placeholder="Tell us your wonder ideas"></textarea>
            </div>


            @error('title')
                <h1 class="asign-danger">Please fill both title and content</h1>
            @enderror


            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>



    <!-- loops through the $messages, that this blade template
       gets from MessageController.php. for each element of the loop which
       we call $message we print the properties (title, content
       and created_at in an <li> element -->


    @foreach ($messages as $message)
        <table class="gossip-table">
            <tr>
                {{-- <th>{{ $message->id}}</th> --}}

                <th>{{ $message->title }}</th>

                <th>{{ $message->content }}</th>


            </tr>

        </table>
        <br>
        <form action="/message/{{ $message->id }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete</button>


            <a class="btn btn-warning" href="/message/{{ $message->id }}">Edit</a><br><br>
            <div class="text-center">{{ $message->created_at->diffForHumans() }}</div>
        </form>
    @endforeach
