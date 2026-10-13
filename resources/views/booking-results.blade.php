
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Search</title>
</head>

<body>

    <h1>Your Booking Search</h1>

    <p>
        <strong>Pick Up Location:</strong>
        {{ $booking['pickup_location'] }}
    </p>

    <p>
        <strong>Drop Location:</strong>
        {{ $booking['drop_location'] }}
    </p>

    <p>
        <strong>Pick Up Date:</strong>
        {{ $booking['pickup_date'] }}
    </p>

    <p>
        <strong>Return Date:</strong>
        {{ $booking['return_date'] }}
    </p>


    <hr>

    <h2>Available Cars</h2>

    @if($cars->count() > 0)

        @foreach($cars as $car)

            <div style="margin-bottom: 30px;">

                <img
                    src="{{ asset('images/' . $car->image) }}"
                    alt="{{ $car->car_name }}"
                    width="250"
                >

                <h3>{{ $car->car_name }}</h3>

                <p>
                    <strong>Brand:</strong>
                    {{ $car->brand }}
                </p>

                <p>
                    <strong>Model:</strong>
                    {{ $car->model }}
                </p>

                <p>
                    <strong>Location:</strong>
                    {{ $car->location }}
                </p>

                <p>
                    <strong>Rent:</strong>
                    ${{ $car->price }}
                </p>

                <a href="">
                    Book Now
                </a>

            </div>

            <hr>

        @endforeach

    @else

        <p>No cars available at this pickup location.</p>

    @endif


    <a href="{{ url('/index') }}">
        Back to Home
    </a>

</body>
</html>
