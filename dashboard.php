<?php
    $sql = "SELECT COUNT(id) AS Processos FROM processos_visualizar";
    $result = $conection->query($sql);
    $row = $result->fetch_assoc(); // Busca a linha resultante da consulta
    
    // Verifica se há algum resultado retornado
    if ($row) {
?>

<div class='d-flex flex-column justify-content-center align-items-center mt-5'>
    <h1>Dashboard</h1>
    <br><br>
    <div class='d-flex gap-5'>
        <div class='card' style='width: 22rem; background-color:whitesmoke'>
            <div class='card-header'>
                Processos
            </div>
            <div class='card-body'>
                <br>
                <h5 class='card-title'><?php echo htmlspecialchars($row['Processos']); ?></h5>
                <br>
                <a href='?page=processos' class='btn btn-dark'>Detalhes</a>
            </div>
        </div>

        <div class='card' style='width: 22rem; background-color:whitesmoke'>
            <div class='card-header'>
                Serviços
            </div>
            <div class='card-body'>
                <br>
                <h5 class='card-title'>Em Breve</h5>
                <br>
                <a href='#' class='btn btn-dark'>Em Breve</a>
            </div>
        </div>

        <div class='card' style='width: 22rem; background-color:whitesmoke'>
            <div class='card-header'>
                Comunicados
            </div>
            <div class='card-body'>
                <br>
                <h5 class='card-title'>Em Breve</h5>
                <br>
                <a href='#' class='btn btn-dark'>Em breve</a>
            </div>
        </div>
    </div>
</div>

<?php
    } else {
        echo "Nenhum processo.";
    }
?>
