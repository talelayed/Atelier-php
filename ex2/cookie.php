<?php 

if (isset($_POST['degree']) && !isset($_COOKIE['degree'])) {
	setcookie('degree',$_POST['degree'],time()+60*2,'/');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <link rel="stylesheet" href="../ex1/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        if(isset($_POST['degree'])) {
			if (!isset($_COOKIE['degree'])) {
    ?>
    <div class="alert alert-secondary" role="alert">
        Voted!
     </div>
	<?php
			} else {
	?>        
				<div class="alert alert-danger" role="alert">
                    Already voted
                </div>
    <?php
			}
        }
    ?>
<main>
        <form action="cookie.php" method="post">
            <form>
                <h3>Rate PHP</h3>
                <div class="mb-3 form-check">
                  <input name="degree" value="bon" type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Bon</label>
                </div>
                <div class="mb-3 form-check">
                    <input name="degree" value="moyen" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Moyen</label>
                  </div>
                  <div class="mb-3 form-check">
                    <input name="degree" value="mauvais" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Mauvais</label>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </form>
    </main>
</body>
</html>