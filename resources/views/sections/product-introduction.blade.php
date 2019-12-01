
<div class="section section-product-introduction">
  <div class="container">
    <div class="row align-items-center">
      @if (isset($product_info))
        <div class="col-md-5">
          <div class="product-image" style="background-image: url('{{ $product_info->image }}');">
            <div class="product-category">
              <a href="{{ url('/products')}}"><span class="font-size-sm text-blue font-weight-bold">Product Range</span></a> - <sppan class="font-size-sm"></sppan>{{ $product_info->category }}</span>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <h1 class="h3 h1-md product-title font-weight-extrabold text-info mb-4 mt-4 mt-md-0">{{ $product_info->title }}</h1>
          <div class="product-detail font-size-lg">
            {!! $product_info->content !!}
          </div>
        </div>
      @else
        <h5 class="text-center font-weight-normal">Find out product range.</h5>
      @endif
    </div>
  </div>
</div>