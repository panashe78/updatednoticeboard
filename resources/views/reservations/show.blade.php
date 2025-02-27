<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f0f0f0;
        color: #333;
    }

    .container {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 600px;
        margin: auto;
    }

    h1 {
        text-align: center;
        color: #35424a;
        margin-bottom: 20px;
    }

    .progress {
        height: 30px;
        background-color: #e0e0e0;
        border-radius: 5px;
        margin: 20px 0;
    }

    .progress-bar {
        height: 100%;
        background-color: gold;
        border-radius: 5px;
        transition: width 0.5s;
    }

    p {
        font-size: 18px;
        text-align: center;
    }
</style>

<div class="container">
    <h1>{{ $restaurant->name }}</h1>
    
    <div class="progress">
        <div class="progress-bar" 
             style="width: {{ $restaurant->rating * 20 }}%;">
        </div>
    </div>
    
    <p>Rating: {{ $restaurant->rating }}/5</p>
</div>