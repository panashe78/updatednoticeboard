<!DOCTYPE html>
<html>
<head>
    <title>Donation Successful</title>
</head>
<body>
    <h1>Thank you for your donation!</h1>
    <p>Order ID: {{ $orderId }}</p>
    <p>Name: {{ $userName }}</p>
    <p>Email: {{ $userEmail }}</p>
    <p>Address: {{ $userAddress }}</p>
    <p>Timestamp: {{ $timestamp }}</p>
    <p>Please find your donation QR code attached to this email.</p>
</body>
</html>