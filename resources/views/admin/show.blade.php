<!-- resources/views/messages/show.blade.php -->

    <h1>{{ $message->title }}</h1>
    <p>{{ $message->body }}</p>
    <a href="{{ route('messages.edit', $message) }}">Edit</a>
    <form action="{{ route('messages.destroy', $message) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <br>
    <a href="{{ route('messages.index') }}">Back to Messages</a>
