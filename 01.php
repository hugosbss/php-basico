<?php

    //1
    $number = '1';
    echo $number;

    //2
    $number1 = '2' * 10;
    echo "<BR><HR> $number1";

    //3
    $text = 'var text';
    echo "<BR><HR> $text";

    //4
    $text1 = 'one text';
    $text2 = 'second text';
    echo "<BR><HR> $text1 and $text2";

    //5
    $textOther = "One text";
    $textOther1 = "Second text";
    echo "<BR><HR> $textOther and $textOther1";

    //6
    $exemple = "Using apostrophes, $textOther";
    $exemple1 = 'Using duple quotes $textOther';
    echo "<BR> One exemple $exemple and Second exemple $exemple1<HR>";

    //7
    $verify = true;
    $false = false;
        if ($verify) {
            echo "The var $verify is verify";
        }else {
            echo "The var $verify is false";
        }
        if ($false) {
            echo "The var $false is verify";
        }else {
            echo "The var $false is false";
        };

    //8
    $point = 3.14;
    echo "the value var is: $point";

    //9
    $list [] = "Value first";
    echo "<pre>";
    var_dump($list);

    //10
    $var1 = null;
    echo "<BR><HR> The value var is: $var1";

    //11 stroupper($) imprime o texto para letra maiusculas
    $text_origin = "stroupper($) imprime o texto para letra maiusculas";
    $text_big = strtoupper($text_origin);  
    echo "Texto em maiúsculas:", $text_big;

    //12 strtolower($) imprime o texto para letras minusculas
    $text_origin1 = "strtolower($) imprime o texto para letras minusculas";
    $text_min = strtolower($text_origin1);  
    echo "Texto em maiúsculas:", $text_min;

    //13
    
?>