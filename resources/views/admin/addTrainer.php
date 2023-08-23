@extends('app')
@section('content')

 <!--==============================content================================-->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Page</title>
 </head>
 <body>
 <div style="border: 3px solid black;">
    <h2>Create a New Post</h2>
    <form action="/addTrainer" method="POST">
      @csrf
      <input type="text" name="name" placeholder="Trainer full name">
      <input type="text" name="email" placeholder="Trainer Email Id">
      <textarea name="body" placeholder="body content..."></textarea>
      <button>Save Post</button>
    </form>
  </div>
 </body>
 </html>

@endsection

