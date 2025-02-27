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

    select,
    input[type="text"],
    input[type="number"],
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

    textarea {
        resize: vertical;
    }
</style>

<h1>Create Testimonial</h1>

<form action="{{ route('testimonials.store') }}" method="POST">
    @csrf
    <select name="restaurant_id" required>
        <option value="">Select Restaurant</option>
        @foreach($restaurants as $restaurant)
            <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
        @endforeach
    </select>
    <textarea name="message" placeholder="Your message" required></textarea>
    <input type="text" name="customer_name" placeholder="Customer Name" required>
    <input type="number" name="rating" placeholder="Rating (1-5)" min="1" max="5" required>
    <button type="submit">Create</button>
</form>