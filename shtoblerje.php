<?php include 'inc/functions.php';?>

<link rel="stylesheet" href="tabela1.css">

            <?php
                if(isset($_POST['blej'])){
                    shtoblerje($_POST['pakoja'],$_POST['datablerjes'],$_POST['komente']);
                } 
            ?>
            <section class="foto6">
             <form id="shtoForma" class="box" action="" method="post">
             <h2>Forma per Blerje</h2>
              <label>Zgjidh Pakon</label>
               <select id="pakoja" name="pakoja">
                 <?php $pakot=merrPakot();
             while ($pakoja=mysqli_fetch_assoc($pakot)) {
                $pakotid=$pakoja['pakotid'];
                $emri=$pakoja['emriPakos'];
                echo "<option value='{$pakotid}'>$emri</option>";  } ?>
                </select>
                <label>DataBlerjes: </label>
                <input type="date" id="datablerjes" name="datablerjes">
                <label>Komente: </label>
                <input type="text" id="komente" name="komente">
                <input type="submit" name="blej" id="blej" value="Blej">
            </form>
        </section>
    </main>
        
            




