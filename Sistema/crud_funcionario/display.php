<?php
include '../conexão/connect.php';

if (isset($_POST['displaySend'])) {
    $table='<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">RM</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">CNH</th>    
        <th scope="col">Cargo</th>
        <th scope="col">Opções</th>
      </tr>
    </thead>';

    $sql = "SELECT * FROM tb_funcionario";
    $result = mysqli_query($mysqli, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $cd_funcionario = $row['cd_funcionario'];
        $rm = $row['cd_rm_funcionario'];
        $nome = $row['nm_funcionario'];
        $cpf = $row['cd_cpf'];
        $crm = $row['cd_crm_medico'];
        $cnh = $row['nr_cnh'];
        $venccnh = $row['dt_vencimento_cnh'];
        $senha = $row['ds_senha'];
        $nasc = $row['dt_nasc'];
        $cargo = $row['nm_cargo'];
        $table .= '<tr>
        
        <td>'.$rm.'</td>
        <td>'.$nome.'</td>
        <td>'.$cpf.'</td>
        <td>'.$cnh.'</td>
        <td>'.$cargo.'</td>
        <td>
            <button class="btn btn-dark" onclick="GetDetails('.$cd_funcionario.')">Visualizar</button>
            <button class="btn btn-danger" onclick="DeleteFun('.$cd_funcionario.')">Deletar</button>
        </td>
      </tr>';
    }
    $table .= '</table>';
    echo $table;
}

?>

