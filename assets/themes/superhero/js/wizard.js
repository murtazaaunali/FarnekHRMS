$('.next').click(function(){

  var nextId = $(this).parents('.tab-pane').next().attr("id");
  $('[href=#'+nextId+']').tab('show');

})

$('.first').click(function(){

  $('#myWizard a:first').tab('show')

})