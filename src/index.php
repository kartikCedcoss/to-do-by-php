<?php 
session_start();
//session_destroy();
?>


<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body><form action='todo.php' method="POST"  >
        <div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <p>
                <input id="new-task" type="text" name='task'>
                <input type='submit' name='add'value='add' ><input type='submit' name='update' value='Update'>
            </p>
            </form>
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
                <?php
                $id=0;
            foreach($_SESSION['todo'] as  $val)
    { 
        echo "<form action='todo.php' method='POST'><table><tr><td><input type='checkbox' name='check' value=".$id." onchange='form.submit()'></td><td>".$val."</t></td><td> <input type='submit'  name='edit".$id."' value='Edit' ></td><td> <input type='submit' name='delete".$id."' id='delete' value='Delete' ></td></tr></form>";
        $id++;
    } 
       echo "</table>";
     ?>

            </ul>
    
            <h3>Completed</h3>
            <?php
               $id=0;
            foreach($_SESSION['completed'] as  $val)
    { 
        echo "<form action='complete.php' method='POST'><li><input type='hidden' name='check_remove' value=".$id."> <input type='checkbox' name='check' value=".$id." onchange='form.submit()'>".$val."</t> <input type='submit'  name='edit".$id."' value='Edit' > <input type='submit' name='delete".$id."' id='delete' value='Delete' ></li></form>";
        $id++;
     } 
       
     ?>
        </div>
    </body>
</html>