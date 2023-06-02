<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">


</head>
<body>
    <form method="post" action="#">
    <h1>Connectez-vous</h1>
    <h3>identifion:</h3>
    <input type="text" name="user">
    <h3>mot de passe:</h3>
    <input type="password" name="code">
    <input type="submit" value="envoyer" name="send">
    </form>
    <?php
    $user=$_POST["user"];
    $code=$_POST["code"];

    $conn=mysqli_connect("localhost","root","","gestion_etudiant");
    $sql="select * from admin where user='$user' and PASSWORD='$code'";
    if($data=mysqli_query($conn,$sql)){
        $admin=$data->num_rows;
        if($admin>0){
            header("Location: dachbord.php");
        }else{
            echo "<p style='color:red'>erreur d'identifion</p>";
        }
    }
    ?>
</body>
</html>