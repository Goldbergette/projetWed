
$(function(){
  $('.delete').click(function(e){

      if(!confirm('Etes-vous sûr de vouloir supprimer cet enregistrement?')){
          return false;
      }
  });
});
