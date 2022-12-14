<?php
  print_r($_GET);
  print_r($_POST);


  /*$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
  $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
  if (!empty($firstname) && !empty($lastname)) {
     echo $firstname;
     echo $lastname;
  } else {
     echo "Missing required date.";
  }*/


  if (isset($_GET['first']) && isset($_GET['last'])) {

    $firstname = $_GET['first'];
    $latname = $_GET['last'];
    if (!empty($firstname) && !empty($lastname)) {
      echo htmlspercialchars($firstname);
      echo htmlspercialchars($lastname);
    } else {
      echo "Missing required data.";
    }

  } else {
    echo "Not set!";
  }



?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Get/Post methods</title>
	</head>
	<body>

    <h1>WEB get POST/fORM PROCESS</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get"">
      <label for="first"> First Name: </label>
      <input type="text" id="first" name="first" autocomplete="off">
      <label for="last"> Last Name: </label>
      <input type="text" id="last" name="last" autocomplete="off">
      <div class="button">
        <button type="submit">Submit</button>
        <button type="submit" formmethod="post">Submit using POST</button>
        <button type="reset">Reset</button>
      </div>
    </form>

    
	</body>
	</html>
