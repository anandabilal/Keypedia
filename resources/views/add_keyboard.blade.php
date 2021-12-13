@extends('layouts.main')

@section('container')
    <div class="addKeyboardContainer">
        <div class="addKeyboardHeader">
            <p>Add Keyboard</p>
        </div>
        <div class="addKeyboard">
            {{-- enctype="multipart/form-data" is needed for file uploads --}}
            <form action="/add_keyboard" method="post" enctype="multipart/form-data">
                @csrf
                <table>
                    {{-- Category --}}
                    <tr>
                        <td align="right">Category</td>
                        <td align="left">
                            <select name="category_id" id="category_id">
                                <option value="" selected disabled hidden>Choose a Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    {{-- Keyboard Name --}}
                    <tr>
                        <td align="right">Keyboard Name</td>
                        <td>
                            <input type="text" name="name" id="name">
                        </td>
                    </tr>
                    {{-- Keyboard Price --}}
                    <tr>
                        <td align="right">Keyboard Price ($)</td>
                        <td>
                            <input type="number" name="price" id="price">
                        </td>
                    </tr>
                    {{-- Description --}}
                    <tr>
                        <td align="right">Description</td>
                        <td>
                            <textarea name="description" id="description"></textarea>
                        </td>
                    </tr>
                    {{-- Keyboard Image --}}
                    <tr>
                        <td align="right">Keyboard Image</td>
                        <td align="left">
                            <input type="file" name="image" id="image" accept="image/*">
                        </td>
                    </tr>
                    {{-- Error --}}
                    @if ($errors->any())
                        <tr>
                            <td></td>
                            <td align="left">
                                <span class="error">{{ $errors->first() }}</span>
                            </td>
                        </tr>
                    @endif
                    {{-- Successful Add Keyboard --}}
                    @if (session()->has('success'))
                        <tr>
                            <td></td>
                            <td align="left">
                                <span class="success">{{ session('success') }}</span>
                            </td>
                        </tr>
                    @endif
                    {{-- Add Keyboard --}}
                    <tr>
                        <td></td>
                        <td align="left">
                            <button type="submit">Add Keyboard</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
