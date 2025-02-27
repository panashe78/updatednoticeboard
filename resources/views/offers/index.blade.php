
<div class="container">
    <h1>Offers</h1>
    <a href="{{ route('offers.create') }}" class="btn btn-primary">Create Offer</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
                <tr>
                    <td>{{ $offer->title }}</td>
                    <td>${{ $offer->price }}</td>
                    <td>
                        <a href="{{ route('offers.show', $offer) }}" class="btn btn-info">View</a>
                        <a href="{{ route('offers.edit', $offer) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('offers.destroy', $offer) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
