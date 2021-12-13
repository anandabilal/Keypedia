@extends('layouts.main')

@section('container')
    <div class="manageCategoryContainer">
        <h1>Manage Category</h1>
        <div class="manageCategoryHeader">
            <div class="manageCategoryMessage">
                {{-- Successful Update --}}
                @if (session()->has('success'))
                    <span class="success">{{ session('success') }}</span>
                @endif
            </div>
            <div class="manageCategory">
                @foreach ($categories as $category)
                    <div class="boxOuter">
                        <div class="boxInner">
                            <img src="/images/{{ $category->image }}" alt="{{ $category->name }} image not found" width="350" height="350">
                            {{-- <a href="">{{ $category->name }}</a> --}}
                            <p>{{ $category->name }}</p>
                            <div class="boxButton">
                                {{-- Delete Category --}}
                                <form action="/manage_category/delete/{{ $category->category_id }}" method="post">
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this category?')">Delete Category</button>
                                </form>
                                {{-- Update Category --}}
                                <a class="updateButton" href="/update_category/{{ $category->category_id }}">Update Category</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
