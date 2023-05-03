<?php include('inc/header.php'); ?>

<div class="tabela">
<table id="klientet_table">
            <h2 class="titulli7">Pakot</h2>
                <tr>
                    <th>EmriPakos</th>
                    <th>Pershkrimi</th>
                </tr>
            <?php
                $pakot=merrPakot();
                while ($klienti=mysqli_fetch_assoc($pakot)) {
                
                    echo "<td>". $klienti['emriPakos'];
                    echo "<td>". $klienti['pershkrimi'] ."</td>";
                    echo "</tr>";
                }
        ?>
    </table>
    <button id="shto_klient" onclick="window.location.href='shtopako.php'">Shto Pako</button>

<?php include('inc/footer.php'); ?>



