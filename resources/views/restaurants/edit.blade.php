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

    form {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 600px;
        margin: auto;
    }

    input[type="text"],
    input[type="url"],
    input[type="email"],
    input[type="number"],
    input[type="time"],
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 15px;
        font-size: 16px;
        transition: border 0.3s;
    }

    input:focus,
    textarea:focus {
        border-color: #e8491d;
        outline: none;
    }

    button {
        background-color: #35424a;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background 0.3s;
        width: 100%;
    }

    button:hover {
        background-color: #e8491d;
    }

    label {
        font-size: 14px;
        color: #555;
    }

    textarea {
        resize: vertical;
    }
</style>

<h1>Edit Restaurant</h1>

<form action="{{ route('restaurants.update', $restaurant) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $restaurant->name }}" required>
    
    <input type="file" name="profile_photo">
    <label>Current Profile Photo: {{ $restaurant->profile_photo }}</label>
    
    <textarea name="address" required>{{ $restaurant->address }}</textarea>
    
    <input type="number" name="rating" value="{{ $restaurant->rating }}" min="1" max="5" required>
    
    <input type="text" name="city" value="{{ $restaurant->city }}" required>
    
    <input type="text" name="phone_number" value="{{ $restaurant->phone_number }}" required>
    
    <input type="url" name="website" value="{{ $restaurant->website }}">
    
    <input type="number" name="average_price" value="{{ $restaurant->average_price }}" required>
    
    <input type="time" name="opening_hours" value="{{ $restaurant->opening_hours }}" required>
    
    <textarea name="description" required>{{ $restaurant->description }}</textarea>
    
    <input type="email" name="email" value="{{ $restaurant->email }}" required>
    
    <button type="submit">Update</button>
</form>