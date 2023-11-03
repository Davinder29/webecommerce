@extends('frontend.frontend_master')
@section('title')
    Web Ecoomerce
@endsection
@section('frontend_content')
    <section class="main-n-faq product-detail-bre">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faq-bridcamp">
                        <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/')}}" class="bread-link">Home</a></li>
                                <li class="breadcrumb-item active" >{{ $product->product_name_bn }}</li>
                              </ol>
                            </nav>
                    </div>
                </div>
            </div> 
            <div class="in-prod-det">
                <div class="row">
                    <div class="col-lg-7">
                    <div class="left-prod-d">
                        <div class="product-lable">
                                <ul>
                                    <li><span class="korper">-30%</span></li>
                                </ul>
                            </div>
                            <div class="pro-d-img">
                                <div class="slider-for">
                                    @foreach ($product->images as $single_image)
                                    <img src="{{ asset('frontend_new/assets/images/p-t.jpg') }}" class="img-fluid" alt="p-s">
                                    @endforeach
                                </div>
                            </div>
                            <div class="pro-d-tham">
                                <div class="slider-nav">
                                    @foreach($product->images as $img)
                                    <img src="{{ asset('frontend_new/assets/images/p-t.jpg') }} " class="img-fluid" alt="p-t">
                                    @endforeach
                                </div>
                            </div>
                            <div class="prod-accordion">
                                <div class="accordion" id="accordionExample">
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           {{ $product->product_name_bn }}
                                          </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                           <div class="pro-imformeti">
                                            <div class="p-detail">
                                                <h6>Doelgroep</h6>
                                                <p>Dames</p>
                                            </div>
                                            <div class="p-detail">
                                                <h6>Kleur hardware</h6>
                                                <p>Goudkleurig</p>
                                            </div>
                                            <div class="p-detail">
                                                <h6>Materiaal</h6>
                                                <p>Leer</p>
                                            </div>
                                            <div class="p-detail">
                                                <h6>Merk</h6>
                                                <p>Michael Kors</p>
                                            </div>
                                            <div class="p-detail">
                                                <h6>Merk kleurnaam</h6>
                                                <p>black & gold colored hardware</p>
                                            </div>
                                            <div class="p-detail">
                                                <h6>Merk product code</h6>
                                                <p>30F2GTTT8L</p>
                                            </div>
                                            <div class="p-detail">
                                                <h6>Opberg opties</h6>
                                                <p>1 binnenvak met ritssluiting, 3 open binnenvakken</p>
                                            </div>
                                            <div class="p-detail">
                                                <h6>Serie</h6>
                                                <p>Jet Set</p>
                                            </div>
                                            <div class="p-detail">
                                                <h6>Type sluiting</h6>
                                                <p>Ritssluiting</p>
                                            </div>
                                           </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Description
                                          </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                            <div class="leve-reto">
                                                <p> {!! $product->long_description_bn !!}</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Leveren & retourneren
                                          </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                            <div class="leve-reto">
                                                <p>Besteld op werkdagen: vóór 23.00 uur besteld, zelfde dag verzonden.* Besteld op zaterdag en zondag: vóór 18.00 uur besteld, zelfde dag verzonden.*</p>
                                            <p>* Sommige artikelen worden vanuit onze filialen verzonden. In dat geval zal een bestelling, die ná 17.00 uur of op zaterdag of zondag wordt afgerond, de volgende werkdag worden verzonden.</p>
                                            <p>Binnen Nederland profiteer je van gratis verzending (v.a. €49,95) en retourneren .</p>
                                            <p>Retourneren kan altijd binnen 30 dagen mits het artikel ongebruikt en in goede staat terug wordt gezonden.</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="right-prod-d">
                        <h4>Michael Kors</h4>
                        <h2>Jet Set Item EW Top Zip Tote black & gold colored hardware</h2>
                        <div class="korting">
                            <span class="kort-pric">30% Korting</span>
                        </div>
                        <div class="price-baggies">
                            <div class="detail-price">
                                <p>236,00 <del>295,00</del></p>
                            </div>
                            <div class="detail-bagges">
                                <p>+236 baggies <div class="hover-text"><span class="question-icon"><i class="fa-solid fa-question"></i></span>
                                  <span class="tooltip-text" id="left">Heb je 300 baggies gespaard? Dan krijg je een cadeaubon ter waarde van 15 euro toegestuurd!</span>
                                </div></p>
                            </div>
                        </div>
                        <div class="bestal-wish-list">
                            <a href="javascript:;" class="bestal-btn">Bestel nu</a>
                            <a href="javascript;:" class="wish-icon"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="op-voo">
                            <span class="op-check-icon"><i class="fa-solid fa-check"></i></span>
                            <span class="highlighted">Op voorraad,</span>
                            <div class="product dynamic-usp">Voor <b>23:00 besteld</b>, morgen in huis</div>
                        </div>
                        <div class="product__quote">
                            <span>Wil je meer dan 5 stuks?</span>
                            <a class="secondary-link" href="javascript:;">Vraag een offerte aan!</a>
                        </div>
                        <div class="gratis-list">
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span><b>Gratis verzending</b> (v.a. € 49,95) en retourneren</li>
                                <li><span><i class="fa-solid fa-check"></i></span>Nu kopen,<b>achteraf betalen</b></li>
                                <li><span><i class="fa-solid fa-check"></i></span><b>Officiële dealer</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cowbag rain pro-det-slide py-40">
        <div class="container">
            <div class="main-cowbag">
                <div class="p-d-s-heading">
                    <h2>Meer van dit merk</h2>
                </div>
                <div class="row   desk-rain-slide">
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/s5.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">String W Parka W3</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span class="van">van</span>107,45</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #45517f"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #678758"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/s6.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Curve W Jacket W3</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>109,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #ea9daf"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #678758"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #d6c7b0"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #45517f"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/s7.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                        <li><span class="korper">-30%</span></li>
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    
                                    <h6>Rains</h6>
                                    <a href="javascript:;">A-line Jacket</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span class="van">van</span> <span style="color: tomato;">76,45 </span><del>109,95</del></p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #ea9daf"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #b5b5b5"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #b5b5b5"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/s8.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         <li><span class="korper">-24%</span></li>
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Curve Jacket</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span class="van">van</span><span style="color: tomato;"> 83,45</span> <del>109,95</del></p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #ea9daf"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #678758"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #d6c7b0"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #45517f"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/s9.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Reisenthel</h6>
                                    <a href="javascript:;">Mini Maxi Poncho</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span style="color: tomato;"> 83,45</span> <del>32,95</del></p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/s10.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Crossbody Concord</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>129,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #8c6348"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/s1.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Crossbody Fernie</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>99,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/s12.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Crossbody Enderby</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>139,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cowbag rain pro-det-slide py-40">
        <div class="container">
            <div class="main-cowbag">
                <div class="p-d-s-heading">
                    <h2>Meer van dit merk</h2>
                </div>
                <div class="row   desk-rain-slide">
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/j1.png') }}"></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">String W Parka W3</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span class="van">van</span>107,45</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #45517f"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #678758"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/j2.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Curve W Jacket W3</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>109,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #ea9daf"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #678758"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #d6c7b0"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #45517f"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/j3.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                        <li><span class="korper">-30%</span></li>
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    
                                    <h6>Rains</h6>
                                    <a href="javascript:;">A-line Jacket</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span class="van">van</span> <span style="color: tomato;">76,45 </span><del>109,95</del></p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #ea9daf"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #b5b5b5"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #b5b5b5"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/j4.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         <li><span class="korper">-24%</span></li>
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Curve Jacket</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span class="van">van</span><span style="color: tomato;"> 83,45</span> <del>109,95</del></p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #ea9daf"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #678758"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #d6c7b0"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #45517f"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/j5.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Reisenthel</h6>
                                    <a href="javascript:;">Mini Maxi Poncho</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span style="color: tomato;"> 83,45</span> <del>32,95</del></p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/j6.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Crossbody Concord</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>129,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #8c6348"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/j7.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Crossbody Fernie</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>99,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/j8.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Crossbody Enderby</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>139,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cowbag rain pro-det-slide py-40">
        <div class="container">
            <div class="main-cowbag">
                <div class="p-d-s-heading">
                    <h2>Wat vind je hiervan?</h2>
                </div>
                <div class="row   desk-rain-slide">
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/w1.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">String W Parka W3</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span class="van">van</span>107,45</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #45517f"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #678758"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/w2.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Curve W Jacket W3</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>109,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #ea9daf"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #678758"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #d6c7b0"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #45517f"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/w3.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                        <li><span class="korper">-30%</span></li>
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    
                                    <h6>Rains</h6>
                                    <a href="javascript:;">A-line Jacket</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span class="van">van</span> <span style="color: tomato;">76,45 </span><del>109,95</del></p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #ea9daf"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #b5b5b5"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #b5b5b5"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/w4.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         <li><span class="korper">-24%</span></li>
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Curve Jacket</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span class="van">van</span><span style="color: tomato;"> 83,45</span> <del>109,95</del></p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #ea9daf"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #678758"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #d6c7b0"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #45517f"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/w5.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Reisenthel</h6>
                                    <a href="javascript:;">Mini Maxi Poncho</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p><span style="color: tomato;"> 83,45</span> <del>32,95</del></p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/w6.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Crossbody Concord</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>129,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #8c6348"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/w7.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Crossbody Fernie</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>99,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="in-cowbag">
                            <div class="cow-pro-top">
                                <div class="heart-icon">
                                    <a href="javascript:;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="cow-pro-img">
                                    <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/w8.jpg') }} "></a>
                                </div>
                                <div class="product-lable">
                                    <ul>
                                         
                                    </ul>
                                </div>
                                <div class="cow-pro-info">
                                    <h6>Rains</h6>
                                    <a href="javascript:;">Crossbody Enderby</a>
                                </div>
                            </div>
                            <div class="cow-pro-bottom">
                                <p>139,95</p>
                                <a href="javascript:;" class="custom-dot"><span class="product__link-inner" style="background-color: #000000"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="op-zoek py-40">
        <div class="container">
            <div class="op-zoek-heading">
                <h2>Op zoek naar Michael Kors Shoppers? Dit vind je misschien ook interessant</h2>
            </div>
            <div class="in-op-zoek">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="op-zoek-link">
                            <ul>
                                <li><a href="javascript:;">Shoppers Michael Kors</a></li>
                                <li><a href="javascript:;">Tassen Dames</a></li>
                                <li><a href="javascript:;">Steve Madden Tassen</a></li>
                                <li><a href="javascript:;">Furla Tassen</a></li>
                                <li><a href="javascript:;">Michael Kors Slippers</a></li>
                                <li><a href="javascript:;">Studio Noos Tassen</a></li>
                                <li><a href="javascript:;">Zusss Tassen</a></li>
                                <li><a href="javascript:;">Shoppers Dames</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="op-zoek-link">
                            <ul>
                                <li><a href="javascript:;">Michael Kors Tassen</a></li>
                                <li><a href="javascript:;">Michael Kors Smartwatches</a></li>
                                <li><a href="javascript:;">Kurt Geiger Tassen</a></li>
                                <li><a href="javascript:;">Tommy Hilfiger Tassen</a></li>
                                <li><a href="javascript:;">Michael Kors Zonnebrillen</a></li>
                                <li><a href="javascript:;">Fred De La Bretoniere Tassen</a></li>
                                <li><a href="javascript:;">Rains Tassen</a></li>
                                <li><a href="javascript:;">Ugg Tassen</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="op-zoek-link">
                            <ul>
                                <li><a href="javascript:;">Guess Tassen</a></li>
                                <li><a href="javascript:;">Michael Kors Horloges</a></li>
                                <li><a href="javascript:;">Schoenen Michael Kors</a></li>
                                <li><a href="javascript:;">Heren Tassen</a></li>
                                <li><a href="javascript:;">Nunoo Tassen</a></li>
                                <li><a href="javascript:;">Eastpak Tassen</a></li>
                                <li><a href="javascript:;">Tassen Sale</a></li>
                                <li><a href="javascript:;">Shabbies Tassen</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="op-zoek-link">
                            <ul>
                                <li><a href="javascript:;">Ted Baker Tassen</a></li>
                                <li><a href="javascript:;">Kipling Tassen</a></li>
                                <li><a href="javascript:;">Michael Kors Sneakers</a></li>
                                <li><a href="javascript:;">Michael Kors Sandalen</a></li>
                                <li><a href="javascript:;">Calvin Klein Tassen</a></li>
                                <li><a href="javascript:;">Michael Kors Handtassen</a></li>
                                <li><a href="javascript:;">Michael Kors Laarzen</a></li>
                                <li><a href="javascript:;">Love Moschino Tassen</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section class="contact-home">
        <div class="review-summary__container">
            <div class="container">
                     <a href="javascript:;">
                        <span class="star-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#fff"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#fff"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#fff"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#fff"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#fff"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                            <strong>4.6 / 5</strong>op basis van <strong>41300</strong> klantenbeoordelingen op <strong>Trustpilot</strong>
                        </span>   
                    </a> 
                </div>
        </div>
        <div class="container">
            <div class="in-cont-ho">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="con-deta">
                            <h4>Bereikbaar maandag t/m zaterdag van 10.00 tot 18.00 uur</h4>
                            <div class="row c-w-b-f">
                                <div class="col-lg-6">
                                    <div class="in-c-w-b-f">
                                        <div class="c-icon">
                                            <p><i class="fa-solid fa-comment-dots"></i></p>
                                        </div>
                                        <div class="c-detail">
                                            <a href="javascript:;">Chat</a>
                                            <p>Antwoord binnen 24 uur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="in-c-w-b-f">
                                        <div class="c-icon">
                                            <p><i class="fa-brands fa-whatsapp"></i></p>
                                        </div>
                                        <div class="c-detail">
                                            <a href="javascript:;">Whatsapp</a>
                                            <p>Antwoord binnen 24 uur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="in-c-w-b-f">
                                        <div class="c-icon">
                                            <p><i class="fa-solid fa-phone"></i></p>
                                        </div>
                                        <div class="c-detail">
                                            <a href="javascript:;">Bel ons op 0104354103</a>
                                            <p>Wachttijd 10 minuten</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="in-c-w-b-f">
                                        <div class="c-icon">
                                            <p><i class="fa-brands fa-facebook-f"></i></p>
                                        </div>
                                        <div class="c-detail">
                                            <a href="javascript:;">Facebook</a>
                                            <p>Antwoord binnen 24 uur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-con-d">
                            <h4>Meld je nu aan voor onze nieuwsbrief</h4>
                            <div class="con-e-input">
                            <input type="email" name="e" placeholder="Je e-mailadres">
                            <a href="javascript:;" class="email-btn">Meld je aan</a>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
