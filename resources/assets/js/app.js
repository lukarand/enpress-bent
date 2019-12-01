import 'popper.js';
// import 'bootstrap';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';

import ScrollTo from './scrollto';
import Carousel from './carousel';
import Collapse from './collapse-show';

const collapse = new Collapse('.send-id');

const scrollto = new ScrollTo('a[href]');


const partnerLogos = new Carousel('.partner-logos', {
  infinite: true,
  variableWidth: true,
  dots: false,
  centerSlides: true,
  arrows: false,
  slideToScroll: 4,
  slideToShow: 8,
  responsive: [
    {
      breakpoint: 1026,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 684,
      settings: {
        slidesToScroll: 2,
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 375,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
});
partnerLogos.init();
collapse.init();
scrollto.init();