<?php
session_start();
$dbCon="";
dbConnection();
function dbConnection(){
    global $dbCon;
    $dbCon=mysqli_connect('localhost','root','','softy');
    if(!$dbCon){
        die("deshtoi lidhja me databazen". mysqli_error($dbCon));
    }
  }
 
/** funkstionet per pakot dhe blerjet */
function merrPakot(){
    global $dbCon;
    $sql="SELECT * FROM pakot";
    $result=mysqli_query($dbCon,$sql);
    return $result;
}

function shtoPako($emripakos,$pershkrimi){
    global $dbCon;
    $sql="INSERT INTO pakot(emriPakos,pershkrimi) VALUES ('$emripakos','$pershkrimi')";
    $result=mysqli_query($dbCon,$sql);
    if($result){
        header('Location: pakot.php');
    }
}

function shtoblerje($pakotid,$datablerjes,$komente){
    global $dbCon;
    $klientiid=$_SESSION['klienti']['klientiid'];
    $sql="INSERT INTO blerjet(klientiid,pakotid,datablerjes,komente) VALUES ('$klientiid','$pakotid','$datablerjes','$komente')";
    $klienti=mysqli_query($dbCon,$sql);
    if($klienti){
        echo "Blerja juaj eshte kryer me sukses";
        header('Location: blerjet.php');
    }else{
        die("Blerja juaj deshtoi". mysqli_error($dbCon));
    }
}

function Blerjet(){
    global $dbCon;
    $sql="SELECT k.emri,k.mbiemri,k.telefoni,k.nrpersonal,k.datalindjes,k.komuna,b.datablerjes,p.emriPakos,b.komente 
    FROM klientat k INNER JOIN blerjet b ON k.klientiid=b.klientiid INNER JOIN pakot p ON p.pakotid=b.pakotid";
    $result=mysqli_query($dbCon,$sql);
    return $result;
}
/** funkstionet per pakot dhe blerjet */



/** funkstionet per klientat */
function merrKlientat(){
    global $dbCon;
    $sql="SELECT * FROM klientat";
     $result=mysqli_query($dbCon,$sql);
     return $result;
}
function merrKlientiId($klientiid){
    global $dbCon;
    $sql="SELECT * FROM klientat WHERE klientiid={$klientiid}";
     $result=mysqli_query($dbCon,$sql);
     return $result;
}
function shtoKlient($emri,$mbiemri,$telefoni,$nrpersonal,$datalindjes,$email,$fjalekalimi,$komuna){
    global $dbCon;
    $sql="INSERT INTO klientat(emri,mbiemri,telefoni,nrpersonal,datalindjes,email,fjalekalimi,komuna)";
     $sql.="VALUES ('$emri','$mbiemri','$telefoni','$nrpersonal','$datalindjes','$email','$fjalekalimi','$komuna')";
    $klienti=mysqli_query($dbCon,$sql);
    if($klienti){
        echo "Klienti u shtua me sukses";
        header("Location:klientat.php");
      
    }else{
        die ("klienti deshtoi te shtohet". mysqli_error($dbCon));

    }
 }
function modifikoKlient($klientiid,$emri,$mbiemri,$telefoni,$nrpersonal,$datalindjes,$email,$fjalekalimi,$komuna){
    global $dbCon;
    $sql="UPDATE klientat SET emri='$emri',mbiemri='$mbiemri',telefoni='$telefoni',nrpersonal='$nrpersonal',datalindjes='$datalindjes',nrpersonal='$nrpersonal',";
    $sql.="email='$email',fjalekalimi='$fjalekalimi',komuna='$komuna' WHERE klientiid=$klientiid";
    $klienti=mysqli_query($dbCon,$sql);
    if($klienti){
        echo "klienti u modifikua me sukses";
        header("Location:klientat.php");
        
    }else{
        die ("klienti deshtoi te modifikohet". mysqli_error($dbCon));

    }
}
function fshijKlientat($klientiid){
    global $dbCon;
    $sql="DELETE FROM klientat WHERE klientiid=$klientiid";
    $klienti=mysqli_query($dbCon,$sql);
    if($klienti){
        echo "Klienti u fshi me sukses";
        header("Location:klientat.php");
      
    }else{
        die ("Klienti deshtoi te fshihet". mysqli_error($dbCon));
    }
    }
/** funkstionet per klientat */



/** funkstionet per kyqje*/
function register($emri,$mbiemri,$telefoni,$nrpersonal,$datalindjes,$email,$fjalekalimi,$komuna){
    global $dbCon;
     $sql = "INSERT INTO klientat(emri,mbiemri,telefoni,nrpersonal,datalindjes,email,fjalekalimi,komuna)";
     $sql.="VALUES('$emri','$mbiemri','$telefoni','$nrpersonal','$datalindjes','$email','$fjalekalimi','$komuna')";
     $result = mysqli_query($dbCon,$sql);
     if($result){
         echo "Ju jeni Regjistruar me sukses";
         header('Location:login.php');
     }else{
         die ("Regjistrimi juaj deshtoi". mysqli_error($dbCon));
     }
 }
 function login($email,$fjalekalimi){
    global $dbCon;
    $sql="SELECT * FROM klientat";
    $sql.=" WHERE email='$email' AND fjalekalimi='$fjalekalimi'";
    $result=mysqli_query($dbCon,$sql);
     if(mysqli_num_rows($result)==1){
        $res=mysqli_fetch_assoc($result);
        $klienti=array();
        $klienti['klientiid']=$res['klientiid'];
        $klienti['emrimbiemri']=$res['emri'] . " " .  $res['mbiemri'];
        $klienti['roli']=$res['roli'];
        $_SESSION['klienti']=$klienti;
        header("Location: index.php");
          
}
 }
 /** funkstionet per kyqje*/

 
     
