<x-app>

    <div class="min-h-screen flex items-center justify-center bg-gray-100">

        <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">

            <h2 class="text-2xl font-bold text-center mb-6">Create Player Account</h2>

            <form class="space-y-4" method="POST" action="{{ route('registration.save') }}">

                @csrf
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Player Name
                    </label>
                    <input type="name" id="name" name="name" value="{{ old('name') }}" required
                        placeholder="Enter your name"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />

                    @error('name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Email
                    </label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        placeholder="Enter your email"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Password
                    </label>
                    <input type="password" name="password" id="password" placeholder="Enter your password"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Password
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your password again"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between text-sm">
                    <a href="{{ route('login.index') }}" class="text-blue-500 hover:underline">
                        Already have an account? Login here.
                    </a>

                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Sign Up
                </button>

            </form>

        </div>

    </div>

</x-app>
