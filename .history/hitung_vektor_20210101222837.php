<?php 
            
                $tabelkriteria = mysqli_query($con, "SELECT * FROM tb_kriteria");
                $baristabelkriteria = mysqli_num_rows($tabelkriteria);
                
                if ($baristabelkriteria > 0) {
                    while($row = mysqli_fetch_assoc($tabelkriteria)) { 
                        echo $_SESSION["radio".$row["id"]];
                    }
                }
?>