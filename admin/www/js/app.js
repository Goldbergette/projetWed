
$(function(){
  $('.delete').click(function(e){

      if(!confirm('Etes-vous sûr de vouloir supprimer cet enregistrement?')){
          return false;
      }
  });
  $('.edit').submit(function(e){

      if(!confirm('Etes-vous sûr de vouloir modifier cet enregistrement?')){
          return false;
      }
  });
});
