<x-layout>
  <div class="bg-white w-full md:max-w-xl rounded-lg shadow-md mx-auto mt-12 px-8 py-12">
    <h2 class="text-4xl text-center font-bold mb-4">Log In</h2>
    <form method="POST" action="{{route('login.authenticate')}}">
      @csrf
      <x-inputs.text id="email" name="email" type="email" placeholder="Email address" />
      <x-inputs.text id="password" name="password" type="password" placeholder="Password" />
      <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none">
        Log In
      </button>
      <p class="mt-4 text-gray-500"> 
        Don't have an account? <a href="{{route('register')}}" class="text-blue-900">Register</a>
      </p>
    </form>
  </div>
</x-layout>