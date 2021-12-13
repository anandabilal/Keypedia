@extends('layouts.main')

@section('container')
    <div class="keyboardDetailContainer">
        <div class="keyboardDetailHeader">
            <p>Keyboard Detail</p>
        </div>
        <div class="keyboardDetail">
            <div class="boxImage">
                <img src="/images/{{ $keyboardSelected->image }}" alt="{{ $keyboardSelected->name }} image not found" width="250" height="250">
            </div>
            <form action="/keyboard_detail/add_to_cart/{{ $keyboardSelected->keyboard_id }}" method="post">
                @csrf
                <table>
                    {{-- Name --}}
                    <tr>
                        <td colspan="2" align="left">
                            <h3>{{ $keyboardSelected->name }}</h3>
                        </td>
                    </tr>
                    {{-- Price --}}
                    <tr>
                        <td colspan="2" align="left">
                            <p>$ {{ $keyboardSelected->price }}</p>
                        </td>
                    </tr>
                    {{-- Description --}}
                    <tr>
                        <td colspan="2" align="left">
                            <p>{{ $keyboardSelected->description }}</p>
                        </td>
                    </tr>
                    {{-- Guest / Customer --}}
                    @if (auth()->user() == null || auth()->user()->role_id == 2)
                        {{-- Quantity --}}
                        <tr>
                            <td align="left">
                                Quantity
                            </td>
                            <td align="left">
                                <input type="number" name="quantity" id="quantity">
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
                        {{-- Successful Add to Cart --}}
                        @if (session()->has('success'))
                            <tr>
                                <td></td>
                                <td align="left">
                                    <span class="success">{{ session('success') }}</span>
                                </td>
                            </tr>
                        @endif
                        {{-- Add to Cart --}}
                        <tr>
                            <td></td>
                            <td align="left">
                                <button type="submit">Add to Cart</button>
                            </td>
                        </tr>
                    @endif
                </table>
            </form>
        </div>
    </div>
@endsection
