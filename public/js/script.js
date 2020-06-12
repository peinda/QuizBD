$(document).ready(function(){
    var error = false;
    $('#form-connect').submit(function(){
        if ($("#username").val().length===0) {
            $("#username").after("<span>Merci de remplir ce champ</span>"); 
            error = true;
            event.preventDefault();   
        }
         if ($("#password").val().length===0) {
            $("#password").after("<span>Merci de remplir ce champ</span>");  
            error = true;
            event.preventDefault();  
        }
        if(error == false){//si y'a pas d'erreur
            let form_data=$(this).serializeArray();
            $.post("./data/message.php",form_data,
                function(result){
                    if (result == '  admin') {
                        window.location=`index.php?user=admin`;
                    }
                    else if (result == '  jeux') {
                        window.location=`index.php?user=joueur`;
                    }
                    else{
                        alert('login ou mot de passe incorrect');
                    }
            })
        }
    })
})

//inscription
  function inscription(){
    let form = new FormData($('#form-login')[0]);
    form.append('sub','submit');
    $.ajax({
      url:'./data/inscription-bd.php',
      data: form,
      dataType:'text',
      type:'Post',
      contentType:false,
      processData:false,
      success: (result) => {
        alert(result);
        window.location=`index.php?user=connexion`;

      }
    });
  }

  document.getElementById('sub').addEventListener('click',inscription);

  //upload avatar
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
  };




