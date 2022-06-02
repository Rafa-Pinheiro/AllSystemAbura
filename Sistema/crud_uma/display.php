<?php
include '../conexão/connect.php';

if (isset($_POST['displaySend'])) {
    $table='<table class="table table-striped">
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
        
        <td>'.$placa.'</td>
        <td>'.$chassi.'</td>
        <td>'.$fabricacao.'</td>
        <td>'.$tipo.'</td>
        <td>
            <button class="btn btn-dark" onclick="GetDetails('.$cd_ambulancia.')">Editar</button>
            <button class="btn btn-danger" onclick="DeleteUma('.$cd_ambulancia.')">Deletar</button>
        </td>
      </tr>';
    }
    $table .= '</table>';
    echo $table;
}

?>

