<div class="section section-products py-5 py-lg-9">
  <div class="container">
    <h2 class="title-underline title-underline-center text-uppercase text-center text-info font-weight-extrabold">PRODUCT RANGE</h2>
    <h5 class="title-content text-center font-weight-normal">We are the market leader in the sheet metal industry and have earned a reputation for providing high quality products with the fastest turnaround times.</h5>
    <div class="row pb-lg-6 pb-4">
      @include ('components.product-range', [
        'data' => ((object)([
          'title' => 'Flashings',
          'featured_image' => asset('/dist/media/products/valley.png'),
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate mi consequat erat tempus vulputate.</p>',
          'url' => '/product-range/flashings'
        ]))
      ])
      @include ('components.product-range', [
        'data' => ((object)([
          'title' => 'Flashings Curved',
          'featured_image' => asset('/dist/media/products/curved.png'),
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate mi consequat erat tempus vulputate.</p>',
          'url' => '/product-range/flashings-curved'
        ]))
      ])
      @include ('components.product-range', [
        'data' => ((object)([
          'title' => 'Rainwater Heads',
          'featured_image' => asset('/dist/media/products/rainhead.png'),
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate mi consequat erat tempus vulputate.</p>',
          'url' => '/product-range/rainwater-heads'
        ]))
      ])
      @include ('components.product-range', [
        'data' => ((object)([
          'title' => 'Gutters Box and Fascia',
          'featured_image' => asset('/dist/media/products/gutter.png'),
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate mi consequat erat tempus vulputate.</p>',
          'url' => '/product-range/gutters-box-fascia'
        ]))
      ])
      @include ('components.product-range', [
        'data' => ((object)([
          'title' => 'Gutters Half Round',
          'featured_image' => asset('/dist/media/products/hr-gutter.png'),
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate mi consequat erat tempus vulputate.</p>',
          'url' => '/product-range/gutters-half-round'
        ]))
      ])
      @include ('components.product-range', [
        'data' => ((object)([
          'title' => 'Roof Vents',
          'featured_image' => asset('/dist/media/products/roof.png'),
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate mi consequat erat tempus vulputate.</p>',
          'url' => '/product-range/roof-vents'
        ]))
      ])
      @include ('components.product-range', [
        'data' => ((object)([
          'title' => 'Accessories',
          'featured_image' => asset('/dist/media/products/cap.png'),
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate mi consequat erat tempus vulputate.</p>',
          'url' => '/product-range/accessories'
        ]))
      ])
      @include ('components.product-range', [
        'data' => ((object)([
          'title' => 'Welding',
          'featured_image' => asset('/dist/media/products/weld.png'),
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate mi consequat erat tempus vulputate.</p>',
          'url' => '/product-range/welding'
        ]))
      ])
    </div>
  </div>
</div>