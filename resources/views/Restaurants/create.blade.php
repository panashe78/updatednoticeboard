


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: black">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: black;
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
    
        input[type="text"],
        input[type="url"],
        input[type="email"],
        input[type="number"],
        input[type="time"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
            transition: border 0.3s;
        }
    
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <h1 style="color: red">Create Restaurant</h1>
    
    <form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data" class="container mt-4">
        @csrf
        <div class="form-group">
            <label for="name"><i class="fas fa-utensils"></i> Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
    
        <div class="form-group">
            <label for="profile_photo"><i class="fas fa-image"></i> Profile Photo</label>
            <input type="file" name="profile_photo" class="form-control-file" required>
        </div>
    
        <div class="form-group">
            <label for="rating"><i class="fas fa-star"></i> Rating (1-5)</label>
            <input type="number" name="rating" class="form-control" placeholder="Rating (1-5)" min="1" max="5" required>
        </div>
    
        <div class="form-group">
            <label for="city"><i class="fas fa-map-marker-alt"></i> City</label>
            <input type="text" name="city" class="form-control" placeholder="City" required>
        </div>
    
        <div class="form-group">
            <label for="phone_number"><i class="fas fa-phone"></i> Phone Number</label>
            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" required>
        </div>
    
        <div class="form-group">
            <label for="website"><i class="fas fa-globe"></i> Website</label>
            <input type="url" name="website" class="form-control" placeholder="Website">
        </div>
    
        <div class="form-group">
            <label for="average_price"><i class="fas fa-dollar-sign"></i> Average Price</label>
            <input type="number" name="average_price" class="form-control" placeholder="Average Price" required>
        </div>
    
        <div class="form-group">
            <label for="opening_hours"><i class="fas fa-clock"></i> Opening Hours</label>
            <input type="time" name="opening_hours" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="category"><i class="fas fa-tags"></i> Category</label>
            <input type="text" name="category" class="form-control" placeholder="Category" required>
        </div>
    
        <div class="form-group">
            <label for="description"><i class="fas fa-list"></i> Description</label>
            <select name="description" id="description" class="form-control" required>
                <option value="chillspot">Chill Spot</option>
                <option value="restaurant">Restaurant</option>
                <option value="bar">Bar</option>
                <option value="fast food restaurant">Fast Food Restaurant</option>
                <option value="chilspot">Chill Spot</option>
            </select>
        </div>
    
        <div class="form-group">
            <label for="cuisine"><i class="fas fa-utensil-spoon"></i> Cuisine</label>
            <select name="address" id="cuisine" class="form-control" required>
                <option value="">Select Cuisine</option>
                <option value="Italian">Italian</option>
                <option value="Chinese">Chinese</option>
                <option value="Mexican">Mexican</option>
                <option value="Indian">Indian</option>
                <option value="Thai">Thai</option>
                <option value="French">French</option>
                <option value="Japanese">Japanese</option>
                <option value="Mediterranean">Mediterranean</option>
                <option value="Spanish">Spanish</option>
                <option value="American">American</option>
                <option value="Vietnamese">Vietnamese</option>
                <option value="Korean">Korean</option>
                <option value="Lebanese">Lebanese</option>
            </select>
        </div>
    
        <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
    
        <button type="submit" class="btn btn-danger"><i class="fas fa-plus"></i> Create</button>
    </form>
    
    <style>
        .form-group label {
            font-weight: bold;
        }
    
        .form-group i {
            margin-right: 8px; /* Space between icon and text */
            color: #dc3545; /* Bootstrap primary color (red) */
        }
    
        .btn-primary {
            width: 100%; /* Full-width button */
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>