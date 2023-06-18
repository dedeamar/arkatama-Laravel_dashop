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
                <!-- Home Slider Item -->
                <div class="col">
                    <div class="card" style="width: 300px;">
                        <a><img src="{{ asset('images/produk1.jpeg') }}" width="297px" height="296px" alt="produk1"></a>
                        <div class="card-body">
                            <a class="card-text">Kaos pria hoodie lengan pendek size(L)</a>
                            <br>
                            <h4>RP.70.000 </h4>
                            <a href="#" class="btn btn-primary">Beli</a>
                            <a href="#" class="btn btn-dark">keranjang</a>
                        </div>
                    </div>
                </div>
                    <div class="col">
                        <div class="card" style="width: 300px;">
                            <a><img src="{{ asset('images/produk2.jpeg') }}" width="297px" height="296px" alt="produk2"></a>
                            <div class="card-body">
                                <a class="card-text">Sweeter pria korean style size(L/Xl)</a>
                                <br>
                                <h4>RP.100.000 </h4>
                                <a href="#" class="btn btn-primary">Beli</a>
                                <a href="#" class="btn btn-dark">keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 300px;">
                            <a><img src="{{ asset('images/produk6.jpeg') }}" width="297px" height="296px" alt="produk"></a>
                            <div class="card-body">
                                <a class="card-text">Kaos Pria Hitam Polos  size(L)</a>
                                <br>
                                <h4>RP.30.000 </h4>
                                <a href="#" class="btn btn-primary">Beli</a>
                                <a href="#" class="btn btn-dark">keranjang</a>
                            </div>
                        </div>
                    </div>

            @endforelse
          </div>
        </div>
      </div>
@endsection
