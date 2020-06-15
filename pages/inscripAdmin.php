
<div class="container d-flex align-items-center justify-content-center zone-formulaire option">
      <form class="form" method="POST" action="./data/inscription-bd.php" id="form-login" enctype="multipart/form-data">

        <div class="row">  
         <div class="row form-group int">
            <div class="col-md-6 col-sm-6 col-lg-6 col-6">
            <label for="firstname" >first Name</label>
            <input type="text" name="firstname" class="firstname" id="firstname">  

        </div>
         </div>
        <div class=" row form-group int">
        <div class="col-md-6 col-sm-6 col-lg-6 col-6 ">
            <label for="lastname">last Name</label>
            <input type="text" name="lastname" class="lastname" id="lastname" >
               
        </div>
        </div>
        <div class="row form-group int">
        <div class="col-md-6  col-sm-6 col-lg-6 col-6">
            <label for="login">login</label>
            <input type="text" name="login" class="login" id="login" >
        </div>
        </div>
        <div class=" row form-group int">
        <div class="col-md-6 col-sm-6 col-lg-6 col-6 ">
         <div class="col-6 col-sm-6  ava"><img id="output" class="img-fluid" ><h3 class="avat">Avatar</h3></div>        
        </div>
        </div>
        <div class=" row form-group int">
        <div class="col-md-6 col-sm-6 col-6">
            <label for="password">password</label>
            <input type="password" name="password" class="password" id="password" >     

        </div>
         </div>
        <div class="row form-group int">
        <div class="col-md-6 col-sm-6 col-6 pass2 ">
            <label for="password2">Confirm password</label>
            <input type="password" name="password2" class="password2" id="password2">
        </div>
        </div>
        <div class=" row fichier">
            <label for="file" class="label-file">Choisir un fichier</label>
            <input id="file" class="choisir" type="file" name="image" onchange="loadFile(event)">    
        </div>
        <button class="btn btn-primary" id="sub" name="sub">SUBMIT</button>
    </div>
</div>


