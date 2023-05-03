
<?php include 'inc/functions.php';?>

<html>
<link rel="stylesheet" href="./css/login.css">

<?php
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $fjalekalimi=$_POST['fjalekalimi'];
    login($email,$fjalekalimi);
}
?>

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
<section class="projekti6">
<body>
    <div class="login-page">
        <h1>Login</h1>
        <form class="login-form" id="loginForm" method="post">
            <input type="email" placeholder="email" id="email" name="email"/>
            <input type="text" placeholder="fjalekalimi" id="fjalekalimi" name="fjalekalimi"/>
            <p class="teksti5">Nuk keni akoma account?<span><a href="register.php" class="linki">Regjstrohu</a></span></p>
            <input type="submit" value="Login" name="login">
        </form>
    </div>
</section>

    <script src="jquery-3.6.0.js"></script>
    <script src="slick.min.js"></script>
    <script src="jquery.validate.min.js"></script>

    <script>
      $().ready(function() {
            $("#loginForm").validate({
                rules: { 
                    email: {
                        required: true,
                        email: true
                    },
                    fjalekalimi: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    
                    email: {
                        required: "Ju lutem shenoni emailin",
                        email:"Ju lutem shenoni emailin e duhur" 
                       
                    },
                    fjalekalimi: {
                        required:"Ju lutem shenoni fjalekalimin",
                        minlength: "Fjalekalimi duhet te kete me shume se 6 karaktere"     
                    }          
                }
            });
        });

    </script>
</body>

</html>

 











