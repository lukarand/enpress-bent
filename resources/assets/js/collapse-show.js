import 'classlist';

class Collapse {
  
  getUrlVars(){
    var vars = window.location.href.slice(window.location.href.indexOf('?') + 1).split('=');
    return vars;
  }
  
  init() {
    var id = this.getUrlVars()[1];
    if(id === undefined) {
      console.log(id);
    } else {
      $('#'+id+'').addClass('show');
      $('#accordion_'+id).attr('aria-expanded', 'true');
      document.location.href='#color_range';
    }
  }
}

export default Collapse;