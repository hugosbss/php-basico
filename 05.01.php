<?php

    $num01 = 9;
    $num02 = 'Texto qualquer';
        
    echo "NUM01 é $num01<BR>";
    echo "NUM02 é $num02";

    //Exemplo de consulta sql no php
    $sql = "
        SELECT *
        FROM produtos p
        WHERE p;nome_produto LIKE '%$pesquisa%'<BR>
    ";
    echo $sql;

    //Exemplo retorno na tela    
    //$resultado = mysql_query($sql);


    $search = 'Ferrari';
    $sql2 = "
        SELECT *
        FROM carro p
        WHERE p.modelo LIKE '%$search%'
            AND p.marca LIKE '$search'<BR>
    ";
    echo $sql2;


    //criar um array
    $list [] = "Value first";
    $list [] = "Second value";
    $list [] = "third value";

    echo "<pre>";
    var_dump($list, true);

    $list [87] = "Other value";
    $list [2] = "Other value";
    $list [] = "Other value";
    $list ['indice text'] = "Other value";

    echo "<BR><Hr><pre>";
    var_dump($list);

    //Array dentro de outro array
    $list = array(
        "0"         => 'teste',
        "ind_text"  => 'segundo',
        1           => 'terceiro',
        2           => array (
            "1" => "Oxi",
            "2" => "😂"
        )
    );

    echo "<BR><Hr>The value what in indice ind_text is " . $list['ind_text'];
    var_dump($list);

    //criando array com numero inicial em 10

    $list [10] = "Other value";
    echo "<BR><Hr><pre>";
    var_dump($list);
?>