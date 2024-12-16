<?php

@session_start();

?>

<ul class="Menu" >


<li><a href="cadastroCliente.php" style="color:white;">Cadastro</a></li>







<?php

@session_start();

if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
    echo "<li><a href=logout.php style=color:white; > Sair</a></li>";
} else{
    echo "<li><a href=login.php style=color:white; > Entrar</a></li>";
}

?>

</ul>