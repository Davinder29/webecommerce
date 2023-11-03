 <section class="image-add">
    <div class="row">

      <?php $check_id = null; ?>
      @foreach ($categories as $category)
       <?php $check_id = $category->id; ?>
        @if ($loop->index > 0)
            @php
                continue;
            @endphp
        @endif
     <div class="col-lg-6">
       <div class="in-ad-img-left">
         <a href="javascript;:"><img src="{{ asset('frontend_new/assets/images/banner-img.jpg') }}" class="img-fluid" alt="{{ $category->category_name_en }}"></a>
       </div>
     </div>
     @endforeach
     <div class="col-lg-6">
       <div class="in-ad-img-right">
        @foreach ($categories as $category)
           @if($category->id != $check_id)
            @if ($loop->index > 3)
                @php
                    continue;
                @endphp
            @endif
         <a href="javascript:;"><img src="{{ asset('frontend_new/assets/images/b4.jpg') }}" class="img-fluid" alt="{{ $category->category_name_en }}"></a>
         @endif
        @endforeach
       </div>
     </div>
    </div>
</section>
