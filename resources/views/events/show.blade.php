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

    p {
        font-size: 18px;
        margin: 10px 0;
    }

    strong {
        color: #35424a;
    }

    a {
        display: inline-block;
        margin-top: 20px;
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

    form {
        display: inline;
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

<h1>{{ $event->event_name }}</h1>
<p><strong>Restaurant:</strong> {{ $event->restaurant->name }}</p>
<p><strong>Date:</strong> {{ $event->event_date->format('Y-m-d') }}</p>
<p><strong>Description:</strong> {{ $event->category }}</p>

<a href="{{ route('events.edit', $event) }}">Edit</a>
<form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
<a href="{{ route('events.index') }}">Back to Events</a>