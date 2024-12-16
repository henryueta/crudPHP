<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="libs/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>

<?php
echo "<div id=menu>";
echo "<input type=text name=pesquisar id=pesquisar><input type=button value=pesquisar onclick=pesquisar()>";
echo "</div>";
?>
<div id="retorno">



</div>    


<script>

function pesquisar(){

let texto = document.querySelector('#pesquisar').value;

$.ajax({
    type:"get",
    url:"pesquisar.act.php?texto="+texto,
    data: texto = texto,
    success: function (response){
        $('#retorno').html(response);
    }
});


}
   
</script>



</body>
</html>