<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f0f0f0;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #35424a;
        margin-bottom: 20px;
    }

    img {
        display: block;
        margin: 0 auto 20px;
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    p {
        font-size: 16px;
        margin: 10px 0;
    }

    p strong {
        font-weight: bold;
    }

    a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 15px;
        background-color: #35424a;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        transition: background 0.3s;
    }

    a:hover {
        background-color: #e8491d;
    }

    .availability {
        font-weight: bold;
        color: {{ $menu->availability ? 'green' : 'red' }};
    }
</style>

<h1>{{ $menu->name }}</h1>
<img src="{{ asset('storage/photos/' . $menu->photo) }}" alt="{{ $menu->name }}">
<p><strong>Description:</strong> {{ $menu->description }}</p>
<p><strong>Price:</strong> ${{ number_format($menu->price, 2) }}</p>
<p><strong>Quantity:</strong> {{ $menu->quantity }}</p>
<p><strong>Category:</strong> {{ $menu->category }}</p>
<p><strong>Spicy Level:</strong> {{ $menu->spicy_level }}</p>
<p><strong>Status:</strong> <span class="availability">{{ $menu->availability ? 'Available' : 'Not Available' }}</span></p>
<a href="{{ route('menus.index') }}">Back to Menu</a>
