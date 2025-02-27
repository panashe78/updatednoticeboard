
<div class="container">
    <h1>User Statistics</h1>
    <canvas id="userChart" width="400" height="200"></canvas>

    <h2>Restaurant Statistics by City</h2>
    <canvas id="restaurantChart" width="400" height="200"></canvas>

   

    <h2>Menu Items by Category</h2>
    <canvas id="menuChart" width="400" height="200"></canvas>

    <h2>Event Counts by Restaurant</h2>
    <canvas id="eventChart" width="400" height="200"></canvas>

    <h2>FAQ Counts by Restaurant</h2>
    <canvas id="faqChart" width="400" height="200"></canvas>

    <h2>Reservation Counts by Restaurant</h2>
    <canvas id="reservationChart" width="400" height="200"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // User Chart
    const userCtx = document.getElementById('userChart').getContext('2d');
    const userCounts = @json($userCounts);
    const userLabels = userCounts.map(data => {
        const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        return monthNames[data.month - 1];
    });
    const userData = userCounts.map(data => data.count);

    const userChart = new Chart(userCtx, {
        type: 'bar',
        data: {
            labels: userLabels,
            datasets: [{
                label: 'Number of Users',
                data: userData,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Restaurant Chart
    const restaurantCtx = document.getElementById('restaurantChart').getContext('2d');
    const restaurantCounts = @json($restaurantCounts);
    const restaurantLabels = restaurantCounts.map(data => data.city);
    const restaurantData = restaurantCounts.map(data => data.count);

    const restaurantChart = new Chart(restaurantCtx, {
        type: 'pie',
        data: {
            labels: restaurantLabels,
            datasets: [{
                label: 'Number of Restaurants by City',
                data: restaurantData,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
            }
        }
    });

    // Menu Chart
    const menuCtx = document.getElementById('menuChart').getContext('2d');
    const menuCounts = @json($menuCounts);
    const menuLabels = menuCounts.map(data => data.category);
    const menuData = menuCounts.map(data => data.count);

    const menuChart = new Chart(menuCtx, {
        type: 'bar',
        data: {
            labels: menuLabels,
            datasets: [{
                label: 'Number of Menu Items by Category',
                data: menuData,
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Event Counts Chart
    const eventCtx = document.getElementById('eventChart').getContext('2d');
    const eventCounts = @json($eventCounts);
    const eventLabels = eventCounts.map(data => data.restaurant_name);
    const eventData = eventCounts.map(data => data.count);

    const eventChart = new Chart(eventCtx, {
        type: 'bar',
        data: {
            labels: eventLabels,
            datasets: [{
                label: 'Number of Events',
                data: eventData,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // FAQ Counts Chart
    const faqCtx = document.getElementById('faqChart').getContext('2d');
    const faqCounts = @json($faqCounts);
    const faqLabels = faqCounts.map(data => data.restaurant_name);
    const faqData = faqCounts.map(data => data.count);

    const faqChart = new Chart(faqCtx, {
        type: 'bar',
        data: {
            labels: faqLabels,
            datasets: [{
                label: 'Number of FAQs',
                data: faqData,
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Reservation Counts Chart
    const reservationCtx = document.getElementById('reservationChart').getContext('2d');
    const reservationCounts = @json($reservationCounts);
    const reservationLabels = reservationCounts.map(data => data.restaurant_name);
    const reservationData = reservationCounts.map(data => data.count);

    const reservationChart = new Chart(reservationCtx, {
        type: 'bar',
        data: {
            labels: reservationLabels,
            datasets: [{
                label: 'Number of Reservations',
                data: reservationData,
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
