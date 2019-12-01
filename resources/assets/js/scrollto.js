class ScrollTo {
  constructor(selector) {
    this.selector = selector;
  }
  
  handleClick(event) {
    const $target = $(event.target);
    const currentUrl = window.location.href;
    const url = $target.attr('href');
    const originUrlSplit = url.split('#');
    const currentOriginUrlSplit = currentUrl.split('#');
    if (originUrlSplit[0] === currentOriginUrlSplit[0]) {
      if (originUrlSplit.length > 1) {
        const $element = $('#' + originUrlSplit[1]);
        if ($element.length > 0) {
          $([document.documentElement, document.body]).animate({
            scrollTop: $element.offset().top
          }, 400);
        }
      }
    }
  }

  init() {
    $(document).on('click', this.selector, this.handleClick.bind(this));
  }
}

export default ScrollTo;