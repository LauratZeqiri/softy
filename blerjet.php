<?php include('inc/header.php'); ?>

<div class="tabela">
<table id="klientet_table">
            <h2 class="titulli7">Blerjet</h3>
                <tr>
                    <th>Emri dhe Mbiemri</th>
                    <th>Telefoni</th>
                    <th>NumriPersonal</th>
                    <th>DataLindjes</th>
                    <th>Komuna</th>
                    <th>Datablerjes</th>
                    <th>Emri Pakos</th> 
                   
                </tr>
            <?php
                $blerjet=Blerjet();
                while ($klienti=mysqli_fetch_assoc($blerjet)) {
                    
                    echo "<td>". $klienti['emri'] . " " . $klienti['mbiemri'] . "</td>";
                    echo "<td>". $klienti['telefoni'] ."</td>";
                    echo "<td>". $klienti['nrpersonal'] ."</td>";
                    echo "<td>". $klienti['datalindjes'] ."</td>";
                    echo "<td>". $klienti['komuna'] ."</td>";
                    echo "<td>". $klienti['datablerjes'] ."</td>";
                    echo "<td>". $klienti['emriPakos'] ."</td>";
                    echo "</tr>";
                }
            ?>
            </table>

<?php include('inc/footer.php'); ?>



