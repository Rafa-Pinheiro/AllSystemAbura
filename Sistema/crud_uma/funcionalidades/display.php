<?php
include '../../conection/conexao.php';

if (isset($_POST['displaySend'])) {
    $table='<div class="div-table mb-5"><table class="table table-striped mb-1">
    <thead>
      <tr>
        <th scope="col">Placa</th>
        <th scope="col">Chassi</th>
        <th scope="col">Data de Fabricação</th>
        <th scope="col">Tipo</th>
        <th scope="col">Opções</th>
      </tr>
    </thead>';

    $sql = "SELECT * FROM tb_ambulancia";
    $result = mysqli_query($mysqli, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $cd_ambulancia = $row['cd_ambulancia'];
        $placa = $row['cd_placa'];
        $chassi = $row['nr_chassi'];
        $fabricacao = $row['dt_ano_fabricacao'];
        $tipo = $row['nm_tipo'];
        $table .= '<tr>
        
        <td class="td-tabela">'.$placa.'</td>
        <td class="td-tabela">'.$chassi.'</td>
        <td class="td-tabela">'.$fabricacao.'</td>
        <td class="td-tabela">'.$tipo.'</td>
        <td>
            <button class="btn btn-dark" onclick="GetDetails('.$cd_ambulancia.')">Editar</button>
            <button class="btn btn-danger button" onclick="DeleteUma('.$cd_ambulancia.')">Deletar</button>
        </td>
      </tr>';
    }
    $table .= '</table></div>';
    echo $table;
}

?>

