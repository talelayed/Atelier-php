<?php
if(!isset($_POST['name']) || !isset($_POST['surname']) || !isset($_POST['nbre']) || !isset($_POST['address']) || !isset($_POST['type']) || !isset($_FILES['cin'])) {
    header('location:./resa.html');
    return;
}
$dossier= "uploads/";
if(is_uploaded_file($_FILES['cin']['tmp_name']))
{  $fileName = $_FILES['cin']['name'];

   if(move_uploaded_file( $_FILES['cin']['tmp_name'] ,$dossier.$fileName))
     {
      echo "<div class='alert alert-secondary' role='alert'>SUCCESS</div>" ;
      }

  else{
        echo "<div class='alert alert-danger' role='alert'>ERROR</div>";
      };
  }
else{
    echo "<div class='alert alert-danger' role='alert'>FILE NOT UPLOADED</div>";
    };
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<table class="table table-dark table-hover">
  <thead>
    <tr class="table-primary">
    <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Nbre sandwitchs</th>
      <th scope="col">address</th>
      <th scope="col">Type</th>
      <th scope="col">ingredients</th>
      <th>total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td><?php echo rand(0,9999) ?></td>
      <td><?= strip_tags($_POST['name'])?></td>
      <td><?= strip_tags($_POST['surname'])?></td>
      <td><?php $qte = $_POST['nbre'];
      if (intval($qte)>=20) 
        {
        echo "<script>alert('impossible')</script>";
        header('location:./resa.html');}
      echo strip_tags($_POST['nbre'])?></td>
      <td><?= strip_tags($_POST['address'])?></td>
      <td><?= strip_tags($_POST['type'])?></td>
      <td><?php if (isset($_POST['harissa'])) echo strip_tags($_POST['harissa']).'/' ?>
      <?php if (isset($_POST['salade'])) echo strip_tags($_POST['salade']).'/'?>
      <?php if (isset($_POST['mayonnaise'])) echo strip_tags($_POST['mayonnaise']).'/'?></td>
      <?php $total = intval($qte) * 4;
      if (intval($qte)>=10) $total-=$total*0.1;       
      ?>
      <td><?php echo $total ?></td>
    </tr>
    <tr>
  </tbody>
</table>
</body>
</html>