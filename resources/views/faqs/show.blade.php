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
        font-size: 16px;
        margin: 10px 0;
    }

    p strong {
        font-weight: bold;
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
    }

    a:hover {
        background-color: #e8491d;
    }
</style>

<h1>{{ $faq->question }}</h1>
<p><strong>Answer:</strong> {{ $faq->answer }}</p>
<p><strong>Restaurant:</strong> {{ $faq->restaurant->name }}</p>
<a href="{{ route('faqs.index') }}">Back to FAQs</a>