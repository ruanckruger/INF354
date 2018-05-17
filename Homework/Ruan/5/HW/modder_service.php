<?php
 ini_set("soap.wsdl_cache_enabled", "0");

 class Server{
     protected $class_name = '';

     public function __construct($class_name){
         $this->class_name = $class_name;
     }
     public function AuthHeader($Header){

     }

     public function __call($method_name, $parameters)
     {
        if(!method_exists($this->class_name, $method_name )) 
            return 'Method '.$method_name.' not found'; // methot exist check
        return call_user_func_array(array($this->class_name, $method_name ), $parameters); //call method
     }
 }


 class Modder {
     public function TwoNumbersMod ($parameters)
     {
        $x = $parameters->x;
        $x = $parameters->y;
        
        return modResponse($x % $y);
     }
     public function modResponse($response){
         return ["Result" => $response];
     }
 }

 class in {

 }

 $Service = new Server('Modder');
 $classmap=[
     'in' => 'in'
 ];
 $server = new SOAPServer('./Modder.wsdl', array(
     'soap_version' => SOAP_1_2,
     'style' => SOAP_RPC,
     'use' => SOAP_LITERAL,
     'classmap'=>$classmap
 ));
 $server->setObject($Service);
 $server->handle();
?>