@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>
    <br>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <br>
    
    <div>
    <form action="{{ route('contact.submit') }}" method="post">
        @csrf
        <label> Full Name:</label>
        <input type="text" name="fullname" id="name" required> <br>

        <label for="email">Email:</label>
        <input type="email" name="emailid" id="email" required> <br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea><br>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection
