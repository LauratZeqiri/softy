<?php include 'inc/functions.php';?>

<html>
<link rel="stylesheet" href="tabela1.css">

            <?php
                if(isset($_POST['regjistro'])){
                    shtoKlient($_POST['emri'], $_POST['mbiemri'],$_POST['telefoni'],$_POST['nrpersonal'],$_POST['datalindjes'],$_POST['email'],$_POST['datalindjes'],$_POST['komuna']);
                }
              
            ?>
             <section class="foto6">
             <form id="shtoForma" class="box" action="" method="post">
                <h2>Forma për regjistrim</h2>
                <label>Emri: </label>
                <input type="text" id="emri" name="emri">
                <label>Mbiemri: </label>
                <input type="text" id="mbiemri" name="mbiemri">
                <label>Telefoni: </label>
                <input type="text" id="telefoni" name="telefoni">
                <label>NumriPersonal: </label>
                <input type="text" id="nrpersonal" name="nrpersonal">
                <label>DataLindjes: </label>
                <input type="date" id="datalindjes" name="datalindjes">
                <label>Email: </label>
                <input type="email" id="email" name="email">
                <label>Fjalekalimi: </label>
                <input type="text" id="email" name="email">
                <label>Komuna: </label>
                <input type="text" id="komuna" name="komuna">
                <input type="submit" name="regjistro" id="regjistro" value="Regjistro">
            </form>
        </section>
    </main>
            





