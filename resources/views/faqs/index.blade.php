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

    .add-faq {
        display: block;
        text-align: center;
        margin-bottom: 20px;
        padding: 10px 20px;
        background-color: #35424a;
        color: white;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .add-faq:hover {
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

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        background: white;
        padding: 15px;
        margin: 10px 0;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    li a {
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

    .no-faqs {
        text-align: center;
        color: #777;
        margin-top: 20px;
    }
</style>

<h1>FAQs</h1>
<a href="{{ route('faqs.create') }}" class="add-faq">Add FAQ</a>

@if (session('success'))
    <div class="success-message">{{ session('success') }}</div>
@endif

@if ($faqs->isEmpty())
    <div class="no-faqs">No FAQs available.</div>
@else
    <ul>
        @foreach ($faqs as $faq)
            <li>
                <a href="{{ route('faqs.show', $faq) }}">{{ $faq->question }}</a>
                <div>
                    <a href="{{ route('faqs.edit', $faq) }}">Edit</a>
                    <form action="{{ route('faqs.destroy', $faq) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endif