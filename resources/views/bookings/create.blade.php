<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
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

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
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
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        button.submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button.submit-btn:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Create Bookings</h1>

        <form action="{{ route('bookings.store') }}" method="POST" class="booking-form">
            @csrf

            <div class="form-group">
                <label for="customer_name">Customer Name:</label>
                <input type="text" name="customer_name" required>
            </div>

            <div class="form-group">
                <label for="customer_phone">Customer Phone:</label>
                <input type="text" name="customer_phone" required>
            </div>

            <div class="form-group">
                <label for="customer_email">Customer Email:</label>
                <input type="email" name="customer_email" required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" name="time" required>
            </div>

            <div class="form-group">
                <label for="number_of_people">Number of People:</label>
                <input type="number" name="number_of_people" required>
            </div>

            <div class="form-group">
                <label for="restaurant_id">Select Restaurant:</label>
                <select name="restaurant_id" required>
                    <option value="">Choose a restaurant</option>
                    @foreach ($restaurants as $restaurant)
                        <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="table_number">Table Number:</label>
                <input type="number" name="table_number" required>
            </div>

            <div class="form-group">
                <label for="special_requests">Special Requests:</label>
                <textarea name="special_requests"></textarea>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" name="status" required>
            </div>

            <button type="submit" class="submit-btn">Create Booking</button>
        </form>
    </div>

</body>
</html>