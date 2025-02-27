<div class="form-container">
    <h1>Create Chef</h1>

    <form action="{{ route('chefs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Chef Name" required>
        <input type="file" name="profile_photo">
        <textarea name="experience" placeholder="Experience" required></textarea>
        <select name="restaurant_id" required>
            <option value="">Select Restaurant</option>
            @foreach($restaurants as $restaurant)
                <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
            @endforeach
        </select>
        <input type="number" name="rating" placeholder="Rating (0-5)" min="0" max="5">
        <button type="submit">Create</button>
    </form>
</div>

<style>
    .form-container {
        max-width: 500px; /* Max width for form */
        margin: 40px auto; /* Center the form */
        padding: 20px; /* Padding around the form */
        border: 1px solid #ddd; /* Light border */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
        background-color: #f9f9f9; /* Light background color */
    }

    .form-container h1 {
        text-align: center; /* Center the heading */
        margin-bottom: 20px; /* Space below the heading */
        color: #333; /* Dark text color */
    }

    .form-container input,
    .form-container textarea,
    .form-container select {
        width: 100%; /* Full width inputs */
        padding: 10px; /* Padding inside inputs */
        margin-bottom: 15px; /* Space between inputs */
        border: 1px solid #ccc; /* Border for inputs */
        border-radius: 5px; /* Rounded corners for inputs */
        font-size: 16px; /* Font size */
    }

    .form-container button {
        width: 100%; /* Full width button */
        padding: 10px; /* Padding inside button */
        border: none; /* Remove default border */
        border-radius: 5px; /* Rounded corners for button */
        background-color: #007bff; /* Bootstrap primary color */
        color: white; /* White text color */
        font-size: 16px; /* Font size */
        cursor: pointer; /* Pointer cursor on hover */
        transition: background-color 0.3s; /* Smooth background color transition */
    }

    .form-container button:hover {
        background-color: #0056b3; /* Darker shade on hover */
    }
</style>

