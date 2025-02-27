<style>
  body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f0f0f0;
      color: #333;
  }

  .section-title {
      text-align: center;
      margin-bottom: 40px;
  }

  .section-title h2 {
      color: #35424a;
      font-size: 2em;
  }

  .section-title p {
      font-size: 1.2em;
      color: #777;
  }

  .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
  }

  .col-lg-4 {
      flex: 1 1 30%;
      margin: 10px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      transition: transform 0.3s;
  }

  .col-lg-4:hover {
      transform: scale(1.05);
  }

  .box {
      position: relative;
  }

  .progress {
      height: 20px;
      background-color: #e0e0e0;
      border-radius: 5px;
      margin: 10px 0;
  }

  .progress-bar {
      height: 100%;
      background-color: gold;
      border-radius: 5px;
      transition: width 0.5s;
  }

  button {
      background-color: #e8491d;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
  }

  button:hover {
      background-color: #c8361a;
  }

  a {
      color: #35424a;
      text-decoration: none;
      font-weight: bold;
      margin-right: 10px;
  }

  a:hover {
      text-decoration: underline;
  }
</style>

<x-layout>
  <main id="main">
      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
          <div class="container" data-aos="fade-up">
              <div class="section-title">
                  <h2>Reservations</h2>
                  <p>Reservations</p>
              </div>

              <div class="row">
                  @foreach($reservations as $reservation)
                      <div class="col-lg-4 p-4">
                          <div class="box" data-aos="zoom-in" data-aos-delay="100">
                              <h4>{{ $reservation->restaurant->name }}</h4>
                              <p>Date: {{ $reservation->reservation_date }}<br>
                                 Time: {{ $reservation->reservation_time }}</p>
                              <p>Guests: {{ $reservation->guest_count }}</p>
                              <p>Special Requests: {{ $reservation->special_requests }}</p>
                              <p>Status: {{ $reservation->status }}</p>

                              @php
                                  // Fetch the restaurant details using the restaurant ID
                                  $restaurant = \App\Models\Restaurant::find($reservation->restaurant_id);
                              @endphp

                              @if($restaurant)
                                  <div class="progress">
                                      <div class="progress-bar" style="width: {{ $restaurant->rating * 20 }}%;"></div>
                                  </div>
                                  <p>Rating: {{ $restaurant->rating }}/5</p>
                              @else
                                  <p>Restaurant not found.</p>
                              @endif

                              <a href="{{ route('reservations.edit', $reservation) }}">Edit</a>
                              <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit">Delete</button>
                              </form>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </section><!-- End Why Us Section -->
  </main><!-- End #main -->
</x-layout>