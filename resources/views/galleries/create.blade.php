<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Gallery for {{ $restaurant->name }}</h2>
        <form action="{{ route('restaurants.gallery.store', $restaurant) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="images" class="form-label">Upload Images</label>
                <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple>
            </div>
            <div class="mb-3">
                <label for="videos" class="form-label">Upload Videos</label>
                <input type="file" class="form-control" id="videos" name="videos[]" accept="video/*" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Add Gallery</button>
        </form>
    </div>
</body>
</html>