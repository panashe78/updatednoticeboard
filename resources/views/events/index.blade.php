<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f0f0f0;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #35424a;
        margin-bottom: 20px;
    }

    a {
        display: inline-block;
        margin-bottom: 20px;
        padding: 10px 15px;
        background-color: #35424a;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        transition: background 0.3s;
        text-align: center;
    }

    a:hover {
        background-color: #e8491d;
    }

    .notification {
        text-align: center;
        margin: 20px 0;
        padding: 10px;
        border-radius: 5px;
        color: white;
    }

    .notification.success {
        background-color: #4caf50; /* Green */
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 15px;
        margin-bottom: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    button {
        background-color: #e8491d;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 10px;
        transition: background 0.3s;
    }

    button:hover {
        background-color: #c8361a;
    }
</style>

<h1>Events</h1>
<a href="{{ route('events.create') }}">Add Event</a>

@if (session('success'))
    <div class="notification success">{{ session('success') }}</div>
@endif

@if ($events->isEmpty())
    <div>No events available.</div>
@else
    <ul>
        @foreach ($events as $event)
            <li>
                <a href="{{ route('events.show', $event->id) }}">{{ htmlspecialchars($event->event_name) }}</a>
                <div>
                    <a href="{{ route('events.edit', $event->id) }}">Edit</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endif