<div class="col-xl-3 col-lg-4 col-md-6 mb-4">
  <div class="card-product-range">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h4 class="card-title font-weight-bold text-info mb-0">{{ $data->title }}</h4>
      <div class="featured-image">
        <img src="{{ $data->featured_image }}" alt="{{ $data->title }}"/>
      </div>
    </div>
    <div class="card-body">
      {!! $data->content !!}
      <a href="{{ $data->url }}" class="btn btn-block text-primary font-weight-bold">Learn more</a>
    </div>
  </div>
</div>