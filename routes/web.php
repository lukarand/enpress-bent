<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/products', function() {
    return view('products');
});

Route::get('/product-range/{slug}', function($slug) {
    $product_infos = [
        (object)[  
          'slug' => 'roof-vents',  
          'category' => 'Gutters - Half Round',
          'image' => asset('/dist/media/products/roof.png'),
          'title' => 'Roof Vents',
          'content' => '<p>Our drops and box gutter stop ends are suitable for a range of roofing and guttering systems. All of our products can be ordered in a range of sizes and colours.</p>'
        ],
        (object)[  
          'slug' => 'accessories',  
          'category' => 'Accessories',
          'image' => asset('/dist/media/products/cap.png'),
          'title' => 'Accessories',
          'content' => '<p>Our drops and box gutter stop ends are suitable for a range of roofing and guttering systems. All of our products can be ordered in a range of sizes and colours.</p>'
        ],
        (object)[  
          'slug' => 'welding',  
          'category' => 'Welding',
          'image' => asset('/dist/media/products/weld.png'),
          'title' => 'Welding',
          'content' => '<p>Our drops and box gutter stop ends are suitable for a range of roofing and guttering systems. All of our products can be ordered in a range of sizes and colours.</p>'
        ],
        (object)[  
            'slug' => 'gutters-half-round',  
            'category' => 'Gutters - Half Round',
            'image' => asset('/dist/media/products/hr-gutter.png'),
            'title' => 'Gutters - Half Round',
            'content' => '<p>Our drops and box gutter stop ends are suitable for a range of roofing and guttering systems. All of our products can be ordered in a range of sizes and colours.</p>'
          ],
        (object)[  
            'slug' => 'gutters-box-fascia',  
            'category' => 'Gutters - Box and Fascia',
            'image' => asset('/dist/media/products/gutter.png'),
            'title' => 'Gutters - Box and Fascia',
            'content' => '<p>Our drops and box gutter stop ends are suitable for a range of roofing and guttering systems. All of our products can be ordered in a range of sizes and colours.</p>'
          ],
        (object)[  
          'slug' => 'flashings',  
          'category' => 'Flashings',
          'image' => asset('/dist/media/products/valley.png'),
          'title' => 'Flashings',
          'content' => '<p>We offer 100mm, 150mm, 200mm, 250mm, 300mm, 350mm, 400mm, 450mm, 500mm, 600mm, 800mm, 1000mm, 1200mm girths.</p>'
        ],
        (object)[  
            'slug' => 'flashings-curved',  
            'category' => 'Flashings Curved',
            'image' => asset('/dist/media/products/curved.png'),
            'title' => 'Flashings Curved',
            'content' => '<p>We offer 100mm, 150mm, 200mm, 250mm, 300mm, 350mm, 400mm, 450mm, 500mm, 600mm, 800mm, 1000mm, 1200mm girths.</p>'
          ],
        (object)[  
            'slug' => 'rainwater-heads',  
            'category' => 'Rainwater Heads',
            'image' => asset('/dist/media/products/rainhead.png'),
            'title' => 'Rainwater Heads',
            'content' => '<p>Available in: 300 w x 150 d x 300, 400 w x 200 d x 400 h, 500 w x 250 d x 500 h, 600 w x 300 d x 600 h, Hole Only Overflow, Overflow Fitted. </p>'
          ],
      ];
      $detail_tables = [
          (object)[
            'slug' => 'roof-vents',  
            'name' => 'AVAILABLE IN',
            'data' => [
              (object)[ 'name' => 'Ausdeck Ceram-A-Coat', 'linking' => 'color_range_0',               'features' => ['0.55', '', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorlbond XRW', 'linking' => 'color_range_1',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Matt', 'linking' => 'color_range_2',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Metallic', 'linking' => 'color_range_4',       'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Unicote Magnaflow', 'linking' => 'color_range_3',                  'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Zincalume', 'linking' => 'color_range_5',                'features' => ['0.55', '0.75', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Galvalume',  'linking' => 'color_range_5',               'features' => ['0.55', '0.75', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Stainless Steel', 'linking' => 'color_range_6',          'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => '304 2B Stainless Steel',  'linking' => 'color_range_6',            'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '3.00']],
              (object)[ 'name' => '316 #4 Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '3.00']],
            ]
          ],
          (object)[
            'slug' => 'accessories',  
            'name' => 'AVAILABLE IN',
            'data' => [
              (object)[ 'name' => 'Ausdeck Ceram-A-Coat', 'linking' => 'color_range_0',               'features' => ['0.55', '', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorlbond XRW', 'linking' => 'color_range_1',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Matt', 'linking' => 'color_range_2',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Metallic', 'linking' => 'color_range_4',       'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Unicote Magnaflow', 'linking' => 'color_range_3',                  'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Zincalume', 'linking' => 'color_range_5',                'features' => ['0.55', '0.75', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Galvalume',  'linking' => 'color_range_5',               'features' => ['0.55', '0.75', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Stainless Steel', 'linking' => 'color_range_6',          'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => '304 2B Stainless Steel',  'linking' => 'color_range_6',            'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '3.00']],
              (object)[ 'name' => '316 #4 Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '3.00']],
            ]
          ],
          (object)[
            'slug' => 'welding',  
            'name' => 'AVAILABLE IN',
            'data' => [
              (object)[ 'name' => 'Ausdeck Ceram-A-Coat', 'linking' => 'color_range_0',               'features' => ['0.55', '', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorlbond XRW', 'linking' => 'color_range_1',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Matt', 'linking' => 'color_range_2',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Metallic', 'linking' => 'color_range_4',       'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Unicote Magnaflow', 'linking' => 'color_range_3',                  'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Zincalume', 'linking' => 'color_range_5',                'features' => ['0.55', '0.75', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Galvalume',  'linking' => 'color_range_5',               'features' => ['0.55', '0.75', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Stainless Steel', 'linking' => 'color_range_6',          'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => '304 2B Stainless Steel',  'linking' => 'color_range_6',            'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '3.00']],
              (object)[ 'name' => '316 #4 Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '3.00']],
            ]
          ],
          (object)[
            'slug' => 'gutters-box-fascia',  
            'name' => 'AVAILABLE IN',
            'data' => [
              (object)[ 'name' => 'Ausdeck Ceram-A-Coat', 'linking' => 'color_range_0',               'features' => ['0.55', '', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorlbond XRW', 'linking' => 'color_range_1',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Matt', 'linking' => 'color_range_2',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Metallic', 'linking' => 'color_range_4',       'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Unicote Magnaflow', 'linking' => 'color_range_3',                  'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Zincalume', 'linking' => 'color_range_5',                'features' => ['0.55', '0.75', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Galvalume',  'linking' => 'color_range_5',               'features' => ['0.55', '0.75', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Stainless Steel', 'linking' => 'color_range_6',          'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => '304 2B Stainless Steel',  'linking' => 'color_range_6',            'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '3.00']],
              (object)[ 'name' => '316 #4 Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '3.00']],
            ]
          ],
          (object)[
            'slug' => 'gutters-half-round',  
            'name' => 'AVAILABLE IN',
            'data' => [
              (object)[ 'name' => 'Ausdeck Ceram-A-Coat', 'linking' => 'color_range_0',               'features' => ['', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorlbond XRW', 'linking' => 'color_range_1',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Matt', 'linking' => 'color_range_2',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Metallic', 'linking' => 'color_range_4',       'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Unicote Magnaflow', 'linking' => 'color_range_3',                  'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Zincalume', 'linking' => 'color_range_5',                'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Galvalume', 'linking' => 'color_range_5',                'features' => ['', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Stainless Steel', 'linking' => 'color_range_6',          'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => '304 2B Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => '316 #4 Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '', '', '', '', '']],
            ]
          ],
        (object)[
          'slug' => 'flashings',  
          'name' => 'AVAILABLE IN',
          'data' => [
            (object)[ 'name' => 'Ausdeck Ceram-A-Coat', 'linking' => 'color_range_0',               'features' => ['0.55', '', '1.00', '1.20', '', '', '']],
            (object)[ 'name' => 'Bluescope Colorlbond XRW', 'linking' => 'color_range_1',           'features' => ['0.55', '', '', '', '', '', '']],
            (object)[ 'name' => 'Bluescope Colorbond Matt', 'linking' => 'color_range_2',           'features' => ['0.55', '', '', '', '', '', '']],
            (object)[ 'name' => 'Bluescope Colorbond Metallic', 'linking' => 'color_range_4',       'features' => ['0.55', '', '', '', '', '', '']],
            (object)[ 'name' => 'Unicote Magnaflow', 'linking' => 'color_range_3',                  'features' => ['0.55', '', '', '', '', '', '']],
            (object)[ 'name' => 'Bluescope Zincalume', 'linking' => 'color_range_5',                'features' => ['0.55', '0.75', '1.00', '1.20', '', '', '']],
            (object)[ 'name' => 'Bluescope Galvalume', 'linking' => 'color_range_5',                'features' => ['', '', '', '', '1.50', '1.90', '2.40']],
            (object)[ 'name' => 'Bluescope Stainless Steel', 'linking' => 'color_range_6',          'features' => ['0.55', '', '', '', '', '', '']],
            (object)[ 'name' => '304 2B Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '3.00']],
            (object)[ 'name' => '316 #4 Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '3.00']],
          ]
        ],
        (object)[
            'slug' => 'flashings-curved',  
            'name' => 'AVAILABLE IN',
            'data' => [
              (object)[ 'name' => 'Ausdeck Ceram-A-Coat', 'linking' => 'color_range_0',               'features' => ['0.55', '', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorlbond XRW', 'linking' => 'color_range_1',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Matt', 'linking' => 'color_range_2',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Metallic', 'linking' => 'color_range_4',       'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Unicote Magnaflow', 'linking' => 'color_range_3',                  'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Zincalume', 'linking' => 'color_range_5',                'features' => ['0.55', '0.75', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Galvalume', 'linking' => 'color_range_5',                'features' => ['', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Stainless Steel', 'linking' => 'color_range_6',          'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => '304 2B Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => '316 #4 Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '1.00', '1.20', '', '', '']],
            ]
          ],
        (object)[
            'slug' => 'rainwater-heads',  
            'name' => 'AVAILABLE IN',
            'data' => [
              (object)[ 'name' => 'Ausdeck Ceram-A-Coat', 'linking' => 'color_range_0',               'features' => ['0.55', '', '1.00', '1.20', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorlbond XRW', 'linking' => 'color_range_1',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Matt', 'linking' => 'color_range_2',           'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Colorbond Metallic', 'linking' => 'color_range_4',       'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Unicote Magnaflow', 'linking' => 'color_range_3',                  'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Zincalume', 'linking' => 'color_range_5',                'features' => ['0.55', '0.75', '1.00', '', '', '', '']],
              (object)[ 'name' => 'Bluescope Galvalume', 'linking' => 'color_range_5',                'features' => ['', '', '', '', '1.50', '', '']],
              (object)[ 'name' => 'Bluescope Stainless Steel', 'linking' => 'color_range_6',          'features' => ['0.55', '', '', '', '', '', '']],
              (object)[ 'name' => '304 2B Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '']],
              (object)[ 'name' => '316 #4 Stainless Steel', 'linking' => 'color_range_6',             'features' => ['0.55', '', '1.00', '1.20', '1.50', '1.90', '']],
            ]
          ]
      ];
    foreach($product_infos as $product_info) {
      if($slug === $product_info->slug ) {
        foreach($detail_tables as $detail_table) {
          if($slug === $detail_table->slug) {
            return view('product-range', [
              'product_info' => $product_info,
              'detail_table' => $detail_table
            ]);
          }
        }
      } 
    }
});
