@extends('layouts.auth_layout')

@section('section')
    <form method="POST" action="{{ route('admin.login.store') }}">
        @csrf
        @if (Session::has('success'))
            <span class="text-success">{{ Session::get('success') }}</span>
        @endif
        <!-- Email Address -->
        <div>
            <label class="block font-medium text-sm text-gray-700" for="email">
                Email
            </label>
            <input
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                id="email" type="text" name="email" required="required" autofocus="autofocus" autocomplete="email">
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" for="password">
                Password
            </label>

            <input
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                id="password" type="password" name="password" required="required" autocomplete="current-password">

        </div>


        @if (Session::has('error'))
            <span class="text-danger">{{ Session::get('error') }}</span>
        @endif

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">Remember me</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">


            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-3">
                Log in
            </button>
        </div>
    </form>
@endsection
