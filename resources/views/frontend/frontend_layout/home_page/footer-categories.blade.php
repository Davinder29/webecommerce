<section class="main-catagries">
  <div class="container">
    <div class="row">
        @foreach ($categories as $category)
            @if ($loop->index > 3)
                @php
                    continue;
                @endphp
            @endif
        <div class="col-lg-2">
          <div class="inn-catag">
            <div class="cat-img">
              <a href="javascript:;">
                <img src="https://source.unsplash.com/random" class="img-fluid" alt="{{ $category->category_name_en }}">
              </a>
            </div>
             <div class="cat-detail">
               <h2>{{ $category->category_name_en }}</h2>
               <p class="cat-text">
                  {{ $category->category_name_en }}
                </p>
                <a href="javascript:;" class="cat-link">SHOP {{ $category->category_name_en }}</a>
             </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</section>
