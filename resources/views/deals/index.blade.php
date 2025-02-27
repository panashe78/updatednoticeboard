
<div class="container">
    <h1>Deals</h1>
    <a href="{{ route('deals.create') }}" class="btn btn-primary">Create Deal</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Discount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deals as $deal)
                <tr>
                    <td>{{ $deal->title }}</td>
                    <td>{{ $deal->discount_percentage }}%</td>
                    <td>
                        <a href="{{ route('deals.show', $deal) }}" class="btn btn-info">View</a>
                        <a href="{{ route('deals.edit', $deal) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('deals.destroy', $deal) }}" method="POST" style="display:inline;">
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
