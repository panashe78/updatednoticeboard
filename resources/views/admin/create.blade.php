<!-- resources/views/messages/create.blade.php -->

    <h1>Create Message</h1>

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>

        <label for="body">Body:</label>
        <textarea name="body" required></textarea>
        <br>

        <button type="submit">Create</button>
    </form>
