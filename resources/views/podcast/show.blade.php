@extends('layouts.navpodcast')

@section('content')
<button class="button is-link"><a href="{{ url('/posts') }}">Go Back</a></button>
<h1 class="title is-2">{{$podcasts->title}}</h1>
<p>{{$podcasts->body}}</p>
<hr>
<small>Written on {{$podcasts->created_at}}</small>

<div class="media-content">
    <div class="field">
      <p class="control">
        <textarea class="textarea" placeholder="Add a comment..."></textarea>
      </p>
    </div>
    <div class="field">
      <p class="control">
        <button class="button">Post comment</button>
      </p>
    </div>

   

@endsection