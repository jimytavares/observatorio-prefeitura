<?php
$q = intval($_GET['q']);

session_start();
    require_once('../../.connection/Connection.class.php');
if (!$mysqli) {
  die('Could not connect: ' . mysqli_error($mysqli));
}

mysqli_select_db($mysqli,"centro");
$sql="SELECT * FROM tb_TransfConven WHERE YEAR(datta) = '".$q."'";
$result = mysqli_query($mysqli,$sql);


echo '<table class="table table-striped" style="font-size:16px;">';
    echo '<thead style="background-image: linear-gradient(to right, #3a7bd5,  #3a6073);">';
        echo '<tr style="color:white;">';
            echo '<th scope="col" style="width:15%;">Nome</th>';
            echo '<th scope="col" class="hidden-xs">Informações</th>';
            echo '<th scope="col" style="width:4%;">PDF</th>';
            echo '<th scope="col" style="width:4%;">CSV</th>';
        echo '</tr>';
    echo '</thead>';
echo '<tbody>';
while($row = mysqli_fetch_array($result)) {
    
        $arquivo = $row['arquivo'];
        $arquivo_csv = $row['arquivo_csv'];
    
        echo '<tr>';
          echo '<td class=""> <a href="../documentos/transferencia-convenios/' . $arquivo . '" target="_blank" style="font-weight:bold;">' . $row['nome'] . '<br><small style="color:black;"> <i class="far fa-calendar-alt"></i> ' . date('d.m.Y', strtotime($row['datta'])) . '</small></a></td>';
          echo '<td class="hidden-xs" style="text-transform: lowercase;">' . $row['descricao'] . '</td>';
          echo '<td style="text-align:center;">';
            if(isset( $row['arquivo'] ) && ! empty( $row['arquivo'] ) ) {
                echo '<a href="../documentos/transferencia-convenios/' . $arquivo . '" target="_blank"> <i class="fas fa-download" style="font-size:24px; color:red;"></i> </a>';
            }
          echo '</td>';
          echo '<td style="text-align:center;">';
              if(isset( $row['arquivo_csv'] ) && ! empty( $row['arquivo_csv'] ) ) {
                echo '<a href="../documentos/transferencia-convenios/' . $arquivo_csv . '" target="_blank"> <i class="fas fa-download" style="font-size:24px; color:green;"></i> </a>';
              }
          echo '</td>';
        echo '</tr>';
    
}
echo '</tbody>';
echo '</table>';

    mysqli_close($mysqli);
?>