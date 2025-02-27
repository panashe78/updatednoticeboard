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
    input[type="date"],
    input[type="time"],
    input[type="number"],
    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 15px;
        font-size: 16px;
        transition: border 0.3s;
    }

    select:focus,
    input[type="date"]:focus,
    input[type="time"]:focus,
    input[type="number"]:focus,
    input[type="text"]:focus {
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

<h1>Edit Reservation</h1>

<form action="{{ route('reservations.update', $reservation) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="restaurant_id">Select Restaurant:</label>
    <select name="restaurant_id" required>
        @foreach($restaurants as $restaurant)
            <option value="{{ $restaurant->id }}" {{ $restaurant->id == $reservation->restaurant_id ? 'selected' : '' }}>
                {{ $restaurant->name }}
            </option>
        @endforeach
    </select>

    <label for="reservation_date">Reservation Date:</label>
    <input type="date" name="reservation_date" value="{{ $reservation->reservation_date }}" required>

    <label for="reservation_time">Reservation Time:</label>
    <input type="time" name="reservation_time" value="{{ $reservation->reservation_time }}" required>

    <label for="guest_count">Number of Guests:</label>
    <input type="number" name="guest_count" value="{{ $reservation->guest_count }}" min="1" required>

    <label for="special_requests">Special Requests (optional):</label>
    <input type="text" name="special_requests" value="{{ $reservation->special_requests }}">

    <label for="status">Status:</label>
    <input type="text" name="status" placeholder="Reservation Status (optional)" value="{{ $reservation->status }}">

    <button type="submit">Update</button>
</form>