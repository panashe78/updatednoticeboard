
@if($restaurant->isEmpty())
<p>No restaurants found.</p>
@else
<ul>
    @foreach($restaurant as $restaurants)
        <li>
            <h2>{{ $restaurants->name }}</h2>
            <p><strong>Cuisine:</strong> {{ $restaurants->address }}</p>
            <p><strong>Rating:</strong> {{ $restaurants->rating }} / 5</p>
            <p><strong>City:</strong> {{ $restaurants->city }}</p>
        </li>
    @endforeach
</ul>
@endif