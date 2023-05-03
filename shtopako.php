<?php include 'inc/functions.php';?>

<link rel="stylesheet" href="tabela1.css">

           <?php
                if(isset($_POST['regjistro'])){
                    shtoPako($_POST['emripakos'], $_POST['pershkrimi']);
                }
            ?>
            <section class="foto6">
             <form id="shtoForma" class="box" action="" method="post">
                <h2>Forma për regjistrim te Pakos</h2>
                <label>EmriPakos: </label>
                <input type="text" id="emripakos" name="emripakos">
                <label>PershkrimiperPakon: </label>
                <input type="text" id="pershkrimi" name="pershkrimi">
                <input type="submit" name="regjistro" id="regjistro" value="Regjistro">
            </form>
        </section>
   
            





