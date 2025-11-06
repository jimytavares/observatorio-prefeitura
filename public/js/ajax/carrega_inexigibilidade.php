<?php
    $q = intval($_GET['q']);

    session_start();
        require_once('../../.connection/Connection.class.php');
    if (!$mysqli) {
      die('Could not connect: ' . mysqli_error($mysqli));
    }

    mysqli_select_db($mysqli,"centro");
    $sql="SELECT * FROM tb_licitacontra WHERE (tipo = 'inexibilidade' AND YEAR(datta) = '".$q."') ORDER BY datta DESC, id DESC";
    $result = mysqli_query($mysqli,$sql);

    echo '<div class="row">';
        echo '<div class="col-6">';
            echo '<div class="alert alert-success" role="alert" style="text-align:center; width:100%; margin:0 auto; margin-top:30px;">';
                echo '<p style="padding-top:13px;"><b>Resultado do Filtro Por Ano!</b> <br/><small>Exibição dos documentos referente a seleção do filtro do ano desejado.</small></p>';
            echo '</div>';
        echo '</div>';
        echo '<div class="col-6">';
            echo '<h6 style="margin-top:30px;">Buscar Por Outro Ano:</h6>';
            echo '<form>';
              echo '<select class="form-control" id="exampleFormControlSelect1" name="" onchange="selectInexigibilidade(this.value)" style="color:#595959; border-radius:3px; border: 1px solid gray; height:38px;">';
                  echo '<option value="" selected disabled>.: SELECIONE - ANO :.</option>';
                  echo '<option value="2023" style="color: black !important;">Documentos de 2023</option>';
                  echo '<option value="2022" style="color: black !important;">Documentos de 2022</option>';
                  echo '<option value="2021" style="color: black !important;">Documentos de 2021</option>';
              echo '</select>';
            echo '</form>';
        echo '</div>';
    echo '</div>';    

    echo '<table class="table table-striped" style="font-size:16px; margin-top:10px;">';
        echo '<thead style="background-image: linear-gradient(to right, #3a7bd5,  #3a6073);">';
            echo '<tr style="color:white;">';
                echo '<th scope="col" style="width:20%;">Nome</th>';
                echo '<th scope="col" style="width:4%;">Ano</th>';
                echo '<th scope="col" class="hidden-xs">Informações</th>';
                echo '<th scope="col" style="width:4%; text-align:center;">Download</th>';
            echo '</tr>';
        echo '</thead>';
    echo '<tbody>';
    while($row = mysqli_fetch_array($result)) {

            $arquivo = $row['arquivo'];

            echo '<tr>';
              echo '<td class=""> <a href="../documentos/licitacoes-contratos/' . $arquivo . '" target="_blank" style="font-weight:bold;">' . $row['nome'] . '<br><small style="color:black;"> <i class="far fa-calendar-alt"></i> ' . date('d.m.Y', strtotime($row['datta'])) . '</small></a></td>';
              echo '<td class="hidden-xs">' . date('Y', strtotime($row['datta'])) . '</td>';
              echo '<td class="hidden-xs">' . $row['descricao'] . '</td>';
              echo '<td style="text-align:center;">';
                    echo '<a href="../documentos/licitacoes-contratos/' . $arquivo . '" target="_blank"> <i class="fas fa-download" style="font-size:24px; color:red;"></i> </a>';
              echo '</td>';
            echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

    mysqli_close($mysqli);
?>