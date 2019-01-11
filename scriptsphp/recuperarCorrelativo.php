<?php
$accion=$_POST['id'];
if($accion==1){
    include "../config/conexion.php";
    $resultc = $conexion->query("select id_tipo as idr from ttipo_activo order by id_tipo");
                         if ($resultc) {
    
                           while ($filac = $resultc->fetch_object()) {
                             $temp=$filac->idr;
                            
                              }
                         }  
                          
                         if($temp<10){
                            $codigo=sprintf("3%04s",$temp+1);
                            echo $codigo;
                         }else if($temp>=10&&$temp<=99){
                            $codigo=sprintf("3%04s",$temp+1); 
                            echo $codigo;
                         }else if($temp>99&&$temp<=999){
                            $codigo=sprintf("3%04s",$temp+1); 
                            echo $codigo;
                         }
                          
                          
    
}
if($accion==2){
  include "../config/conexion.php";
  $resultc = $conexion->query("select id_institucion as id from tinstitucion order by id_institucion");
                       if ($resultc) {
  
                         while ($filac = $resultc->fetch_object()) {
                           $temp=$filac->id;
                          
                            }
                       }   
                        
                       if($temp<10){
                          $codigo=sprintf("1%04s",$temp+1);
                          echo $codigo;
                       }else if($temp>=10&&$temp<=99){
                          $codigo=sprintf("1%04s",$temp+1); 
                          echo $codigo;
                       }else if($temp>99&&$temp<=999){
                          $codigo=sprintf("1%04s",$temp+1); 
                          echo $codigo;
                       }
                        
                        
  
}
if($accion==3){
  include "../config/conexion.php";
$resultc = $conexion->query("select id_departamento as id from tdepartamento order by id_departamento");
                     if ($resultc) {

                       while ($filac = $resultc->fetch_object()) {
                         $temp=$filac->id;
                        
                          }
                     }      
                       if($temp<10){
                        $codigo=sprintf("2%04s",$temp+1); 
                          echo $codigo;
                       }else if($temp>=10&&$temp<=99){
                        $codigo=sprintf("2%04s",$temp+1); 
                          echo $codigo;
                       }else if($temp>99&&$temp<=999){
                        $codigo=sprintf("2%04s",$temp+1); 
                          echo $codigo;
                       }
                        
                        
  
}
if($accion==4){
  include "../config/conexion.php";
$resultc = $conexion->query("select id_clasificaion as id from tclasificacion order by id_clasificaion");
                     if ($resultc) {

                       while ($filac = $resultc->fetch_object()) {
                         $temp=$filac->id;
                        
                          }
                     }      
                       if($temp<10){
                        $codigo=sprintf("4%04s",$temp+1); 
                          echo $codigo;
                       }else if($temp>=10&&$temp<=99){
                        $codigo=sprintf("4%04s",$temp+1); 
                          echo $codigo;
                       }else if($temp>99&&$temp<=999){
                        $codigo=sprintf("4%04s",$temp+1); 
                          echo $codigo;
                       }
                        
                        
  
}


?>