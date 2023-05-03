<link rel="stylesheet" href="./css/login.css">
<?php include 'inc/functions.php';?>

<style>
    #errmessage{
  border: 1px solid #ff0000;
  color: #ff0000;
  padding: 10px;
  display: none;
}
.error{
  color: red;
  margin-left:25px;
}
</style>

     <?php
        if(isset($_POST['register'])){
         register($_POST['emri'], $_POST['mbiemri'],$_POST['telefoni'],$_POST['nrpersonal'],$_POST['datalindjes'],$_POST['email'],$_POST['fjalekalimi'],$_POST['komuna']);
             }
        ?>
    <body>
         <section class="projekti6">
         <div class="login-page" style="width: 650px";>
         <h3>Per ta bler pakon ju duhet te regjistroheni</h3>
        <form class="login-form" id="loginForm" method="post">
            <input type="text" placeholder="Emri..." name="emri">
            <input type="text" placeholder="Mbiemri..." name="mbiemri">
            <input type="text" placeholder="Telefoni..." name="telefoni">
            <input type="text" placeholder="Nr personal..." name="nrpersonal">
            <input type="text" placeholder="Dataelindjes" name="datalindjes">
            <input type="email" placeholder="Email..." name="email">
            <input type="text" placeholder="Fjalekalimi..."  name="fjalekalimi" />
            <input type="text" placeholder="Komuna..."  name="komuna" />
            <p class="teksti5">Keni account?<span><a
                        href="login.php" class="linki">Login</a></span></p>
            <input type="submit" value="Register" name="register">
        </form>
    </div>
<section>
<script src="jquery-3.6.0.js"></script>
    <script src="slick.min.js"></script>
    <script src="jquery.validate.min.js"></script>
    <script>
      
      $().ready(function() {
            $("#loginForm").validate({
                rules: { 
                    emri: {
                        required: true,
                        minlength: 3,
                       
                    },
                    mbiemri: {
                        required: true,  
                    },
                    telefoni: {
                        required: true
                    },
                    nrpersonal: {
                        required: true
                       
                    },
                    datalindjes: {
                        required: true
                       
                    },
                    email:{
                        required: true
                    },
                    fjalekalimi:{
                        required: true
                    },
                    komuna:{
                        required:true
                    }
                },
                messages: {
                    
                    emri: {
                        required: "Te lutem shenoni emrin",
                        minlength: "Emri duhet te kete me shume se 5 karaktere"
                       
                    },
                    mbiemri: {
                        required: "Te lutem shenoni mbiemrin"
                      
                    },
                    telefoni: {
                        required: "Te lutem shenoni telefonin"
                    },
                    nrpersonal:{
                        required: "Te lutem shenoni numrin personal"
                    },
                    datalindjes:{
                        required: "Te lutem shenoni daten e lindjes"
                    },
                    email: {
                        required:"Te lutem shenoni emailin",
                        email:"Ju lutem shenoni emailin e duhur"     
                    },
                    fjalekalimi: {
                        required:"Te lutem shenoni fjalekalimin",
                        minlength:"Fjalekalimi duhet te kete me shume se 6 karaktere"     
                    },
                     komuna: {
                        required:"Te lutem shenoni komunen",
                        
                    }

                }
            });
        });
        </script>



</body>
</html>




