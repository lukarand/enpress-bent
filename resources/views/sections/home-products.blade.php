<div class="section-home-products py-5 py-lg-9 text-white">
  <div class="container">
    <h2 class="title-underline title-underline-center text-uppercase text-center text-white">Our products</h2>
    <div class="row pb-lg-6 pb-4">
      <div class="col-lg-3 col-md-4 col-6">
        @include ('components.product-item', [
          'data' => ((object)([
            'url' => '/product-range/flashings',
            'featured_image' => asset('/dist/media/products/valley.png'),
            'title' => 'Flashings'
          ]))
        ])
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        @include ('components.product-item', [
          'data' => ((object)([
            'url' => '/product-range/flashings-curved',
            'featured_image' => asset('/dist/media/products/curved.png'),
            'title' => 'Flashings Curved'
          ]))
        ])
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        @include ('components.product-item', [
          'data' => ((object)([
            'url' => '/product-range/rainwater-heads',
            'featured_image' => asset('/dist/media/products/rainhead.png'),
            'title' => 'Rainwater Heads'
          ]))
        ])
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        @include ('components.product-item', [
          'data' => ((object)([
            'url' => '/product-range/gutters-box-fascia',
            'featured_image' => asset('/dist/media/products/gutter.png'),
            'title' => 'Gutters Box and Fascia'
          ]))
        ])
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        @include ('components.product-item', [
          'data' => ((object)([
            'url' => '/product-range/gutters-half-round',
            'featured_image' => asset('/dist/media/products/hr-gutter.png'),
            'title' => 'Gutters Half Round'
          ]))
        ])
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        @include ('components.product-item', [
          'data' => ((object)([
            'url' => '/product-range/roof-vents',
            'featured_image' => asset('/dist/media/products/roof.png'),
            'title' => 'Roof Vents'
          ]))
        ])
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        @include ('components.product-item', [
          'data' => ((object)([
            'url' => '/product-range/accessories',
            'featured_image' => asset('/dist/media/products/cap.png'),
            'title' => 'Accessories'
          ]))
        ])
      </div>
      <div class="col-lg-3 col-md-4 col-6">
          @include ('components.product-item', [
            'data' => ((object)([
              'url' => '/product-range/welding',
              'featured_image' => asset('/dist/media/products/weld.png'),
              'title' => 'Welding'
            ]))
          ])
        </div>
    </div>
    <div class="text-center">
      <a href="/products" class="btn btn-primary">See our full range</a>
    </div>
  </div>
</div>