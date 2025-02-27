
<div class="container">
    <h1>Create Offer</h1>
    <form action="{{ route('offers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" step="0.01" min="0" required>
        </div>
        <div class="form-group">
            <label for="valid_until">Valid Until</label>
            <input type="date" name="valid_until" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
