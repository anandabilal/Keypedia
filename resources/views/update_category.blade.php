@extends('layouts.main')

@section('container')
    <div class="updateCategoryContainer">
        <div class="updateCategoryHeader">
            <p>Update Category</p>
        </div>
        <div class="updateCategory">
            <div class="boxImage">
                <img src="/images/{{ $categorySelected->image }}" alt="{{ $categorySelected->name }} image not found" width="250" height="250">
            </div>
            {{-- enctype="multipart/form-data" is needed for file uploads --}}
            <form action="/update_category/{{ $categorySelected->category_id }}" method="post" enctype="multipart/form-data">
                @csrf
                <table>
                    {{-- Category Name --}}
                    <tr>
                        <td align="right">Category Name</td>
                        <td>
                            <input type="text" name="name" id="name" value="{{ $categorySelected->name }}">
                        </td>
                    </tr>
                    {{-- Category Image --}}
                    <tr>
                        <td align="right">Category Image</td>
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
                    {{-- Update Category --}}
                    <tr>
                        <td></td>
                        <td align="left">
                            <button type="submit">Update Category</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection