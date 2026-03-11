<x-app>

<div class="min-h-screen flex items-center justify-center bg-gray-100">

  <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">
    
    <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

   <form class="space-y-4" method="POST" action="{{ route('login.store') }}">
      @csrf
      <!-- Email -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          Email
        </label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          Password
        </label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Enter your password"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <!-- Remember + Forgot -->
      <div class="flex items-center justify-between text-sm">
        <a href="{{route('registration.show')}}" class="text-blue-500 hover:underline">
          New user? Register here.
        {{-- </a>
        <a href="#" class="text-blue-500 hover:underline">
          Forgot password?
        </a> --}}
      </div>

      <!-- Button -->
      <button
        type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition"
      >
        Sign In
      </button>

    </form>

  </div>

</div>

</x-app>