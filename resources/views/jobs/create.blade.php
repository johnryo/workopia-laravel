<x-layout>
  <x-slot name="title">Create Job</x-slot>
<h1>Create New Job</h1>
<form action="/jobs" method="POST">
  @csrf
  <div class="my-5">
    <input type="text" name="title" value="{{old('title')}}" placeholder="Title" class="bg-white" />
    @error('title')
      <div class="text-red-500 text-sm mb-2">{{$message}}</div>
    @enderror
  </div>
  
  <div class="mb-5">
    <input type="text" name="description" value="{{old('description')}}" placeholder="Description" class="bg-white" />
    @error('description')
      <div class="text-red-500 text-sm mb-2">{{$message}}</div>
    @enderror
  </div>
  <button type="submit">Submit</button>
</form>
</x-layout>
