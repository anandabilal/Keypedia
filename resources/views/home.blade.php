@extends('layouts.main')

@section('container')
    <div class="homeContainer">
        <h1>Welcome to Keypedia</h1>
        <p>Best Keyboard and Keycaps Shop</p>
        <div class="homeHeader">
            <h2>Categories</h2>
            <div class="home">
                @foreach ($categories as $category)
                    <div class="boxOuter">
                        <div class="boxInner">
                            <a href="/view_keyboard/{{ $category->category_id }}">{{ $category->name }}</a>
                            <img src="/images/{{ $category->image }}" alt="{{ $category->name }} image not found" width="350" height="350">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>      
    </div>
@endsection
