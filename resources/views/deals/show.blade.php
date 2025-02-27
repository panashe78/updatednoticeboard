
<div class="container">
    <h1>{{ $deal->title }}</h1>
    <p><strong>Description:</strong> {{ $deal->description }}</p>
    <p><strong>Discount:</strong> {{ $deal->discount_percentage }}%</p>
    <p><strong>Price After Discount:</strong> ${{ $deal->price_after_discount }}</p>
    <p><strong>Start Date:</strong> {{ $deal->start_date }}</p>
    <p><strong>End Date:</strong> {{ $deal->end_date }}</p>
    <a href="{{ route('deals.edit', $deal) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('deals.destroy', $deal) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
    <a href="{{ route('deals.index') }}" class="btn btn-secondary">Back to Deals</a>
</div>