<?php include 'inc/functions.php';?>

<html>
<link rel="stylesheet" href="tabela1.css">

            <?php
                if (isset($_GET['klientiid'])) {
                    $klientiid=$_GET['klientiid'];
                    $klienti=merrKlientiId($klientiid);
                    if($klienti){
                        $klienti=mysqli_fetch_assoc($klienti);
                        $klientiid=$klienti['klientiid'];
                        $emri=$klienti['emri'];
                        $mbiemri=$klienti['mbiemri'];
                        $telefoni=$klienti['telefoni']; 
                        $nrpersonal=$klienti['nrpersonal'];
                        $datalindjes=$klienti['datalindjes'];
                        $email=$klienti['email'];  
                        $fjalekalimi=$klienti['fjalekalimi'];
                        $komuna=$klienti['komuna']; 
                    }
                }
                 if(isset($_POST['modifiko'])){
              modifikoKlient($_POST['klientiid'],$_POST['emri'], $_POST['mbiemri'], $_POST['telefoni'], $_POST['nrpersonal'], $_POST['datalindjes'], $_POST['email'],$_POST['fjalekalimi'], $_POST['komuna']);
                }
            ?> 
             <section class="foto6">
             <form id="shtoForma" class="box" action="" method="post">
                <h2>Forma për modifikim</h2>
                <input type="hidden" id="klientiid" name="klientiid"
                    value="<?php if(!empty($klientiid)) echo $klientiid; ?>"> 
                <label>Emri: </label>
                <input type="text" id="emri" name="emri"
                    value="<?php if(!empty($emri)) echo $emri; ?>">
                <label>Mbiemri: </label>
                <input type="text" id="mbiemri" name="mbiemri"
                    value="<?php if(!empty($mbiemri)) echo $mbiemri; ?>">
                <label>Telefoni: </label>
                <input type="text" id="telefoni" name="telefoni"
                    value="<?php if(!empty($telefoni)) echo $telefoni; ?>">
                <label>NrPersonal: </label>
                <input type="text" id="nrpersonal" name="nrpersonal"
                    value="<?php if(!empty($nrpersonal)) echo $nrpersonal; ?>">
                <label>DataLindjes: </label>
                <input type="date" id="datalindjes" name="datalindjes"
                    value="<?php if(!empty($datalindjes)) echo $datalindjes; ?>">
                    <label>Email: </label>
                <input type="email" id="email" name="email"
                    value="<?php if(!empty($email)) echo $email; ?>">
                <label>Fjalekalimi: </label>
                <input type="text" id="fjalekalimi" name="fjalekalimi"
                    value="<?php if(!empty($fjalekalimi)) echo $fjalekalimi; ?>">
                <label>Komuna: </label>
                <input type="text" id="komuna" name="komuna"
                    value="<?php if(!empty($komuna)) echo $komuna; ?>">
                <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
                
            </form>
            </section>
    </main>







