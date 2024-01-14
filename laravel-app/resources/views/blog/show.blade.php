@extends('layouts.app')

@section('content')
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
  <form action="/blog/{{ $post->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
  </form>
</div>
<a href="/" class="back"><- Back to all pizzas</a>
@endsection