@extends('frontend.frontend_master')

@section('title')
   SubCategory Product
@endsection

@section('frontend_content')

@include('frontend.frontend_layout.home_page.info-boxes')
<section class="main-product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="m-breadcurmb">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$subsubcategory_details->subsubcategory_name_en}}</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row in-pro">
                <div class="col-lg-3">
                    <div class="left-pro">
                        <h2>{{$subsubcategory_details->subsubcategory_name_en}}</h2>
                        <p>{{$subsubcategory_details->subsubcategory_name_en}}: Description</p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="right-img-pro">
                        <div class="pro-banner">
                            <img src="{{asset($subsubcategory_details->category->category_image)}}" class="img-fluid" alt="prod-banner" style="max-height:200px !important;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row main-pro-detail">
                <div class="col-lg-3">
                    <div class="left-side-bar">
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingvoor">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsevoor" aria-expanded="true" aria-controls="collapsevoor">
                                        Voor Wie
                                      </button>
                                    </h2>
                                    <div id="collapsevoor" class="accordion-collapse collapse show" aria-labelledby="headingvoor" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Dames
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(54)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Heren
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(49)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Kinderen
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(2)</p>
                                            </div>
                                         </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcategorie">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecategorie" aria-expanded="true" aria-controls="collapsecategorie">
                                        Categorie
                                      </button>
                                    </h2>
                                    <div id="collapsecategorie" class="accordion-collapse collapse show" aria-labelledby="headingcategorie" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Horlogebandjes 
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(21)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Smartwatches 
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(36)</p>
                                            </div>
                                         </div>
                                         
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingmaat">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemaat" aria-expanded="true" aria-controls="collapsemaat">
                                        Maat
                                      </button>
                                    </h2>
                                    <div id="collapsemaat" class="accordion-collapse collapse show" aria-labelledby="headingmaat" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">1
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(32)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">110 - 175mm
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(1)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">120 - 195mm
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(2)</p>
                                            </div>
                                         </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingkleur">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsekleur" aria-expanded="true" aria-controls="collapsekleur">
                                        Kleur
                                      </button>
                                    </h2>
                                    <div id="collapsekleur" class="accordion-collapse collapse show" aria-labelledby="headingkleur" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box"><div class="box-color"><span class="color-sq" style="background-color:#dfd8bc;"></span>Beige</div>
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(54)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box"><div class="box-color"><span class="color-sq" style="background-color:#3333FF;"></span>Blauw </div>
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(49)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box"><div class="box-color"><span class="color-sq" style="background-color:#663300;"></span>Bruin</div>
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(2)</p>
                                            </div>
                                         </div>
                                         <div class="meer-tonen">
                                            <a href="javascript:;">Meer-tonen</a>
                                         </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingvoor">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsevoor" aria-expanded="true" aria-controls="collapsevoor">
                                        Prijs
                                      </button>
                                    </h2>
                                    <div id="collapsevoor" class="accordion-collapse collapse show" aria-labelledby="headingvoor" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="range-box">
                                            <div class="range-slide">
                                              <div class="slide">
                                                <div class="line" id="line" style="left: 0%; right: 0%;"></div>
                                                <span class="thumb" id="thumbMin" style="left: 0%;"></span>
                                                <span class="thumb" id="thumbMax" style="left: 100%;"></span>
                                              </div>
                                              <input id="rangeMin" type="range" max="100" min="10" step="5" value="0">
                                              <input id="rangeMax" type="range" max="100" min="10" step="5" value="100">
                                            </div>
                                            <div class="display">
                                              <span id="min">10</span>
                                              <span id="max">100</span>
                                            </div>

                                         </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingsale">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesale" aria-expanded="true" aria-controls="collapsesale">
                                        Sale %
                                      </button>
                                    </h2>
                                    <div id="collapsesale" class="accordion-collapse collapse " aria-labelledby="headingsale" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">10% - 20%
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(5)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">20% - 30%
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(41)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">30% - 40%
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(1)</p>
                                            </div>
                                         </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingmateriaal">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemateriaal" aria-expanded="true" aria-controls="collapsemateriaal">
                                        Materiaal
                                      </button>
                                    </h2>
                                    <div id="collapsemateriaal" class="accordion-collapse collapse " aria-labelledby="headingmateriaal" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Siliconen
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(43)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Leer
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(8)</p>
                                            </div>
                                         </div>
                                          
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingsoort">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoort" aria-expanded="true" aria-controls="collapsesoort">
                                        Soort Uurwerk
                                      </button>
                                    </h2>
                                    <div id="collapsesoort" class="accordion-collapse collapse" aria-labelledby="headingsoort" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Accu
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(10)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Automatic
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(4)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Digitaal
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(11)</p>
                                            </div>
                                         </div>
                                         <div class="meer-tonen">
                                            <a href="javascript:;">Meer-tonen</a>
                                         </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingkleur">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsekleur" aria-expanded="true" aria-controls="collapsekleur">
                                        Kleur Kast
                                      </button>
                                    </h2>
                                    <div id="collapsekleur" class="accordion-collapse collapse " aria-labelledby="headingkleur" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Blauw
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(2)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Donkergrijs
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(41)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Grijs
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(1)</p>
                                            </div>
                                         </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingdiameter">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsediameter" aria-expanded="true" aria-controls="collapsediameter">
                                        Diameter Kast
                                      </button>
                                    </h2>
                                    <div id="collapsediameter" class="accordion-collapse collapse " aria-labelledby="headingdiameter" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">< 25 mm
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(2)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">31-35 mm 
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(41)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">>40 mm
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(1)</p>
                                            </div>
                                         </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingvorm">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsevorm" aria-expanded="true" aria-controls="collapsevorm">
                                        Vorm Kast
                                      </button>
                                    </h2>
                                    <div id="collapsevorm" class="accordion-collapse collapse " aria-labelledby="headingvorm" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Rond
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(2)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Vierkat
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(41)</p>
                                            </div>
                                         </div>
                                          
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="left-p-det">
                            <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingstijl">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestijl" aria-expanded="true" aria-controls="collapsestijl">
                                        Stijl
                                      </button>
                                    </h2>
                                    <div id="collapsestijl" class="accordion-collapse collapse " aria-labelledby="headingstijl" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Rond
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(2)</p>
                                            </div>
                                         </div>
                                         <div class="v-w-in">
                                            <div class="c-check">
                                                <label class="ch-box">Vierkat
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pro-num">
                                                <p>(41)</p>
                                            </div>
                                         </div>
                                          
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="right-in-pro-detail">
                            <div class="top-det">
                                <div class="sorteer">
                                    <p>Sort By</p>
                                    <select class="form-select" >
                                          <option selected>Latest Collection</option>
                                          <option value="1">Recommended</option>
                                          <option value="2">Price Ascending</option>
                                          <option value="3">Most sold</option>
                                        </select>
                                </div>
                                <div class="artikelen">
                                    <p>52 Articles</p>
                                </div>
                                <div class="page-no">
                                    <p>1/1</p>
                                </div>
                            </div>
                          <div class="pro-in-detal">
                            <div class="in-pro-sec">
                              <div class="row">
                                @foreach ($subsubcategory_products as $product)
                                <div class="col-md-6 col-lg-4">
                                  <div class="in-pro-det">
                                    <div class="overlay" style="display: none;">
                                      <ul>
                                        @foreach($product->images as $images)
                                        <li><a href="javascript:;"></a><img src="{{ asset($images->photo_name) }}" class="img-fluid" alt="p1-o1"></li>
                                        @endforeach
                                      </ul>
                                    </div>
                                    <div class="p-im-link">
                                      <div class="p-b-img">
                                        <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                          <img src="{{ asset($product->product_thumbnail) }}" class="img-fluid p-m-img" alt="p1-o">
                                        </a>
                                      </div>
                                      <div class="p-bot-d">
                                        <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}" class="pr-n-h"> {{ $product->product_name_en }}</a>
                                        <p><a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}" class="p-text">Fae</a></p>
                                        @php
                                            $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                                        @endphp
                                        @if ($product->discount_price == NULL || $discount_amount <= 0)
                                                <p class="product-price">${{ $product->selling_price }}
                                                  <span class="korper">NEW</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pro-descri">
        <div class="container">
            <div class="in-pro-ds">
                <div class="deta-ds">
                    <h6>{{$subsubcategory_details->subsubcategory_name_en}}</h6>
                </div>
              
            </div>
        </div>
    </section>
 
@endsection
