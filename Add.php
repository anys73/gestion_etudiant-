
<form method="post" action="Add.php">
    <h1>inscription</h1>
    <h3>nom:</h3>
    <input type="text" name="nom">
    <h3>prenom:</h3>
    <input type="text" name="prenom">
    <h3>code Apogee:</h3>
    <input type="text" name="code">
    <h3>date de naissance:</h3>
    <input type="date" name="date">
    <h3>Ville:</h3>
    <input type="text" name="ville">
    <h3>Pays:</h3>
    <input type="text" name="pays">
    <h3>filiere:</h3>
    <select name="filiere">
    <option value="">filiere </option>
        <option value="gi">gi</option>
        <option value="giee">giee</option>
        <option value="gim">gim</option>
    </select>
    <h3>Niveau scolaire :</h3>
    <select name="niveau" >
    <option value="">Niveau scolaire </option>
        <option value="master">master</option>
        <option value="Licence">Licence</option>
        <option value="DUT">DUT</option>
    </select>
    <input type="submit" value="envoyer" name="send">
    </form>
    <?php
    $conn=mysqli_connect("localhost","root","","gestion_etudiant");

    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $code=$_POST["code"];
    $date=$_POST["date"];
    $ville=$_POST["ville"];
    $pays=$_POST["pays"];
    $filiere=$_POST["filiere"];
    $niveau=$_POST["niveau"];

    $sql="insert into etudiant (nom,prenom,code,dateNaiss,ville,pays,filiere,niveau) values ('$nom','$prenom','$code','$date','$ville','$pays','$filiere','$niveau') ";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "insertion reussie";
    }else{
        echo "insertion echec";
    }
?>
    