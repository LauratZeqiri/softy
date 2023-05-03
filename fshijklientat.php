<?php include 'inc/functions.php';?>

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
                if(isset($_POST['fshij'])){
                    $klientiid=$_POST['klientiid'];
                    fshijKlientat($klientiid);
        
                } 
             ?>
     <section class="foto6">
            <form id="shtoForma" class="box" action="" method="post">
                <h2>Forma për fshirje</h2>
                <input type="hidden" id="klientiid" name="klientiid"
                    value="<?php if(!empty($klientiid)) echo $klientiid; ?>">
                <label>Emri: </label>
                <input type="text" id="emri" name="emri" readonly
                    value="<?php if(!empty($emri)) echo $emri; ?>">
                <label>Mbiemri: </label>
                <input type="text" id="mbiemri" name="mbiemri" readonly
                    value="<?php if(!empty($mbiemri)) echo $mbiemri; ?>">
                <label>Telefoni: </label>
                <input type="text" id="telefoni" name="telefoni" readonly
                    value="<?php if(!empty($telefoni)) echo $telefoni; ?>">
                <label>NumriPersonal: </label>
                <input type="text" id="nrpersonal" name="nrpersonal" readonly
                    value="<?php if(!empty($nrpersonal)) echo $nrpersonal; ?>">
                <label>DataLindjes: </label>
                <input type="date" id="datalindjes" name="datalindjes" readonly
                    value="<?php if(!empty($datalindjes)) echo $datalindjes; ?>">
                    <label>Email: </label>
                <input type="email" id="email" name="email" readonly
                    value="<?php if(!empty($email)) echo $email; ?>">
                <label>Fjalekalimi: </label>
                <input type="text" id="fjalekalimi" name="fjalekalimi" readonly
                    value="<?php if(!empty($fjalekalimi)) echo $fjalekalimi; ?>">
                <label>Komuna: </label>
                <input type="text" id="komuna" name="komuna" readonly
                    value="<?php if(!empty($komuna)) echo $komuna; ?>">
                <input type="submit" name="fshij" id="fshij" value="Fshij">
               
            </form>
        </section>
    </main>







