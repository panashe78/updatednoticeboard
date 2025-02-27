<!-- resources/views/messages/index.blade.php -->

    <h1>Messages</h1>
    <a href="{{ route('messages.create') }}">Add Message</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($messages as $message)
            <li>
                <a href="{{ route('messages.show', $message) }}">{{ $message->title }}</a> - 
                <a href="{{ route('messages.edit', $message) }}">Edit</a>
                <form action="{{ route('messages.destroy', $message) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
