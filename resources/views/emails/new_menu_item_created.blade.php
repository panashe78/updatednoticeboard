<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Menu Item Created</title>
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

        strong {
            color: #35424a;
        }

        .menu-item {
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
    <div class="menu-item">
        <h1>New Menu Item: {{ $menuItem->name }}</h1>
        <p><strong>Description:</strong> {{ $menuItem->description }}</p>
        <p><strong>Price:</strong> ${{ number_format($menuItem->price, 2) }}</p>
        <p><strong>Quantity:</strong> {{ $menuItem->quantity }}</p>
        <p><strong>Category:</strong> {{ $menuItem->category }}</p>
        <p><strong>Spicy Level:</strong> {{ $menuItem->spicy_level }}</p>
        <p><strong>Status:</strong> {{ $menuItem->availability ? 'Available' : 'Not Available' }}</p>
    </div>
</body>
</html>