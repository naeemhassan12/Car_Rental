  <section class="contact_section layout_padding">
        <div class="container">

            <div class="heading_container">
                <h2>
                    Request A Call Back
                </h2>
            </div>

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="form_container">

                        <form action="" method="POST">

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="inputName4"
                                        placeholder="Name"
                                        name="name">
                                </div>

                                <div class="form-group col-md-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="inputSubject4"
                                        placeholder="Phone"
                                        name="phone">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="inputEmail4"
                                        placeholder="Email"
                                        name="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputMessage"
                                    placeholder="Message"
                                    name="message">
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit">
                                    Send
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>


            {{-- Contact Information --}}
            <div class="contact_items">

                <a href="#">
                    <div class="img-box">
                        <img src="{{ asset('images/location.png') }}" alt="Location">
                    </div>

                    <h6>
                        Islamabad, Pakistan
                    </h6>
                </a>

                <a href="tel:+921234456789">
                    <div class="img-box">
                        <img src="{{ asset('images/call.png') }}" alt="Phone">
                    </div>

                    <h6>
                        (+92 123 4456789)
                    </h6>
                </a>

                <a href="mailto:demo@gmail.com">
                    <div class="img-box">
                        <img src="{{ asset('images/mail.png') }}" alt="Email">
                    </div>

                    <h6>
                        demo@gmail.com
                    </h6>
                </a>

            </div>


            {{-- Social Media --}}
            <div class="social_container">

                <div class="social-box">

                    <div>
                        <a href="#">
                            <img src="{{ asset('images/fb.png') }}" alt="Facebook">
                        </a>
                    </div>

                    <div>
                        <a href="#">
                            <img src="{{ asset('images/twitter.png') }}" alt="Twitter">
                        </a>
                    </div>

                    <div>
                        <a href="#">
                            <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn">
                        </a>
                    </div>

                    <div>
                        <a href="#">
                            <img src="{{ asset('images/insta.png') }}" alt="Instagram">
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </section>


  
     <section class="map_section">
    <!-- map section -->
    <div class="map_container">
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
      </div>
    </div>
    <!-- end map section -->
  </section>