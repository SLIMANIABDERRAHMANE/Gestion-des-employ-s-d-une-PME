<?php
include 'connect.php';
 


?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body >

   


<div class="form-floating m-3">

<!-- <label for="search">Rechercher</label> -->
<input type="text" name="search" id="search" placeholder="Rechercher" >
  
  
 </div>

<!-- <button type="submit"  name="search">RECHERCHE</button>  -->


<table class="table table-info table-striped" id="mytable"  >

<thead>
    <tr>
      <th >MATRICULE</th>
      <th >NOM</th>
      <th >PRENOM</th>
      <th >DATE</th>
      <th >DEPARTEMENT</th>
      <th >SALAIRE</th>
      <th >FONCTION</th>
      <th >PHOTO</th>
      <th >ACTION</th>
                          

  </thead>
  
  <tbody>
  <?php
  $sql="Select * from `employe`";
    $result=mysqli_query($con,$sql);
    
    

    
       
        
        while($rows=mysqli_fetch_assoc($result)){

    $matricule=$rows['MATRICULE'];

            $matricule=$rows['MATRICULE'];
            $nom=$rows['NOM'];
            $prenom=$rows['PRENOM'];
            $date=$rows['DATE'];
            $departement=$rows['DEPARTEMENT'];
            $salaire=$rows['SALAIRE'];
            $fonction=$rows['FONCTION'];
            $photo=$rows['PHOTO'];

            echo' <tr>
            
      <td  >'.$matricule.'</td>
      <td>'.$nom.'</td>
      <td>'.$prenom.'</td>
      <td>'.$date.'</td>
      <td>'.$departement.'</td>
      <td>'.$salaire.'</td>
      <td>'.$fonction.'</td>
      <td>'.$photo.'</td>

  
      
    <td>  <button><a href="edit.php?indexID='.$matricule.'">MODIFIER</a></button>
      <button><a href="delete.php?indexID='.$matricule.'">SUPPRIMER</a></button>        </td>
  
                </tr>';

        } 
    

    ?>
  



    
  </tbody>
</table>
      

<div class="text-center">
      <button  class="btn btn-success btn-lg"  ><a href="user.php" class="text-decoration-none">ADD EMPLOYE</a></button>
    </div>

  <script type="text/javascript">

$(document).ready(function(){                                   
    $("#search").on("keyup",function(){
var value = $(this).val().toLowerCase();

    $("tbody tr").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1  )
    });
    
   } );

});

   </script>
  
 



  
</body>

</html>