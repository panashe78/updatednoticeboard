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

    div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    select,
    input[type="text"],
    input[type="date"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
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

<h1>Create Event</h1>

<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="restaurant_id">Restaurant</label>
        <select name="restaurant_id" id="restaurant_id" required>
            @foreach ($restaurants as $restaurant)
                <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="event_name">Event Name</label>
        <input type="text" name="event_name" id="event_name" required>
    </div>
    <div>
        <label for="event_date">Event Date</label>
        <input type="date" name="event_date" id="event_date" required>
    </div>
    <div>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" required>
    </div>
    <div>
        <label for="category">Description</label>
      
    <select name="category" id="category" required>
        
            <option>choose category of event</option>
            <option>Live Music Show</option>
            <option>Cultural Festival</option>
            <option>Nightlife</option>
    </select>
    </div>
    <div>
        <label for="profile_photo">Cover Photo</label>
        <input type="file" name="profile_photo" id="profile_photo" accept="image/*">
    </div>
    <button type="submit">Create Event</button>
</form>