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

    .notification.error {
        background-color: #f44336; /* Red */
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
    }

    strong {
        color: #35424a;
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

<h1>Your Testimonials</h1>

<a href="{{ route('testimonials.create') }}">Create New Testimonial</a>

@if(session('success'))
    <div class="notification success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="notification error">{{ session('error') }}</div>
@endif

<ul>
    @foreach($testimonials as $testimonial)
        <li>
            <strong>{{ $testimonial->customer_name }}</strong> - Rating: {{ $testimonial->rating }}
            <p>{{ $testimonial->message }}</p>
            <a href="{{ route('testimonials.edit', $testimonial) }}">Edit</a>
            <form action="{{ route('testimonials.destroy', $testimonial) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>