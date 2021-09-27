@extends('master')

@section('title', 'Message Details')

@section('content')

<h2>{{$message->title}}</h2>
<p>{{$message->content}}</p>

<form action="/messages/{{$message->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Delete</button>
</form>


@endsection
