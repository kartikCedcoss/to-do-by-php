<?php
session_start();
header("location:index.php");
?>
<?php
for($i=0 ;$i<count($_SESSION['completed']);$i++){
    
    if(isset($_POST['delete'.$i])){
    echo $i;
        array_splice($_SESSION['completed'],$i,1);

        
    }
 }
    
for($e=0 ;$e<count($_SESSION['completed']);$e++){
   if(isset($_POST['edit'.$e])){
     $_SESSION['edit']=  $e ;
           echo $e;
          }  
     
    }

for($e=0; $e< count($_SESSION['completed']) ; $e++){
     if($e == $_SESSION['edit']){
       
         if(isset($_POST['update'])){
             
             array_splice($_SESSION['completed'],$_SESSION['edit']  ,1, $_POST['task']);
         }
     }
    }



  

    if (isset($_POST['check_remove']))
    {
        if (!isset($_SESSION['todo']))
        {
            $_SESSION['todo']=array();
        }
        for($c=0 ;$c<count($_SESSION['completed']);$c++)
        {
            if($_POST['check_remove'] == $c)
            {
                array_push($_SESSION['todo'], $_SESSION['completed'][$c]);
                array_splice($_SESSION['completed'], $c, 1);
            }  
        }
    }
?>