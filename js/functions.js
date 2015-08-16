function init() {
   

  $( ".entry:odd" ).addClass('no-border');
  $(".scroll-pane").jScrollPane();

  $('#banner-fade').bjqs({
    height      : 507,
    width       : 780,
    responsive  : true
  });
  
  var page = $('.content').data('page');

  switch(page){
    case 'accounts':

       $('#changeModal').modal('hide');
       $('#editModal').modal('hide');
       break;
  }

}

function addListener() {

  $('button').click(function() {
    //checks if button is popup
    if ($(this).data('attr')) {
      $.featherlight('#' + $(this).data('attr'));
    } else {
      $(location).attr('href', $(this).data('href'));
    }

  });

}

function GetParameterValues(param) {
  var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
  for (var i = 0; i < url.length; i++) {
    var urlparam = url[i].split('=');
    if (urlparam[0] == param) {
      return urlparam[1];
    }
  }
}