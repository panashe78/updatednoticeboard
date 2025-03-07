


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: white">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: white;
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
    <h1 style="color:blue">Create Accommodation</h1>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Accommodation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); max-width: 600px; margin: auto;">
        @csrf

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="name" style="font-weight: bold; color: #333;">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="profile_photo" style="display: block; font-weight: bold; color: #333;">
                <i class="fas fa-image" style="color: blue; margin-right: 8px;"></i> Cover Photo
            </label>
            <label style="display: inline-block; padding: 10px 20px; cursor: pointer; border: 2px dashed #007bff; border-radius: 5px; color: #007bff; transition: all 0.3s;">
                <input type="file" name="profile_photo" style="display: none;" required>
                Upload Photo
            </label>
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="rating" style="font-weight: bold; color: #333;"><i class="fas fa-star" style="color: blue;"></i> Rating (1-5)</label>
            <input type="number" name="rating" class="form-control" placeholder="Rating (1-5)" min="1" max="5" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="city" style="font-weight: bold; color: #333;"><i class="fas fa-map-marker-alt" style="color: blue;"></i> Location</label>
            <select name="city" id="city" class="form-control" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                <option value="Harare">Harare</option>
                <option value="Mutare">Mutare</option>
                <option value="Gweru">Gweru</option>
                <option value="Bulawayo">Bulawayo</option>
            </select>
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="phone_number" style="font-weight: bold; color: #333;"><i class="fas fa-phone" style="color: blue;"></i> Phone Number</label>
            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="website" style="font-weight: bold; color: #333;"><i class="fas fa-globe" style="color: blue;"></i> Website</label>
            <input type="url" name="website" class="form-control" placeholder="Website" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="average_price" style="font-weight: bold; color: #333;"><i class="fas fa-dollar-sign" style="color: blue;"></i> Price</label>
            <input type="number" name="average_price" class="form-control" placeholder="Average Price" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="opening_hours" style="font-weight: bold; color: #333;"><i class="fas fa-clock" style="color: blue;"></i> Opening Hours</label>
            <input type="time" name="opening_hours" class="form-control" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="category" style="font-weight: bold; color: #333;"><i class="fas fa-tags" style="color: blue;"></i> Available Rooms</label>
            <input type="text" name="category" class="form-control" placeholder="Category" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" hidden>
            <label for="description" style="font-weight: bold; color: #333;"><i class="fas fa-list" style="color: blue;"></i> Description</label>
            <select name="description" id="description" class="form-control" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                <option value="accommodation">Accommodation</option>
            </select>
        </div>

        <div class="form-group" hidden>
            <label for="cuisine" style="font-weight: bold; color: #333;"><i class="fas fa-utensil-spoon" style="color: blue;"></i> Cuisine</label>
            <select name="address" id="cuisine" class="form-control" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                <option value="none">Select Cuisine</option>
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

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="email" style="font-weight: bold; color: #333;"><i class="fas fa-envelope" style="color: blue;"></i> Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
            <i class="fas fa-plus"></i> Create
        </button>
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