<form method="POST" action="{{route('logout')}}">
  @csrf
  <button type="submit" class="text-white hover:cursor-pointer">
    <i class="fa fa-sign-out"></i> Log Out
  </button>
</form>