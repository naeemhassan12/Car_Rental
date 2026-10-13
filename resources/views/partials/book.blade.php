<section class="book_section">
    <div class="form_container">
      {{-- <form action="{{ route('booking.search') }}" method="POST">
        @csrf
        <div class="form-row">
          <div class="col-lg-8">
            <div class="form-row">
              <div class="col-md-6">
                <label for="parkingName">Pick Up Locaion</label>
                <input type="text" class="form-control" placeholder="acb ">
              </div>
              <div class="col-md-6">
                <label for="parkingNumber">Drop Location</label>
                <input type="text" class="form-control" placeholder="acb ">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <label for="parkingName">Pick Up Date</label>
                <input type="text" class="form-control" placeholder="07/09/2020">
              </div>
              <div class="col-md-6">
                <label for="parkingNumber">Return Date</label>
                <input type="text" class="form-control" placeholder="07/09/2020">
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="btn-container">
              <button type="submit" class="">
                Search
              </button>
            </div>
          </div>
        </div>

      </form> --}}

      
<form action="{{ route('booking.search') }}" method="GET">
    @csrf
    <div class="form-row">
        <div class="col-lg-8">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="pickup_location">Pick Up Location</label>
                    <input
                        type="text"
                        id="pickup_location"
                        name="pickup_location"
                        class="form-control"
                        placeholder="Enter pick up location"
                        value="{{ old('pickup_location', request('pickup_location')) }}"
                        required
                    >
                </div>
                <div class="col-md-6">
                    <label for="drop_location">Drop Location</label>
                    <input
                        type="text"
                        id="drop_location"
                        name="drop_location"
                        class="form-control"
                        placeholder="Enter drop location"
                        value="{{ old('drop_location', request('drop_location')) }}"
                        required
                    >
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="pickup_date">Pick Up Date</label>
                    <input
                        type="date"
                        id="pickup_date"
                        name="pickup_date"
                        class="form-control"
                        value="{{ old('pickup_date', request('pickup_date')) }}"
                        min="{{ date('Y-m-d') }}"
                        required
                    >
                </div>
                <div class="col-md-6">
                    <label for="return_date">Return Date</label>
                    <input
                        type="date"
                        id="return_date"
                        name="return_date"
                        class="form-control"
                        value="{{ old('return_date', request('return_date')) }}"
                        min="{{ date('Y-m-d') }}"
                        required
                    >
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="btn-container">
                <button type="submit">Search</button>
            </div>
        </div>
    </div>
</form>

    </div>
    <div class="img-box">
      <img src="images/book-car.png" alt="">
    </div>
  </section>