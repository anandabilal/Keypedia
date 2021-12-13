@extends('layouts.main')

@section('container')
    <div class="updateKeyboardContainer">
        <div class="updateKeyboardHeader">
            <p>Update Keyboard</p>
        </div>
        <div class="updateKeyboard">
            <div class="boxImage">
                <img src="/images/{{ $keyboardSelected->image }}" alt="{{ $keyboardSelected->name }} image not found" width="250" height="250">
            </div>
            {{-- enctype="multipart/form-data" is needed for file uploads --}}
            <form action="/update_keyboard/{{ $keyboardSelected->keyboard_id }}" method="post" enctype="multipart/form-data">
                @csrf
                <table>
                    {{-- Category --}}
                    <tr>
                        <td align="right">Category</td>
                        <td>
                            <select name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                    @if ($category->category_id == $keyboardSelected->category_id)
                                        <option value="{{ $category->category_id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    {{-- Keyboard Name --}}
                    <tr>
                        <td align="right">Keyboard Name</td>
                        <td>
                            <input type="text" name="name" id="name" value="{{ $keyboardSelected->name }}">
                        </td>
                    </tr>
                    {{-- Keyboard Price --}}
                    <tr>
                        <td align="right">Keyboard Price ($)</td>
                        <td>
                            <input type="number" name="price" id="price" value="{{ $keyboardSelected->price }}">
                        </td>
                    </tr>
                    {{-- Description --}}
                    <tr>
                        <td align="right">Description</td>
                        <td>
                            <textarea name="description" id="description">{{ $keyboardSelected->description }}</textarea>
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
                    {{-- Update Keyboard --}}
                    <tr>
                        <td></td>
                        <td align="left">
                            <button type="submit">Update Keyboard</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
