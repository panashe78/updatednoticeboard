
<div class="container">
    <h1>Edit Deal</h1>
    <form action="{{ route('deals.update', $deal) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $deal->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $deal->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="discount_percentage">Discount Percentage</label>
            <input type="number" name="discount_percentage" class="form-control" value="{{ $deal->discount_percentage }}" step="0.01" min="0" max="100">
        </div>
        <div class="form-group">
            <label for="price_after_discount">Price After Discount</label>
            <input type="number" name="price_after_discount" class="form-control" value="{{ $deal->price_after_discount }}" step="0.01" min="0">
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="form-control" value="{{ $deal->start_date }}" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" class="form-control" value="{{ $deal->end_date }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
