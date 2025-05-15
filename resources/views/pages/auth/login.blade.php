@extends('layouts.auth')
@section('title', 'Login')

@section('content')

  <div class="flex flex-col gap-3 p-5">
    @include('components.form', [
    'title' => 'Login to Resuemart',
    'action' => url('/login'),
    'method' => 'POST',
    'is_edit' => false,
    'form_type' => 'login',
    'fields' => [
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
    'button_text' => 'Login', 
])

   <p class='text-center text-md font-semibold'>Dont have an account?  <a class="hover:underline text-green-600" href='/register'>
    Create an account
   </a></p>

  </div>
  

@endsection