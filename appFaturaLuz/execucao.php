<?php


require_once 'model/ConsumidorResid.php';
require_once 'model/ConsumidorComer.php';
require_once 'model/ConsumidorIndu.php';
require_once '/home/omelby/fun/menuFun.php';
// require_once '/home/lab/fun/menuFun.php';  https://github.com/CelsoGasparin/montarMenu.git



$key = 1;
$consumidor = [];
$consumidor[$key] = addPropriedade();
$key++;

// $tipos = ['Residencial','Comercial','Industrial'];
// system('clear');
// print"+++Qual seu tipo de Propriedade?+++\n";
// arrayMenu(false,$tipos);
// while(true){
//     $opValue = readline();
//     $escolha = strtolower($opValue);
//     switch ($escolha) {
//         case 1:
//         case 'residencial':
//             $consumidor[1] = new Residencial();
//         break 2;
        
//         case 2:
//         case 'comercial':
//             $consumidor[1] = new Comercial();
//         break 2;

//         case 3:
//         case 'industrial':
//             $consumidor[1] = new Industrial();
//         break 2;

//         default:
            
//         break;
//     }

// }


while(true){
    system('clear');
    montarMenu(true,'Registrar Consumo','Mostrar Fatura','Adcionar Propriedade');
    $opValue = readline();
    switch ($opValue) {
        case 1:
            do{
                while(true){
                    $Hkey = 0;
                    system('clear');
                    montarMenu(true,"Em qual propriedade você quer registrar o consumo?");
                    foreach($consumidor as $chave => $cons) {
                        print "[ID]- ".$chave."\n";
                        switch($cons->getLimite()){
                            case 0:
                                print "[Tipo]- Residencial\n" ;
                            break;
                            
                            case 100:
                                print"[Tipo]- Comercial\n";
                            break;

                            case 500:
                                print"[Tipo]- Industrial\n";
                            break;
                        }
                        if($chave > $Hkey){
                            $Hkey = $chave;
                        }
                        print "--------------\n";
                             
                    }
                    
                    $opValue = readline();
                    if($opValue == 0){
                    break 3;
                    }
                    elseif($opValue <= $Hkey and $opValue > 0){
                        $Ckey = $opValue;
                        break;
                    }
                    
                }
                system('clear');
                $consumoVal = readline("Qual foi o seu consumo em Kwh de energia no mês?");
            }while(!is_numeric($consumoVal));
            $consumidor[$Ckey]->setConsumo($consumidor[$Ckey]->getConsumo()+$consumoVal);
        break;
            
        case 2:
            while($opValue != 0){
                system('clear');
                montarMenu(true);
                foreach($consumidor as $chave=>$cons){
                    print "[ID]- ".$chave."\n";
                        switch($cons->getLimite()){
                            case 0:
                                print "[Tipo]- Residencial\n" ;
                            break;
                            
                            case 100:
                                print"[Tipo]- Comercial\n";
                            break;

                            case 500:
                                print"[Tipo]- Industrial\n";
                            break;
                        }
                        print "[Fatura]- R$". round($consumidor[$chave]->getValorFatura(),2,PHP_ROUND_HALF_UP)
                        ."\n[Consumo de Energia]- ". $consumidor[$chave]->getConsumo()."Kwh";
                        print "\n--------------\n";        
                }
                $opValue = readline();
            }
        break;

        case 3:
            $consumidor[$key] = addPropriedade();
            $key++;
        break;
        
        case 0:
        break 2;
        default:
            print"ESCOLHA UMA DAS OPÇÕES";
            sleep(2);    
        break;
    }
}



function addPropriedade(){
    $tipos = ['Residencial','Comercial','Industrial'];
    system('clear');
    print"+++Qual seu tipo de Propriedade?+++\n";
    arrayMenu(false,$tipos);
    while(true){
        $opValue = readline();
        $escolha = strtolower($opValue);
        switch ($escolha) {
            case 1:
            case 'residencial':
                return new Residencial();
            break 2;
            
            case 2:
            case 'comercial':
                return new Comercial();
            break 2;
    
            case 3:
            case 'industrial':
                return new Industrial();
            break 2;
        }
    
    }
    
}

