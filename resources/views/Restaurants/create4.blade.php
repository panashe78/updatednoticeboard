<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Event Form</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); max-width: 600px; margin: auto;">
        @csrf

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="name" style="font-weight: bold; color: #333;">Event Theme/Title</label>
            <input type="text" name="name" class="form-control" placeholder="Name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 20px;">
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
            <input type="number" value="0" name="rating" class="form-control" placeholder="Rating (1-5)" min="1" max="5" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="city" style="font-weight: bold; color: #333;"><i class="fas fa-map-marker-alt" style="color: blue;"></i> Event Location</label>
            <select name="city" id="city" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                <option value="Harare">Harare</option>
                <option value="Mutare">Mutare</option>
                <option value="Gweru">Gweru</option>
                <option value="Bulawayo">Bulawayo</option>
            </select>
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="phone_number" style="font-weight: bold; color: #333;"><i class="fas fa-phone" style="color: blue;"></i> Phone Number</label>
            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="website" style="font-weight: bold; color: #333;"><i class="fas fa-globe" style="color: blue;"></i> Website</label>
            <input type="url" name="website" class="form-control" placeholder="Website" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="average_price" style="font-weight: bold; color: #333;"><i class="fas fa-dollar-sign" style="color: blue;"></i> Event Price</label>
            <input type="number" name="average_price" class="form-control" placeholder="Average Price" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="opening_hours" style="font-weight: bold; color: #333;"><i class="fas fa-clock" style="color: blue;"></i> Start Date</label>
            <input type="time" name="opening_hours" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="category" style="font-weight: bold; color: #333;"><i class="fas fa-calendar" style="color: blue;"></i> End Date</label>
            <input type="text" name="category" class="form-control" placeholder="Category" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group" hidden>
            <label for="description"><i class="fas fa-list" style="color: blue;"></i> Description</label>
            <select name="description" id="description" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                <option value="event">Accommodation</option>
            </select>
        </div>

        <div class="form-group" hidden>
            <label for="cuisine"><i class="fas fa-utensil-spoon"></i> Cuisine</label>
            <select name="address" id="cuisine" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
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
            <input type="email" name="email" class="form-control" placeholder="Email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
            <i class="fas fa-plus"></i> Create
        </button>
    </form>
</body>
</html>