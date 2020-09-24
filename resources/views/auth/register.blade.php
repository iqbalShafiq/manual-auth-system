@extends('layouts.app')

@section('content')
<div class="w-full lg:w-5/12 px-3 pb-4 lg:px-0 lg:pb-4">
    <div class="rounded-lg bg-gray-900 px-8 py-4 shadow-lg">
        <form action="{{ route('auth.register') }}" method="POST">
            @csrf

            <div class="text-3xl font-semibold mb-3">
                Register
            </div>

            <div>
                <div class="mb-5">
                    <label for="name">Name</label>
                    <input type="text"
                        class="mt-1 px-3 py-2 bg-gray-400 text-gray-700 rounded-lg w-full transitions-colors duration-300 focus:bg-gray-200 focus:outline-none focus:shadow"
                        name="name" id="name">
                    @error('name')
                    <span role="alert" class="text-red-400 font-medium text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email">Email</label>
                    <input type="email"
                        class="mt-1 px-3 py-2 bg-gray-400 text-gray-700 rounded-lg w-full transitions-colors duration-300 focus:bg-gray-200 focus:outline-none focus:shadow"
                        name="email" id="email">
                    @error('email')
                    <span role="alert" class="text-red-400 font-medium text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password">Password</label>
                    <input type="password"
                        class="mt-1 px-3 py-2 bg-gray-400 text-gray-700 rounded-lg w-full transitions-colors duration-300 focus:bg-gray-200 focus:outline-none focus:shadow"
                        name="password" id="password">
                    @error('password')
                    <span role="alert" class="text-red-400 font-medium text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation">Password</label>
                    <input type="password"
                        class="mt-1 px-3 py-2 bg-gray-400 text-gray-700 rounded-lg w-full transitions-colors duration-300 focus:bg-gray-200 focus:outline-none focus:shadow"
                        name="password_confirmation" id="password_confirmation">
                </div>

                <button
                    class="w-1/3 px-3 py-2 mb-3 mt-4 font-medium text-gray-700 hover:text-gray-800 focus:text-gray-800 bg-gray-400 hover:bg-gray-300 focus:bg-gray-300 transitions-color duration-300 rounded-lg focus:outline-none">Register</button>
            </div>

        </form>
    </div>
</div>
@endsection
