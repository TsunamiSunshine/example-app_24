@extends('admin.index')
@section('title', 'Message for register')
@section('Message Register')
    {{-- <x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout> --}}
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed mb-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Message</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            @foreach ($form as $item)
                <tbody>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <tr>
                            <td>
                                    <input hidden id="name" class="" type="text" name="name"
                                        value="{{$item->name}}" required autofocus autocomplete="name" />
                                        {{$item->name}}
                            </td>
                            <td>
                                    <input hidden id="email" class="" type="email" name="email"
                                        value="{{$item->email}}" required autocomplete="username" />
                                        {{$item->email}}
                            </td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->select_department}}</td>
                            <td>{{$item->message}}</td>
                            <td class="text-center">
                                <ul class="table-controls">
                                    <button class="btn-success">
                                        {{ __('Register') }}
                                    </button>
                                </form>
                                    <form action='{{route('formsendregister.store.submit.destroy', $item->id)}}' method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button name="delete" class="btn-danger">Delete</button>
                                    </form>
                                </ul>
                            </td>
                        </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
