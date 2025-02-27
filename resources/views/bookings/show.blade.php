<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
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
            font-weight: bold;
        }

        p {
            margin: 10px 0;
            color: #555;
            font-size: 1.2em;
            line-height: 1.6;
        }

        strong {
            color: #007bff;
            font-size: 1.1em;
        }

        .button-group {
            margin-top: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin-right: 15px;
            font-weight: 500;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        button {
            background-color: #d9534f;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 15px;
            cursor: pointer;
            margin-left: 10px;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #c9302c;
        }

        .divider {
            border-top: 1px solid #e0e0e0;
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Booking Details</h1>

        <p><strong>Customer Name:</strong> {{ $booking->customer_name }}</p>
        <p><strong>Phone:</strong> {{ $booking->customer_phone }}</p>
        <p><strong>Email:</strong> {{ $booking->customer_email }}</p>
        <p><strong>Date:</strong> {{ $booking->date }}</p>
        <p><strong>Time:</strong> {{ $booking->time }}</p>
        <p><strong>Number of People:</strong> {{ $booking->number_of_people }}</p>
        <p><strong>Restaurant ID:</strong> {{ $booking->restaurant_id }}</p>
        <p><strong>User ID:</strong> {{ $booking->user_id }}</p>
        <p><strong>Table Number:</strong> {{ $booking->table_number }}</p>
        <p><strong>Special Requests:</strong> {{ $booking->special_requests }}</p>
        <p><strong>Status:</strong> {{ $booking->status }}</p>

        <div class="divider"></div>

        <div class="button-group">
            <a href="{{ route('bookings.edit', $booking) }}">Edit</a>
            <form action="{{ route('bookings.destroy', $booking) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            <a href="{{ route('bookings.index') }}">Back to Bookings</a>
        </div>
    </div>

</body>
</html>