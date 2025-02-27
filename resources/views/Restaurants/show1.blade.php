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

    .restaurant-details {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 600px;
        margin: auto;
    }

    p {
        margin: 10px 0;
        font-size: 16px;
    }

    strong {
        color: #35424a;
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

    button {
        background-color: #e8491d;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
        margin-left: 10px;
    }

    button:hover {
        background-color: #c8361a;
    }
</style>

<div class="restaurant-details">
    <h1>{{ $restaurant->name }}</h1>
    <p><strong>Address:</strong> {{ $restaurant->address }}</p>
    <p><strong>City:</strong> {{ $restaurant->city }}</p>
    <p><strong>Phone Number:</strong> {{ $restaurant->phone_number }}</p>
    <p><strong>Email:</strong> {{ $restaurant->email }}</p>
    <p><strong>Website:</strong> {{ $restaurant->website }}</p>
    <p><strong>Rating:</strong> {{ $restaurant->rating }}</p>
    <p><strong>Description:</strong> {{ $restaurant->description }}</p>
    
    <a href="{{ route('restaurants.edit', $restaurant) }}">Edit</a>
    
    <form action="{{ route('restaurants.destroy', $restaurant) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>