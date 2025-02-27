
    <h1>Edit Message</h1>

    <form action="{{ route('messages.update', $message) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $message->title }}" required>
        <br>

        <label for="body">Body:</label>
        <textarea name="body" required>{{ $message->body }}</textarea>
        <br>

        <button type="submit">Update</button>
    </form>
