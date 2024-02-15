<?php 
if (isset($_POST["cadastrado"])) {
    echo "Agência: {$_POST["agencia"]}" . "<br/>";
    echo "Nome: {$_POST["nome"]}" . "<br/>";
    echo "Cidade: {$_POST["cidade"]}" . "<br/>";
    echo "Estado: {$_POST["estado"]}" . "<br/>";
};
?>