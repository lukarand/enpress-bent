
<div class="section section-detail-range py-7 py-lg-9">
  <div class="container">
    @if (isset($detail_table))
      <div class="product-detail">
        <div class="product-item">
          <button class="btn btn-primary btn-block">
            {{ $detail_table->name }}
          </button>
          <div>
            <table class="table table-detail-range">
              <tbody>
                @foreach($detail_table->data as $detail_table_row)
                  <tr>
                    <td class="name-cell"><a class="send-id text-info" href="/about?id={{ $detail_table_row->linking }}">{{ $detail_table_row->name }}</a></td>
                    @foreach($detail_table_row->features as $detail_table_feature)
                      <td class="feature-cell">
                        @if (!empty($detail_table_feature))
                          <span>{{ $detail_table_feature }}</span>
                        @endif
                      </td>
                    @endforeach
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    @else
      <h5 class="title-content text-center font-weight-normal">Find out colours range.</h5>
    @endif
    <div class="mt-5">
      <p><small>Please select a section above to see specific colours.</small></p>
    </div>
  </div>
</div>
