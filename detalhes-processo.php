<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="?page=processos">Processos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalhes Processos</li>
  </ol>
</nav>
<br><br><br>

<?php

$sql = " SELECT 
    pv.id, 
    pv.num_proc, 
    pv.pasta, 
    pv.contraria, 
    pv.titulo, 
    pd.advogado, 
    pd.num_distrito, 
    pd.posicao, 
    pd.status, 
    pd.orgao
FROM 
    processos_visualizar pv
JOIN 
    processos_detalhe pd 
ON 
    pv.detalhe_id = pd.id
WHERE 
    pv.id =" . $_REQUEST["id"];

$result = $conection->query($sql);

if ($result->num_rows > 0) {
    // Obtém a linha do resultado
    $row = $result->fetch_assoc();

?>

    <div class="d-flex gap-5">
        <div class="card" style="width: 22rem; background-color:whitesmoke">
            <div class="d-flex flex-column card-body justify-content-center align-items-between">
                <div class="d-flex justify-content-between">
                    <p>Pasta:</p>
                    <p><strong><?php echo htmlspecialchars($row['pasta']); ?></strong></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Advogado:</p>
                    <p><strong><?php echo htmlspecialchars($row['advogado']); ?></strong></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Num Distrito:</p>
                    <p><strong><?php echo htmlspecialchars($row['num_distrito']); ?></strong></p>
                </div>
            </div>
        </div>

        <div class="card" style="width: 22rem; background-color:whitesmoke">
            <div class="d-flex flex-column card-body justify-content-center align-items-between">
                <div class="d-flex justify-content-between">
                    <p>Título:</p>
                    <p><strong><?php echo htmlspecialchars($row['titulo']); ?></strong></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Contrária:</p>
                    <p><strong><?php echo htmlspecialchars($row['contraria']); ?></strong></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Posição:</p>
                    <p><strong><?php echo htmlspecialchars($row['posicao']); ?></strong></p>
                </div>
            </div>
        </div>

        <div class="card" style="width: 22rem; background-color:whitesmoke">
            <div class="d-flex flex-column card-body justify-content-center align-items-between">
                <div class="d-flex justify-content-between">
                    <p>Status:</p>
                    <p><strong><?php echo htmlspecialchars($row['status']); ?></strong></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Órgão:</p>
                    <p><strong><?php echo htmlspecialchars($row['orgao']); ?></strong></p>
                </div>
            </div>
        </div>
    </div>

<?php
} else {
    echo "Nenhum registro encontrado.";
}
?>

<br><br><br><br><br>

<table class="table table-hover table-striped table-border">

    <thead>
        <tr>
            <th>Data</th>
            <th>Descrição</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $sqlII = "SELECT
            pa.id AS atualizar_id,
            pa.data,
            pa.descricao,
            pv.id AS visualizar_id,
            pv.num_proc, 
            pv.pasta, 
            pv.contraria, 
            pv.titulo
        FROM 
            processos_atualizar pa
        JOIN 
            processos_visualizar pv
        ON 
            pa.visualizar_id = pv.id
        WHERE 
            pv.id =" . $_REQUEST["id"];
        
        $res = $conection->query($sqlII);

        $quantidade = $res->num_rows;

        while($row = $res->fetch_object()){

        print "<tr>";

        print "<td>{$row->data}</td>";
        print "<td>{$row->descricao}</td>";
    
        print "<tr>";
        }
        ?>
    </tbody>


</table>