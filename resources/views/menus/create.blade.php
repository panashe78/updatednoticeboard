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
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 500px;
        margin: auto;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    select,
    input[type="text"],
    input[type="number"],
    input[type="file"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 15px;
        font-size: 16px;
        transition: border 0.3s;
    }

    select:focus,
    input[type="text"]:focus,
    input[type="number"]:focus,
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

    input[type="checkbox"] {
        margin-right: 10px;
    }

    /* Responsive adjustments */
    @media (max-width: 480px) {
        form {
            padding: 15px;
        }

        button {
            padding: 8px 10px;
        }
    }
</style>

<h1>Add Menu Item</h1>

<form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="restaurant_id">Select Restaurant:</label>
    <select name="restaurant_id" required>
        <option value="">Select Restaurant</option>
        @foreach ($restaurants as $restaurant)
            <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
        @endforeach
    </select>

    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Name" required>

    <label for="photo">Photo:</label>
    <input type="file" name="photo" required>

    <label for="price">Price:</label>
    <input type="number" name="price" placeholder="Price" required>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" placeholder="Quantity" required>

    <label for="description">Description:</label>
    <textarea name="description" placeholder="Description" required></textarea>

    <label for="category">Category:</label>
    <select name="category" required>
        <option value="">Select Category</option>
        <option value="dessert">Dessert</option>
        <option value="supper">Supper</option>
        <option value="breakfast">Breakfast</option>
        <option value="dinner">Dinner</option>
        <option value="appetizer">Appetizer</option>
    </select>

    <label for="availability">
        <input type="checkbox" name="availability" value="1"> Available
    </label>

    <label for="spicy_level">Spicy Level:</label>
    <input type="number" name="spicy_level" placeholder="Spicy Level" min="0" max="5" required>

    <button type="submit">Create</button>
</form>