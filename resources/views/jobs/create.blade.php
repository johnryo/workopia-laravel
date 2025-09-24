@extends('layout')

@section('title')
Create Job
@endsection

@section('content')
<h1>Create New Job</h1>
<form action="/jobs" method="POST">
  @csrf
  <input type="text" name="title" placeholder="Title" />
  <input type="text" name="description" placeholder="Description" />
  <button type="submit">Submit</button>
</form>
@endsection
