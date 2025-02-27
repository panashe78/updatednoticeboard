@if($restaurants->isEmpty())
    <p>No restaurants found.</p>
@else
    <ul>
        @foreach($restaurants as $restaurant)
            <li>{{ $restaurant->name }} - {{ $restaurant->address }} | Rating: {{ $restaurant->rating }}</li>
        @endforeach
    </ul>
@endif