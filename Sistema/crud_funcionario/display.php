<?php
include '../conection/conexao.php';

if (isset($_POST['displaySend'])) {
    $table='<div class="div-table mb-5"><table class="table table-striped mb-1">
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
        
        <td class="td-tabela">'.$rm.'</td>
        <td class="td-tabela">'.$nome.'</td>
        <td class="td-tabela">'.$cpf.'</td>
        <td class="td-tabela">'.$cnh.'</td>
        <td class="td-tabela">'.$cargo.'</td>
        <td>
            <button class="btn btn-dark" onclick="GetDetails('.$cd_funcionario.')">Visualizar</button>
            <button class="btn btn-danger" onclick="DeleteFun('.$cd_funcionario.')">Deletar</button>
        </td>
      </tr>';
    }
    $table .= '</table></div>';
    echo $table;
}

?>

