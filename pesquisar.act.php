<?php

extract($_GET);

require('connect.php');
$clientes = mysqli_query($con, "Select * from `tb_clientes` where `nome` like '%$texto%' LIMIT 0,5");
echo "<div class=cardClientes>";
while($cliente = mysqli_fetch_assoc($clientes)){
    echo "<div class=card>";

    echo "<img src= $cliente[foto]>";

    echo "<p>Nome: $cliente[nome]</p>";
    echo "<p>Email: $cliente[email]</p>";
    echo "<p>Código: $cliente[codigo]</p>";

    echo "<a href=editarCliente.php?cod=$cliente[codigo]>Editar<a/>";
    echo "<a href=javascript:excluir($cliente[codigo])>Excluir</a>";
    echo "</p>";
    echo "</div>";
}
echo "</div>";