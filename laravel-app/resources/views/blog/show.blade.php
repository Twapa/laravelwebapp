<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="wrapper pizza-details">
        <h1>Order for {{ $post->name }}</h1>
        <p class="type">Type - {{ $post->type }}</p>
        <p class="base">Base - {{ $post->base }}</p>
        <p class="toppings">Extra toppings:</p>
        <ul>
          @foreach($post->toppings as $topping)
            <li>{{ $topping }}</li>
          @endforeach
        </ul>
      </div>
</body>
</html>