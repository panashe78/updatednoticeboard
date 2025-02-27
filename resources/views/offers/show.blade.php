
<div class="container">
    <h1>{{ $offer->title }}</h1>
    <p><strong>Description:</strong> {{ $offer->description }}</p>
    <p><strong>Price:</strong> ${{ $offer->price }}</p>
    <p><strong>Valid Until:</strong> {{ $offer->valid_until }}</p>
    <a href="{{ route('offers.edit', $offer) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('offers.destroy', $offer) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
    <a href="{{ route('offers.index') }}" class="btn btn-secondary">Back to Offers</a>
</div>
