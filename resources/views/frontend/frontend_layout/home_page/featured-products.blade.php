@php
    $featured_products = App\Models\Product::where('featured', 1)
        ->latest()
        ->limit(6)
        ->get();
@endphp
<section class="product-sec">
  <div class="container">
    <div class="pro-head">
      <span class="span1">FEATURED PRODUCTS</span>
      <span class="span2">JUST IN</span>
    </div>
    <div class="in-pro-sec">
      <div class="row">
        @foreach ($featured_products as $product)
        <div class="col-lg-2">
          <div class="in-pro-det">
            <div class="overlay" style="display: none;">
              <ul>
                <li>
                  <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}"></a>
                  <img src="{{ asset($product->product_thumbnail) }}" class="img-fluid" alt="p1-o1">
                </li>
              <!--   <li><a href="javascript:;"></a><img src="images/p1-o2.jpg" class="img-fluid" alt="p1-o2"></li>
                <li><a href="javascript:;"></a><img src="images/p1-o3.jpg" class="img-fluid" alt="p1-o3"></li>
                <li><a href="javascript:;"></a><img src="images/p1-o4.jpg" class="img-fluid" alt="p1-o4"></li> -->
              </ul>
            </div>
            <div class="p-im-link">
              <div class="p-b-img">
                <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                  <img src="{{ asset($product->product_thumbnail) }}" class="img-fluid p-m-img" alt="p1-o">
                 <!--  <img src="images/p1-o.jpg" class="img-fluid p-ho-img" alt="p1-o"> -->
                </a>
              </div>
              <div class="p-bot-d">
                <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}" class="pr-n-h">  {{ $product->product_name_en }}</a>
                @php
                    $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                @endphp
                @if ($product->discount_price == NULL)
                      <p class="product-price">${{ $product->selling_price }}
                     </p>
                @else
                   <p class="product-price">${{ $product->discount_price }}
                      <s class="prijsgroen">${{ $product->selling_price }}</s>
                      <span class="korper">{{ round($discount_amount) }}%</span>
                    </p>
                @endif
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>