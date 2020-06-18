// Add User on click

$(document).ready(function(){

  $("#addUser").click(function(){
    let userName = "Maes";
    $.post("<?= Base_URL; ?>/AjaxController/addUser",{'user': userName},

      function(response){
        alert(userName);
      });
  })
})
