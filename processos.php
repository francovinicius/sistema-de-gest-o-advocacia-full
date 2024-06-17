<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Processos</li>
  </ol>
</nav>
<br><br><br>

<table class="table table-hover table-striped table-border">

    <thead>
        <tr>
            <th>Nº do proc.</th>
            <th>Pasta</th>
            <th>Parte Contraria</th>
            <th>Título</th>
            <th>Detalhes</th>
        </tr>
    </thead>

<tbody>
    <?php
    $sql = "SELECT * FROM processos_visualizar";
    $res = $conection->query($sql);

    $quant = $res->num_rows;

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>{$row->num_proc}</td>";
        print "<td>{$row->pasta}</td>";
        print "<td>{$row->contraria}</td>";
        print "<td>{$row->titulo}</td>";
        print "<td>
            <button onclick=\"
             location.href='?page=detalhes-processo&id=" . $row->id . "'\"
            class='btn btn-dark'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
                    <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0'/>
                </svg>
            </button></td>";
        print "</tr>";
    }
    ?>
</tbody>

</table>