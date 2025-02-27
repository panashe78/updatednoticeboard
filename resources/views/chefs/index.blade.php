
<h1>Your Chefs</h1>

<a href="{{ route('chefs.create') }}">Create New Chef</a>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

@if(session('error'))
    <div>{{ session('error') }}</div>
@endif

<ul>
    @foreach($chefs as $chef)
        <li>
            <strong>{{ $chef->name }}</strong> - Rating: {{ $chef->rating }}
            <p>Experience: {{ $chef->experience }}</p>
            <img src="{{ asset('../storage/' . $chef->profile_photo) }}" alt="{{ $chef->name }}" width="100">
            <a href="{{ route('chefs.edit', $chef) }}">Edit</a>
            <form action="{{ route('chefs.destroy', $chef) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
