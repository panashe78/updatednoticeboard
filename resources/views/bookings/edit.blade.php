<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="time"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
            box-sizing: border-box;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        textarea {
            height: 100px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.2em;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit Booking</h1>

        <form action="{{ route('bookings.update', $booking) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="customer_name">Customer Name:</label>
            <input type="text" name="customer_name" value="{{ $booking->customer_name }}" required>

            <label for="customer_phone">Customer Phone:</label>
            <input type="text" name="customer_phone" value="{{ $booking->customer_phone }}" required>

            <label for="customer_email">Customer Email:</label>
            <input type="email" name="customer_email" value="{{ $booking->customer_email }}" required>

            <label for="date">Date:</label>
            <input type="date" name="date" value="{{ $booking->date }}" required>

            <label for="time">Time:</label>
            <input type="time" name="time" value="{{ $booking->time }}" required>

            <label for="number_of_people">Number of People:</label>
            <input type="number" name="number_of_people" value="{{ $booking->number_of_people }}" required>

            <label for="restaurant_id">Select Restaurant:</label>
            <select name="restaurant_id" required>
                <option value="">Choose a restaurant</option>
                @foreach ($restaurants as $restaurant)
                    <option value="{{ $restaurant->id }}" {{ $restaurant->id == $booking->restaurant_id ? 'selected' : '' }}>
                        {{ $restaurant->name }}
                    </option>
                @endforeach
            </select>

            <label for="table_number">Table Number:</label>
            <input type="number" name="table_number" value="{{ $booking->table_number }}" required>

            <label for="special_requests">Special Requests:</label>
            <textarea name="special_requests">{{ $booking->special_requests }}</textarea>

            <label for="status">Status:</label>
            <input type="text" name="status" value="{{ $booking->status }}" required>

            <button type="submit">Update Booking</button>
        </form>
    </div>

</body>
</html>