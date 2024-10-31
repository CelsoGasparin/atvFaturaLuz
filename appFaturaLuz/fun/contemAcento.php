<?php





function contemAcento($string){
    $qtdAc = 0;
    $iLen = strlen($string);
    $acentos = [
        'á','à','ã','â','Á','À','Ã','Â',
        'é','è','ẽ','ê','É','È','Ẽ','Ê',
        'í','ì','ĩ','î','Í','Ì','Ĩ','Î',
        'ó','ò','õ','ô','Ó','Ò','Õ','Ô',
        'ú','ù','ũ','û','Ú','Ù','Ũ','Û'
    ];
    // print_r($acentos);
    for($i=0; $i < $iLen; $i++){ 
        $stringArray[] = substr($string,$i,2);
    }
    // print_r($stringArray);
    foreach($stringArray as $key => $stringV){
        foreach($acentos as $acento){
            if($stringV == $acento){
                $qtdAc++;
            }
        }
    }
    return $qtdAc;
}



