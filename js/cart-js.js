

$(document).ready(function(){

  $.ajax({
    type:'post',
    url:'store_items.php',
    data:{
      total_cart_items:"totalitems"
    },
    success:function(response) {
      document.getElementById("total_items").value=response;
    }
  });

});
