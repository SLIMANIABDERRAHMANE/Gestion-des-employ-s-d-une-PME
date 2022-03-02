<?php
include 'connect.php';

$matricule=$_GET['indexID'];
$sql="SELECT * FROM `employe` WHERE MATRICULE='$matricule'";
$result=mysqli_query($con,$sql);
$rows=mysqli_fetch_assoc($result);

    $matricule=$rows['MATRICULE'];
      $nom=$rows['NOM'];
      $prenom=$rows['PRENOM'];
      $date=$rows['DATE'];
      $departement=$rows['DEPARTEMENT'];
      $salaire=$rows['SALAIRE'];
      $fonction=$rows['FONCTION'];
      $photo=$rows['PHOTO'];

if(isset($_POST['submit'])){

  $matricule=$_GET['indexID'];

  $matricule=$_POST['matricule'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $date=$_POST['date'];
  $departement=$_POST['departement'];
  $salaire=$_POST['salaire'];
  $fonction=$_POST['fonction'];
  $photo=$_POST['photo'];
  

  $sql="UPDATE `employe` SET `MATRICULE`='$matricule',`NOM`='$nom',`PRENOM`='$prenom',`DATE`='$date',`DEPARTEMENT`='$departement',`SALAIRE`='$salaire',`FONCTION`='$fonction',`PHOTO`='$photo' WHERE MATRICULE='$matricule'";

  $result=mysqli_query($con,$sql);

  if ($result){
    // echo 'the ediit data is Working';

    header('location:display.php');

  } else{

    die(mysqli_error($con));
  }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud!</title>

  

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->

</head>

<body>
<div class="container">

<form method="post" action="">
  <div class="mb-3">
    <label  class="form-label">MATRICULE</label>
    <input type="text" class="form-control" name="matricule" value="<?php echo $matricule;?>">
    
    <label  class="form-label">NOM</label>
    <input type="text" class="form-control" name="nom" value="<?php echo $nom;?>">

    <label  class="form-label">PRENOM</label>
    <input type="text" class="form-control" name="prenom" value="<?php echo $prenom;?>">

    <label  class="form-label">DATE</label>
    <input type="date" class="form-control" name="date" value="<?php echo $date;?>">

    <label  class="form-label">DEPARTEMENT</label>
    <input type="text" class="form-control" name="departement" value="<?php echo $departement;?>">

    <label  class="form-label">SALAIRE</label>
    <input type="number" class="form-control" name="salaire" value="<?php echo $salaire;?>">

    <label  class="form-label">FONCTION</label>
    <input type="text" class="form-control" name="fonction" value="<?php echo $fonction;?>">

    <label  class="form-label">PHOTO</label>
    <input type="file" class="form-control" name="photo" value="<?php echo $photo;?>">
  </div>
    <button type="submit" name="submit" class="btn btn-info">
      UP-DATE
        </button>
</form>

</div>






















</body>














</html>