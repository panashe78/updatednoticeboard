


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

    
    <form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data" class="container mt-4">
        @csrf
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h2 class="card-title mb-4 text-center">Create a New Restaurant</h2>
    
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label"><i class="fas fa-utensils me-2"></i>Name</label>
                    <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter restaurant name" required>
                </div>
    
                <!-- Cover Photo -->
                <div class="mb-3">
                    <label for="profile_photo" class="form-label"><i class="fas fa-image me-2"></i>Cover Photo</label>
                    <div class="file-upload-container">
                        <input type="file" name="profile_photo" id="profile_photo" class="form-control-file" required hidden>
                        <label for="profile_photo" class="file-upload-label">
                            <div class="file-upload-design">
                                <i class="fas fa-cloud-upload-alt fa-3x mb-3"></i>
                                <p class="mb-1">Drag & drop your image here</p>
                                <p class="text-muted">or <span class="file-upload-browse">browse</span> to upload</p>
                            </div>
                        </label>
                    </div>
                </div>
    
                <!-- Rating -->
                <div class="mb-3">
                    <label for="rating" class="form-label"><i class="fas fa-star me-2"></i>Rating (1-5)</label>
                    <input type="number" name="rating" class="form-control form-control-lg" placeholder="Enter rating (1-5)" min="1" max="5" required>
                </div>
    
                <!-- City -->
                <div class="mb-3">
                    <label for="city" class="form-label"><i class="fas fa-map-marker-alt me-2"></i>City</label>
                    <select name="city" id="city" class="form-select form-select-lg" required>
                        <option value="Harare">Harare</option>
                        <option value="Mutare">Mutare</option>
                        <option value="Gweru">Gweru</option>
                        <option value="Bulawayo">Bulawayo</option>
                    </select>
                </div>
    
                <!-- Phone Number -->
                <div class="mb-3">
                    <label for="phone_number" class="form-label"><i class="fas fa-phone me-2"></i>Phone Number</label>
                    <input type="text" name="phone_number" class="form-control form-control-lg" placeholder="Enter phone number" required>
                </div>
    
                <!-- Website -->
                <div class="mb-3">
                    <label for="website" class="form-label"><i class="fas fa-globe me-2"></i>Website</label>
                    <input type="url" name="website" class="form-control form-control-lg" placeholder="Enter website URL">
                </div>
    
                <!-- Average Price -->
                <div class="mb-3">
                    <label for="average_price" class="form-label"><i class="fas fa-dollar-sign me-2"></i>Average Price</label>
                    <input type="number" name="average_price" class="form-control form-control-lg" placeholder="Enter average price" required>
                </div>
    
                <!-- Opening Hours -->
                <div class="mb-3">
                    <label for="opening_hours" class="form-label"><i class="fas fa-clock me-2"></i>Opening Hours</label>
                    <input type="time" name="opening_hours" class="form-control form-control-lg" required>
                </div>
    
                <!-- Category -->
                <div class="mb-3">
                    <label for="category" class="form-label"><i class="fas fa-tags me-2"></i>Category</label>
                    <input type="text" name="category" class="form-control form-control-lg" placeholder="Enter category" required>
                </div>
    
                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label"><i class="fas fa-list me-2"></i>Description</label>
                    <select name="description" id="description" class="form-select form-select-lg" required>
                        <option value="accommodation">Accommodation</option>
                        <option value="restaurant">Restaurant</option>
                        <option value="business">businesses</option>
                    </select>
                </div>
    
                <!-- Cuisine -->
                <div class="mb-3">
                    <label for="cuisine" class="form-label"><i class="fas fa-utensil-spoon me-2"></i>Cuisine</label>
                    <select name="address" id="cuisine" class="form-select form-select-lg" required>
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
    
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="form-label"><i class="fas fa-envelope me-2"></i>Email</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter email" required>
                </div>
    
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-plus me-2"></i>Create</button>
                </div>
            </div>
        </div>
    </form>
    
    <!-- Custom CSS for Modern Look -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
        }
        .form-control-lg, .form-select-lg {
            border-radius: 10px;
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
        }
        .form-label {
            font-weight: 500;
        }
        .file-upload-container {
            border: 2px dashed #0d6efd;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }
        .file-upload-container:hover {
            border-color: #0b5ed7;
            background-color: #e9f0ff;
        }
        .file-upload-label {
            cursor: pointer;
            display: block;
        }
        .file-upload-design {
            color: #0d6efd;
        }
        .file-upload-design i {
            color: #0d6efd;
        }
        .file-upload-browse {
            color: #0d6efd;
            font-weight: 500;
            text-decoration: underline;
        }
        .file-upload-browse:hover {
            color: #0b5ed7;
        }
        #profile_photo:focus + .file-upload-label .file-upload-container {
            border-color: #0b5ed7;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
    </style>
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