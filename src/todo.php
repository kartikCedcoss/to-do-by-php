<?php
session_start() ;
header("location:index.php");
?>

<?php

global $a;


if(!isset($_SESSION['edit'])){

    $_SESSION['edit']=array();
}
 if(!isset($_SESSION['todo']))
 {
   
    $_SESSION['todo']=array();
    
}

if(isset($_POST['add'])){
  $task = $_POST['task'];
  array_push($_SESSION['todo'],$task);

}




for($i=0 ;$i<count($_SESSION['todo']);$i++){
    
    if(isset($_POST['delete'.$i])){
    echo $i;
        array_splice($_SESSION['todo'],$i,1);

        
    }
 }
 






    

    
for($e=0 ;$e<count($_SESSION['todo']);$e++){
   if(isset($_POST['edit'.$e])){
     $_SESSION['edit']=  $e ;
           echo $e;
          }  
     
    }



for($e=0; $e< count($_SESSION['todo']) ; $e++){
     if($e == $_SESSION['edit']){
       
         if(isset($_POST['update'])){
             
             array_splice($_SESSION['todo'],$_SESSION['edit']  ,1, $_POST['task']);
         }
     }
    }

if (isset($_POST['check']))
{
    if (!isset($_SESSION['completed']))
    {
        $_SESSION['completed']=array();
    }
    for($c=0 ;$c<count($_SESSION['todo']);$c++)
    {
        if($_POST['check'] == $c)
        {
            array_push($_SESSION['completed'] , $_SESSION['todo'][$c]);
            array_splice($_SESSION['todo'], $c, 1);
        }  
    }
}

?>