  {{-- <section class="best_section">
    <div class="container">
      <div class="book_now">
        <div class="detail-box">
          <h2>
            Our Best Cars
          </h2>
          <p>
            It is a long established fact that a reader will be distracted by the
          </p>
        </div>
        <div class="btn-box">
          <a href="">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </section>


  <section class="rent_section layout_padding">
    <div class="container">
      <div class="rent_container">
        <div class="box">
          <div class="img-box">
            <img src="images/r-1.png" alt="">
          </div>
          <div class="price">
            <a href="">
              Rent $200
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/r-2.png" alt="">
          </div>
          <div class="price">
            <a href="">
              Rent $200
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/r-3.png" alt="">
          </div>
          <div class="price">
            <a href="">
              Rent $200
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/r-4.png" alt="">
          </div>
          <div class="price">
            <a href="">
              Rent $200
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/r-5.png" alt="">
          </div>
          <div class="price">
            <a href="">
              Rent $200
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/r-6.png" alt="">
          </div>
          <div class="price">
            <a href="">
              Rent $200
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          See More
        </a>
      </div>
    </div>
  </section> --}}
<section class="best_section">
    <div class="container">
        <div class="book_now">
            <div class="detail-box">
                <h2>Our Best Cars</h2>
                <p>Choose your preferred car for a comfortable journey.</p>
            </div>

            <div class="btn-box">
                <a href="{{ url('/car') }}">Book Now</a>
            </div>
        </div>
    </div>
</section>

<section class="rent_section layout_padding">
    <div class="container">

        <div class="rent_container">

            @forelse($cars as $car)

                <div class="box">
                    <div class="img-box">
                        <img
                            src="{{ asset('images/' . $car->image) }}"
                            alt="{{ $car->car_name }}"
                        >
                    </div>

                    <div class="price">
                        <a href="{{ url('/car') }}">
                            Rent ${{ number_format($car->price, 2) }}
                        </a>
                    </div>

                    <div class="detail-box">
                        <h5>{{ $car->car_name }}</h5>
                        <p>Brand: {{ $car->brand }}</p>
                        <p>Model: {{ $car->model }}</p>
                        <p>Location: {{ $car->location }}</p>
                    </div>
                </div>

            @empty

                <p>No cars are currently available.</p>

            @endforelse

        </div>

        <div class="btn-box">
            <a href="{{ url('/car') }}">See More</a>
        </div>

    </div>
</section>
