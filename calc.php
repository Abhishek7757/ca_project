<?php
$response=array("error"=>false) ;  
class Calc{
    private $bill ; 
    function __construct(){
        $this->bill = 0  ; 
    }
    function calculate($unit){
        /**
         * 1. first 50 *9
         * 2 second 50 *12 ; 
         * after 100 unit *15
         */
        if($unit<=50){
            $this->bill = $unit*9 ; 
        }else if($unit>50 && $unit<=100){

           $temp = $unit-50 ;
           $t1 = 50 *9  ; 
           $t2 = $temp *12 ; 
           $this->bill = $t1 + $t2 ; 
        }else if($unit>100){
            $temp = $unit-100 ; 
            $t1 = 50*9 ; 
            $t2 = 50*12 ; 
            $t3 = $temp *15 ;
            $this->bill  = $t1 +$t2+$t3;  
        }
        return $this->bill ; 
    }
    
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    @$unit = $_POST['unit'] ; 
    if(empty($unit)){
        $response['error'] = true ; 
        $response['msg'] = "Please enter unit" ; 
        echo json_encode($response) ; 
        return ; 
    }

    if(is_numeric($unit)==false){
        $response['error'] = true ; 
        $response['msg'] = "Unit should be in numeric format" ; 
        echo json_encode($response) ; 
        return ; 
    }
    if($unit<0){
        $response['error'] = true ; 
        $response['msg'] = "Unit can't be negative" ; 
        echo json_encode($response) ; 
        return ;  
    }
    $obj = new Calc() ;
    $bill =$obj->calculate($unit);
     $response['error'] = false ; 
     $response['msg'] = "Your electricity bill is {$bill}" ; 
     echo json_encode($response) ; 
     return ; 
}else{

}
?>