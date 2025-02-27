<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Restaurant Added</title>
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

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        a {
            color: #e8491d;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #35424a;
        }

        .restaurant-details {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="restaurant-details">
        <h1>A New Restaurant Has Been Added!</h1>
        <p><strong>Name:</strong> {{ $restaurant->name }}</p>
        <p><strong>Address:</strong> {{ $restaurant->address }}</p>
        <p><strong>City:</strong> {{ $restaurant->city }}</p>
        <p><strong>Phone Number:</strong> {{ $restaurant->phone_number }}</p>
        <p><strong>Website:</strong> <a href="{{ $restaurant->website }}" target="_blank">{{ $restaurant->website }}</a></p>
        <p><a href="{{ url('/restaurants/' . $restaurant->id) }}">View Restaurant</a></p>
        <p>Thank you for being a subscriber!</p>
    </div>
</body>
</html>