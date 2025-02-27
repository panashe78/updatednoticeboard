
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin-right: 15px;
        }

        a:hover {
            text-decoration: underline;
        }

        .success-message {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background: #f9f9f9;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        li strong {
            display: block;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        p {
            margin: 5px 0;
            color: #555;
        }

        button {
            background-color: #d9534f;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
            margin-left: 10px;
        }

        button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Booking</h1>

        <a href="{{ route('bookings.create') }}">Create New Booking</a>

        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <ul>
            @foreach($bookings as $booking)
                <li>
                    <strong>{{ $booking->customer_name }}</strong> - 
                    Date: {{ $booking->date }} Time: {{ $booking->time }}
                    <p>Number of People: {{ $booking->number_of_people }}</p>
                    <p>Status: {{ $booking->status }}</p>
                    <a href="{{ route('bookings.show', $booking) }}">View</a>
                    <a href="{{ route('bookings.edit', $booking) }}">Edit</a>
                    <form action="{{ route('bookings.destroy', $booking) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
