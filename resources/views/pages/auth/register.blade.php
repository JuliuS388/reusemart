@extends('layouts.auth')
@section('title', 'Create an Account')

@section('content')

<div class="flex flex-col gap-3 p-5">
    @include('components.form', [
    'title' => 'Create new account',
    'action' => url('/register'),
    'method' => 'POST',
    'is_edit' => false,
    'form_type' => 'register',
    'fields' => [
    [
    'name' => 'name',
    'type' => 'text',
    'label' => 'Name',
    'placeholder' => 'Enter your name',
    'required' => true,
    ],
    [
    'name' => 'email',
    'type' => 'email',
    'label' => 'Email',
    'placeholder' => 'Enter your email',
    'required' => true,
    ],
    [
    'name' => 'password',
    'type' => 'password',
    'label' => 'Password',
    'placeholder' => 'Enter your password',
    'required' => true,
    ],
    ],
    'button_text' => 'Create Account',
    ])

    <p class='text-center text-md font-semibold'>Have an account? <a class="hover:underline text-green-600" href='/login'>
            Login
        </a></p>

</div>


@endsection