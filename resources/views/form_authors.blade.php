<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
<!--         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
    <form action='{{route('author.store')}}' method='post'>
    @csrf
  
    <div class='form-group'>
      <label for='author'>Введите автора книги</label>
      <input type='text' name='author' placeholder='Введите автора книги' id='author' class="form-control">
    </div>

    <button type='submit' class='btn btn-success'>Добавить автора</button>
  </form>
    </body>
</html>
