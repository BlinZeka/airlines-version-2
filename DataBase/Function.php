 <?php

 if(function_exists($_GET['f'])) {
  $_GET['f']();
 }
 else{
  echo "Nuk eksiston";
 }



function getTask()
{ 
  require 'db_connect.php';

    $query = pg_query($db, "SELECT * FROM  tasks  ;");
    $result=pg_fetch_all($query);
     
    print_r(json_encode($result));
}


function addTask()
{ 
   require 'db_connect.php';   

    $TaskName = pg_escape_string($_GET['taskname']);     
    $Status = pg_escape_string($_GET['status']);   
    $Date = date("Y/m/d h:i:sa");        
    
    $query = pg_query($db, " INSERT into tasks(TaskName,Status,Date_Created) values('$TaskName','$Status','$Date');");  

     print_r($Status);               
}


 function deleteTask()
 {
    require 'db_connect.php';
     
      $id=pg_escape_string($_GET['id']);      
      $result = pg_query($db, "DELETE FROM tasks WHERE id_task =$id ");
        
      print_r("Deleted");
 }


function editTask()
{
  require 'db_connect.php';

    $id_task= pg_escape_string($_GET['id']);
    $TaskName = pg_escape_string($_GET['taskname']);
    if(isset($_GET['details']))
    {
      $Details = pg_escape_string($_GET['details']);
    }
    else 
    {
      $Details = "";
    }
    
    $Status = pg_escape_string($_GET['status']);
     
    $result1 = pg_query($db,"UPDATE tasks SET taskname='$TaskName',details='$Details', status='$Status' WHERE id_task=$id_task");
    $query = pg_query($db,"SELECT * from tasks WHERE id_task=$id_task");

    $result=pg_fetch_all($query);
    print_r(json_encode($result));
}


function getObj()
{
  require 'db_connect.php';

    $id= pg_escape_string($_GET['id_task']);
    $query = pg_query($db, "SELECT * FROM  tasks  WHERE id_task=$id ;");
    $result=pg_fetch_all($query);
    
    print_r(json_encode($result));
}

function getUser()
{
  require 'db_connect.php';
    $username= pg_escape_string($_GET['userN']);
    $password = pg_escape_string($_GET['passW']);

    //Username should be unique otherwase this logic dose not work
    $GetSaltQuery=pg_query($db,"SELECT salt_password FROM  users  WHERE username='$username' ;");

    $Salt=pg_fetch_row($GetSaltQuery);

    $hash_pass=hash('md5',"$password"."$Salt[0]");
    $getUserData=pg_query($db,"SELECT * FROM  users  WHERE username='$username' and hash_password='$hash_pass';");

    $result=pg_fetch_all($getUserData);
    



   print_r(json_encode($result));

  
}

function addUser()
{ 
   require 'db_connect.php';   

    $Username = pg_escape_string($_GET['username']);     
    $Password = pg_escape_string($_GET['password']); 
    $Role_User='User';

    $salt_random=generateRandomString();//nr i rastit
    $hash_pass=hash('md5',"$Password"."$salt_random");//hash metoda  

       
    
   $query = pg_query($db, "INSERT into Users(Username,Salt_Password,Hash_Password,Role_User) values ('$Username','$salt_random','$hash_pass','User');");  

    print_r($hash_pass); 

}


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) 
    {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}

function createUser()
{

}
?>