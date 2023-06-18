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

      <!-- Home -->

            <!-- Product Content -->
            <div class="col-lg-5">
				<form action="">
              <div class="product_content">
                <div class="product_name">2 Piece kaos pria</div>
                <div class="product_price">$35.00</div>
                <!-- Product Size -->
                <div style="margin-top: 1rem;">
                  <p>
                    Tas Ransel Pria Ransel Pria Backpack Pria Tas Punggung RANGER GRAY

                    Material : Polyester Premium
                    Warna : Hitam, Putih, Abu, Hijau, Merah
                    Ukuran : Panjang 31cm x Tinggi 47cm x Lebar 15cm

                    Specs:
                    - Bagian depan tas memiliki satu kantong
                    - Bagian depan tas memiliki 3 garis hologram yang akan nyala di gelap ketika terkena cahaya
                    - Bagian tas di lengkapi 2 clip yang membuat tas semakin kokoh ketika membawa barang berat
                    - Kantong utama sangat luas, dapat menyimpan laptop 16inch
                    - Kantong utama juga bisa untuk menyimpan keperluan travel selama 3 hari 2 malam
                    - Tas bisa di papah menjadi ransel, juga bisa di selempang
                    - Tas cocok untuk sekolah, kuliah, mendaki, travel maupun kerja
                    - Jahitan kuat dan bahan berkualitas, sangat cocok untuk membawa barang berat
                  </p>
                </div>
                <div class="product_size_container">
                  <div class="form-group mt-4">
                    <h4>Nama Penerima :</h4>
                    <hr>
                    <div class="checkout_form_container" style="margin-top: 32px;">
                      <form action="#" id="checkout_form">
                        <input type="text" class="checkout_input" placeholder="Nama Anda">
                        <input type="text" class="checkout_input" placeholder="No. Whatsapp Anda" required="required">
                        <textarea name="checkout_comment" class="checkout_comment checkout_input" placeholder="Alamat Lengkap  (Jl/RT/RW/Gang/No Rumah)" style="height: 80px;"></textarea>
                        <input type="text" class="checkout_input" placeholder="Kota/Kecamatan" required="required">

                      </form>
                    </div>
                  </div>
                  <div class="button cart_button" style="width: 100%;margin-top: 1rem;">
                    <a href="#">Order <i class="fa fa-whatsapp"></i></a>
                  </div>
                </div>
              </div>
			</div>
			</form>
          </div>

          <!-- Reviews -->

          <div class="row">
            <div class="col">
              <div class="reviews">
                <div class="reviews_title">Deskripsi</div>
                <div class="product_text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nulla quis quam ipsum. Pellentesque consequat tellus non
                    tortor tempus, id egestas elit iaculis. Proin eu dui porta,
                    pretium metus vitae, pharetra odio. Sed ac mi commodo,
                    pellentesque erat eget, accumsan justo. Etiam sed placerat
                    felis. Proin non rutrum ligula.
                  </p>
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
    <script src="js/product_custom.js"></script>
    <style>
        @media screen and (min-width: 768px) {
          .product-row {
            margin-top: 50px;
          }

          .m-regular_radio:checked + label {
            background: #937c6f;
            color: #ffffff;
          }

          label {
            min-width: 100px;
            display: inline-block;
          }
        }
      </style>
  </body>
</html>
