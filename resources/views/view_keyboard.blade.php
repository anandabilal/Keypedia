@extends('layouts.main')

@section('container')
    <div class="viewKeyboardContainer">
        <h1>{{ $categorySelected->name }}</h1>
        <div class="viewKeyboardHeader">
            <div class="viewKeyboardBar">
                <div class="viewKeyboardSearchBar">
                    <form action="/view_keyboard/{{ $categorySelected->category_id }}" method="get">
                        @csrf
                        <input type="search" placeholder="Search by name or price.." name="search" id="search" value="{{ request('search') }}">
                        <button type="submit">Search</button>
                        {{-- Successful Update Keyboard --}}
                        @if (session()->has('success'))
                            <span class="success">{{ session('success') }}</span>
                        @endif
                    </form>
                </div>
                {{-- Pagination --}}
                @if ($keyboards->hasPages())
                    <div class="viewKeyboardPagination">
                        @if ($keyboards->onFirstPage())
                            <p><< Prev</p>
                            <p>({{ $keyboards->currentPage() }}/{{ $keyboards->lastPage() }})</p>
                            <a href="{{ $keyboards->nextPageUrl() }}">Next >></a>
                        @elseif ($keyboards->currentPage() < $keyboards->lastPage())
                            <a href="{{ $keyboards->previousPageUrl() }}"><< Prev</a>
                            <p>({{ $keyboards->currentPage() }}/{{ $keyboards->lastPage() }})</p>
                            <a href="{{ $keyboards->nextPageUrl() }}">Next >></a>
                        @else
                            <a href="{{ $keyboards->previousPageUrl() }}"><< Prev</a>
                            <p>({{ $keyboards->currentPage() }}/{{ $keyboards->lastPage() }})</p>
                            <p>Next >></p>
                        @endif
                    </div>
                @endif
            </div>
            <div class="viewKeyboard">
                @foreach ($keyboards as $keyboard)
                    <div class="boxOuter">
                        <div class="boxInner">
                            <img src="/images/{{ $keyboard->image }}" alt="{{ $keyboard->name }} image not found" width="350" height="350">
                            <a href="/keyboard_detail/{{ $keyboard->keyboard_id }}">{{ $keyboard->name }}</a>
                            <p>US$ {{ $keyboard->price }}</p>
                            @auth
                                {{-- Manager --}}
                                @if (auth()->user()->role_id == 1)
                                    <div class="boxButton">
                                        {{-- Delete Keyboard --}}
                                        <form action="/view_keyboard/delete/{{ $keyboard->keyboard_id }}" method="post">
                                            @csrf
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this keyboard?')">Delete Keyboard</button>
                                        </form>
                                        {{-- Update Keyboard --}}
                                        <a class="updateButton" href="/update_keyboard/{{ $keyboard->keyboard_id }}">Update Keyboard</a>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
