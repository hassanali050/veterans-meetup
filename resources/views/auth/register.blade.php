@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 p-6 bg-white rounded-lg">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}  
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="profession">Profession</label>
                <select name="profession" id="profession" placeholder="Profession" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('profession') border-red-500 @enderror">
                    <option value="" selected>Select an Option</option>
                    <option value="engineering">Engineering</option>
                    <option value="business">Business</option>
                    <option value="education">Education</option>
                    <option value="health">Health</option>
                    <option value="arts">Arts</option>
                    <option value="literature">Literature</option>
                    <option value="technology">Technology</option>
                </select>
                @error('profession')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}  
                    </div>
                @enderror
            </div>
            <div>
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}  
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Choose a Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}  
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium
                w-full">Register</button>
            </div>
        </form>
        </div>

    </div>
@endsection