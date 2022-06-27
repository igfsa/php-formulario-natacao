<?php
    
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

//    print_r($categorias);
//    echo "</br>";


//    for ($i = 0; $i < count($categorias); $i++){
//        echo $i, "</br>";
//    }

//    $nome = "Ícaro";
//    $idade = 18;

//    var_dump($nome);
//    var_dump($idade);

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if(empty($nome) || empty($idade)){
        echo("Os campos não podem estar vazios");
        return;
    }

    if(strlen($nome) < 3){
        echo "O nome deve conter mais de três caracteres";
    }

    if(strlen($nome) > 50){
        echo "O nome deve conter menos de cinquenta caracteres";
    }

    if(!is_numeric($idade)){
        echo "entre com um número em idade";
    }

    if ($idade >= 0 && $idade <= 12){
        for ($i = 0; $i < count($categorias); $i++){
            if ($categorias[$i] == 'infantil'){
                echo "categoria: ", $categorias[$i], "</br>";
            }
        }
    }
    if ($idade >= 13 && $idade <= 18){
        for ($i = 0; $i < count($categorias); $i++){
            if ($categorias[$i] == 'adolescente'){
                echo "categoria: ", $categorias[$i], "</br>";
            }
        }
    }
    if ($idade >= 19 ){
        for ($i = 0; $i < count($categorias); $i++){
            if ($categorias[$i] == 'adulto'){
                echo "categoria: ", $categorias[$i], "</br>";
            }
        }
    }
    