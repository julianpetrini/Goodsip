<img class="logo" src="{{ asset('img/twt_logo.png') }}">

<!--extend layout master.blade.php -->
@extends('layout.master')
 
<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
<!-- @section('title', 'Mini Twitter') -->
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')
 
<h2>Edit your message details:</h2>
<h3>{{$message->title}}</h3>
<p>{{$message->content}}</p>
 
<form action="/message/{{$message->id}}" method="post">
   @csrf
   @method('delete')
   <button type="submit">Delete</button>
</form>

<form action="/update/{{$message->id}}" method="post">
   <input type="text" name="title" value="{{$message->title}}">
   <input type="text" name="content" value="{{$message->content}}">
   @csrf
   <button type="submit">Update</button>
</form>

 
@endsection