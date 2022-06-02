<!--extend layout master.blade.php -->


<img class="logo" src="{{ asset('img/twt_logo.png') }}">
@extends('layout/master')

<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', '')


<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')




<h1 class="fs-1">Gossip something with good vibes</h1>


<form action="{{route('create')}}" method="post"  >
@csrf
<div class="contenedor-formulario">
  <div class="mb-3">
    <label for="input-title" class="form-label fs-2">Title</label>
    <input type="text" class="form-control" id="" name="title" placeholder="Here goes an amazing title">
  </div>
  <div class="mb-3">
    <label for="input-content" class="form-label fs-2">Message</label>
    <textarea class="form-control" id="" name="content" placeholder="Tell us amazing ideas"></textarea>
  </div>


  @if (session('success'))
    <h1 class="asign-success">{{ session('success') }}</h1>
    @endif

    @error('title')
    <h1 class="asign-danger">{{ $message }}</h1>
    @enderror


  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>



<!-- loops through the $messages, that this blade template
   gets from MessageController.php. for each element of the loop which
   we call $message we print the properties (title, content
   and created_at in an <li> element -->


    @foreach ($messages as $message)
<ul>
    <li>
        id:{{ $message->id}}<br><br>

        title :{{$message->title}}<br><br>

        message :{{$message->content}}<br><br>

        <form action="/message/{{$message->id}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>

        <a class="btn btn-warning" href="/message/{{$message->id}}">Edit</a>
                {{$message->created_at->diffForHumans()}}
    </li>
          
</ul>
          @endforeach
          
          



