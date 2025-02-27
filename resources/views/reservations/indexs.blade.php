
<h1>Your Reservations</h1>

<a href="{{ route('reservations.create') }}">Create New Reservation</a>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<ul>
    @foreach($reservations as $reservation)
        <li>
            <strong>Restaurant ID: {{ $reservation->restaurant_id }}</strong> - 
            Date: {{ $reservation->reservation_date }} 
            Time: {{ $reservation->reservation_time }}
            <p>Guests: {{ $reservation->guest_count }}</p>
            <p>Special Requests: {{ $reservation->special_requests }}</p>
            <p>Status: {{ $reservation->status }}</p>
            
            @php
                // Fetch the restaurant details using the restaurant ID
                $restaurant = \App\Models\Restaurant::find($reservation->restaurant_id);
            @endphp

            @if($restaurant)
                <p><strong>Restaurant Name: {{ $restaurant->name }}</strong></p>
                <div class="progress" style="height: 20px; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="progress-bar" 
                         style="width: {{ $restaurant->rating * 20 }}%; 
                                height: 100%; 
                                background-color: gold; 
                                border-radius: 5px; 
                                transition: width 0.5s;">
                    </div>
                </div>
                <p>Rating: {{ $restaurant->rating }}/5</p>
            @else
                <p>Restaurant not found.</p>
            @endif
            
            <a href="{{ route('reservations.edit', $reservation) }}">Edit</a>
            <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
