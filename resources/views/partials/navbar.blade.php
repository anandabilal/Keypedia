<nav>
    <a href="/">KEYPEDIA</a>
    <ul>
        @auth
            <li><a>Categories</a>
                <ul>
                    @foreach ($categories as $category)
                        <li><a href="/view_keyboard/{{ $category->category_id }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            {{-- Manager --}}
            @if (auth()->user()->role_id == 1)
                <li><a class="role-name">MANAGER</a>
                    <ul>
                        <li><a href="/add_keyboard">Add Keyboard</a></li>
                        <li><a href="/manage_category">Manage Categories</a></li>
                        <li><a href="/change_password">Change Password</a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit"><a>Logout</a></button>
                            </form>
                        </li>
                        
                    </ul>
                </li>
            {{-- Customer --}}
            @else
                <li><a class="role-name">USER</a>
                    <ul>
                        <li><a href="/my_cart">My Cart</a></li>
                        <li><a href="/transaction_history">Transaction History</a></li>
                        <li><a href="/change_password">Change Password</a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit"><a>Logout</a></button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        @else
            {{-- Guest --}}
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        @endauth
        <li><p>{{ date('D, d-M-Y') }}</p></li>
    </ul>
</nav>
