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
        text-decoration: none;
        color: #e8491d;
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
    }

    .add-message {
        display: block;
        text-align: center;
        margin-bottom: 20px;
        padding: 10px 20px;
        background-color: #35424a;
        color: white;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .add-message:hover {
        background-color: #e8491d;
    }

    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center;
    }

    .messages-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 0;
        padding: 0;
    }

    .messages-grid li {
        background: white;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .messages-grid a {
        color: #35424a;
    }

    .delete-button {
        background-color: #e8491d;
        border: none;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .delete-button:hover {
        background-color: #c8361a;
    }

    @media (max-width: 768px) {
        .messages-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .messages-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<h1>Messages</h1>
<a href="{{ route('messages.create') }}" class="add-message">Add Message</a>

@if (session('success'))
    <div class="success-message">{{ session('success') }}</div>
@endif

<ul class="messages-grid">
    @foreach ($messages as $message)
        <li>
            <a href="{{ route('messages.show', $message) }}">{{ $message->title }}</a> - 
            <a href="{{ route('messages.edit', $message) }}">Edit</a>
            <form action="{{ route('messages.destroy', $message) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Delete</button>
            </form>
        </li>
    @endforeach
</ul>