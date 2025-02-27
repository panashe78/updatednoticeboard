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

<h1>Edit Event</h1>

<form action="{{ route('events.update', $event) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div>
        <label for="restaurant_id">Restaurant</label>
        <select name="restaurant_id" id="restaurant_id" required>
            @foreach ($restaurants as $restaurant)
                <option value="{{ $restaurant->id }}" {{ $restaurant->id == $event->restaurant_id ? 'selected' : '' }}>
                    {{ $restaurant->name }}
                </option>
            @endforeach
        </select>
    </div>
    
    <div>
        <label for="event_name">Event Name</label>
        <input type="text" name="event_name" id="event_name" value="{{ $event->event_name }}" required>
    </div>
    
    <div>
        <label for="event_date">Event Date</label>
        <input type="date" name="event_date" id="event_date" value="{{ $event->event_date->format('Y-m-d') }}" required>
    </div>
    
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required>{{ $event->description }}</textarea>
    </div>
    
    <button type="submit">Update Event</button>
</form>