<?php include('inc/header.php'); ?>

        <div class="tabela">
        <table id="klientet_table">
            <h2 class=titulli7>Klientat</h2>
            <tr>
                <th>Emri Dhe Mbiemri</th>
                <th>Telefoni </th>
                <th>NrPersonal</th>
                <th>DataeLindjes</th>
                <th>Email</th>
                <th>Fjalekalimi</th>
                <th>Koumuna</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
                $klientat=merrKlientat();
                while ($klienti=mysqli_fetch_assoc($klientat)){

                $klientiid=$klienti['klientiid'];
              
                echo "<td>". $klienti['emri'] . " " . $klienti['mbiemri'] . "</td>";
                echo "<td>". $klienti['telefoni'] ."</td>";
                echo "<td>". $klienti['nrpersonal'] ."</td>";
                echo "<td>". $klienti['datalindjes'] ."</td>";
                echo "<td>". $klienti['email'] ."</td>";
                echo "<td>". $klienti['fjalekalimi'] ."</td>";
                echo "<td>". $klienti['komuna'] ."</td>";
                echo "<td><a href='modifikoklientat.php?klientiid={$klientiid}'>Edit</a></td>";
                echo "<td><a href='fshijklientat.php?klientiid={$klientiid}'>Delete</a></td>";
                echo "</tr>";
            }
        
         ?>
</table>
<button onclick="window.location.href='shtoklienta.php'" id="shto_klient">Shto klient</button>





