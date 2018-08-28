<?php

class Data{
    
    
    public function DateToBr($dataamericana){
        //2011-09-03 exemplo de data americana
        
     $d = explode('-', $dataamericana);
     $dok = $d[2].'/'.$d[1].'/'.$d[0];
     
     return $dok;
        
    }
    
    public function DateToEua($databrasil){
        //03/09/2011 exemplo de data brasileira
        
        $d = explode('/', $databrasil);
        $dok = $d[2].'-'.$d[1].'-'.$d[0];
        
        return $dok;
        
    }
    
    
}


$newdata = new Data();
echo 'Para Brasileira: '.$newdata->DateToBr('2011-09-03');
echo '<hr/>';
echo 'Para Americana: '.$newdata->DateToEua('03/09/2011');



?>

