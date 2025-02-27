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

    .event-details {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 600px;
        margin: auto;
    }
</style>


    <div class="event-details">
        <h1>New Event: {{ $event->event_name }}</h1>
        <p><strong>Date:</strong> {{ $event->event_date->format('Y-m-d') }}</p>
        <p><strong>Description:</strong> {{ $event->description }}</p>
        <p><strong>Restaurant:</strong> {{ $event->restaurant->name }}</p>
    </div>
