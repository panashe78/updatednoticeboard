
<div class="container">
    <h1>Edit Offer</h1>
    <form action="{{ route('offers.update', $offer) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $offer->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $offer->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $offer->price }}" step="0.01" min="0" required>
        </div>
        <div class="form-group">
            <label for="valid_until">Valid Until</label>
            <input type="date" name="valid_until" class="form-control" value="{{ $offer->valid_until }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
