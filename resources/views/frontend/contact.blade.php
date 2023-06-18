@extends('frontend.layout')

@section('content')
<div class="arrivals" style="margin-top: 96px;">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section_title_container text-center">
                <div class="section_subtitle">kategori</div>
                <div class="section_title">{{ $category->name }}</div>
              </div>
            </div>
          </div>
          <div class="row products_container">
            <!-- Product -->
            @forelse($products as $product)
                <div class="col-lg-4 mb-5 product_col">
                    <div class="product">
                        <div class="product_image">
                        <img src="{{ Storage::url($product->productImages->first()->path) }}" alt="" />
                        </div>
                        <div class="product_content clearfix">
                        <div class="product_info">
                            <div class="product_name">
                            <a href="{{ route('detail', $product->slug) }}">{{ $product->name }}</a>
                            </div>
                            <div class="product_price">Rp{{ number_format($product->price) }}</div>
                        </div>
                        <div class="product_options">
                            <div class="product_buy product_option">
                            <a href="{{ route('detail', $product->slug) }}">
                                <img src="{{ asset('frontend/images/shopping-bag-white.svg') }}" alt="" />
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            @empty

      <!-- Menu -->

      <div
        class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400"
      >
        <div class="menu_close_container">
          <div class="menu_close">
            <div></div>
            <div></div>
          </div>
        </div>
        <div class="logo menu_mm"><a href="#">Wish</a></div>
        <div class="search">
          <form action="#">
            <input
              type="search"
              class="search_input menu_mm"
              required="required"
            />
            <button
              type="submit"
              id="search_button"
              class="search_button menu_mm"
            >
              <img class="menu_mm" src="images/magnifying-glass.svg" alt="" />
            </button>
          </form>
        </div>
        <nav class="menu_nav">
          <ul class="menu_mm">
            <li class="menu_mm"><a href="index.html">home</a></li>
            <li class="menu_mm"><a href="#">clothes</a></li>
            <li class="menu_mm"><a href="#">accessories</a></li>
            <li class="menu_mm"><a href="#">lingerie</a></li>
            <li class="menu_mm"><a href="#">contact</a></li>
          </ul>
        </nav>
      </div>

      <!-- Home -->

      <div class="home">
        <div
          class="home_background parallax-window"
          data-parallax="scroll"
          data-image-src="images/contact.jpg"
          data-speed="0.8"
        ></div>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_container">
                <div class="home_content">
                  <div class="home_title">Contact</div>
                  <div class="breadcrumbs">
                    <ul>
                      <li><a href="index.html">Home</a></li>
                      <li>Contact</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Google Map -->

      <div class="map">
        <div id="google_map" class="google_map">
          <div class="map_container">
            <div id="map"></div>
          </div>
        </div>
      </div>

      <!-- Contact Form -->

      <div class="contact">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="review_form_container">
                <div class="review_form_title">get in touch</div>
                <div class="review_form_content">
                  <form action="#" id="review_form" class="review_form">
                    <div
                      class="d-flex flex-md-row flex-column align-items-start justify-content-between"
                    >
                      <input
                        type="text"
                        class="review_form_input"
                        placeholder="Name"
                        required="required"
                      />
                      <input
                        type="email"
                        class="review_form_input"
                        placeholder="E-mail"
                        required="required"
                      />
                      <input
                        type="text"
                        class="review_form_input"
                        placeholder="Subject"
                      />
                    </div>
                    <textarea
                      class="review_form_text"
                      name="review_form_text"
                      placeholder="Message"
                    ></textarea>
                    <button type="submit" class="review_form_button">
                      send message
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Text -->

      <div class="contact_text">
        <div class="container">
          <div class="row">
            <!-- Contact Info -->
            <div class="col-lg-5">
              <div class="contact_info">
                <div class="contact_title">contact info</div>
                <div class="contact_info_content">
                  <ul>
                    <li>
                      <div class="contact_info_icon">
                        <img src="images/contact_info_1.png" alt="" />
                      </div>
                      <div class="contact_info_text">
                        Rosia Road, no67, Gibraltar UK
                      </div>
                    </li>
                    <li>
                      <div class="contact_info_icon">
                        <img src="images/contact_info_2.png" alt="" />
                      </div>
                      <div class="contact_info_text">
                        office@yourbusiness.com
                      </div>
                    </li>
                    <li>
                      <div class="contact_info_icon">
                        <img src="images/contact_info_3.png" alt="" />
                      </div>
                      <div class="contact_info_text">+45 7703 29293 34</div>
                    </li>
                  </ul>
                </div>
                <div class="contact_info_social">
                  <ul>
                    <li>
                      <a href="#"
                        ><i class="fa fa-pinterest" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fa fa-linkedin" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fa fa-instagram" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fa fa-reddit-alien" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fa fa-twitter" aria-hidden="true"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- FAQ -->
            <div class="col-lg-7">
              <div class="faq">
                <div class="contact_title">faq</div>
                <div class="faq_content">
                  <!-- Accordions -->
                  <div class="accordions">
                    <div class="accordion_container">
                      <div class="accordion d-flex flex-row align-items-center">
                        <div>Lorem ipsum dolor sit amet, consectetur?</div>
                      </div>
                      <div class="accordion_panel">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Nulla quis quam ipsum. Pellentesque consequat
                          tellus non tortor tempus, id egestas elit iaculis.
                          Proin eu dui porta, pretium metus vitae, pharetra
                          odio. Sed ac mi commodo, pellentesque erat eget,
                          accumsan justo.
                        </p>
                      </div>
                    </div>

                    <div class="accordion_container">
                      <div class="accordion d-flex flex-row align-items-center">
                        <div>Ipsum dolor sit amet, consectetur?</div>
                      </div>
                      <div class="accordion_panel">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Nulla quis quam ipsum. Pellentesque consequat
                          tellus non tortor tempus, id egestas elit iaculis.
                          Proin eu dui porta, pretium metus vitae, pharetra
                          odio. Sed ac mi commodo, pellentesque erat eget,
                          accumsan justo.
                        </p>
                      </div>
                    </div>

                    <div class="accordion_container">
                      <div
                        class="accordion d-flex flex-row align-items-center active"
                      >
                        <div>Proin eu dui porta, pretium metus vitae?</div>
                      </div>
                      <div class="accordion_panel">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Nulla quis quam ipsum. Pellentesque consequat
                          tellus non tortor tempus, id egestas elit iaculis.
                          Proin eu dui porta, pretium metus vitae, pharetra
                          odio. Sed ac mi commodo, pellentesque erat eget,
                          accumsan justo.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Newsletter -->

      <div class="newsletter">
        <div class="newsletter_content">
          <div
            class="newsletter_image"
            style="background-image: url(images/newsletter.jpg)"
          ></div>
          <div class="container">
            <div class="row newsletter_row">
              <div class="col">
                <div class="section_title_container text-center">
                  <div class="section_subtitle">only the best</div>
                  <div class="section_title">subscribe for a 20% discount</div>
                </div>
              </div>
            </div>
            <div class="row newsletter_container">
              <div class="col-lg-10 offset-lg-1">
                <div class="newsletter_form_container">
                  <form action="#">
                    <input
                      type="email"
                      class="newsletter_input"
                      required="required"
                      placeholder="E-mail here"
                    />
                    <button type="submit" class="newsletter_button">
                      subscribe
                    </button>
                  </form>
                </div>
                <div class="newsletter_text">
                  Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu
                  tristique magna pharetra nec. Fusce vel lorem libero. Integer
                  ex mi, facilisis sed nisi ut, vestib ulum ultrices nulla.
                  Aliquam egestas tempor leo.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     <!-- Footer -->

     <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <div class="footer_logo"><a href="{{ route('homepage') }}">Toko DAshop</a></div>
              <nav class="footer_nav">
                <ul>
                  <li><a href="{{ route('homepage') }}">home</a></li>
                  @foreach(\App\Models\Category::get()->take(4) as $category)
                    <li><a href="{{ route('kategori', $category->slug) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
              </nav>
              <div class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved |
                <i class="fa fa-heart-o" aria-hidden="true"></i> by
                <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="js/contact_custom.js"></script>
  </body>
</html>
