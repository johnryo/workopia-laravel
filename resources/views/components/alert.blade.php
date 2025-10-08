@props(['type', 'message', 'duration' => 4000])

@if(session()->has($type))
<div
  x-data="{show: true}"
  x-init="setTimeout(() => show = false, {{$duration}})"
  x-show="show"
  class="text-sm text-white rounded p-4 mb-4 {{$type == 'success' ? 'bg-green-500' : 'bg-red-500'}}">
  {{$message}}
</div>
@endif