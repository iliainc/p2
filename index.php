<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CSCI E-15 | Project 2</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/carousel.css" rel="stylesheet">
  <?php require 'pwGen.php'; ?>

</head>

<body>

  <div class="navbar-wrapper">
  <div class="container">

    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project 2 - Password Generator</a>
        </div>
      </div>
    </nav>

  </div>
</div>

  <div class="pwGen">

    <div class="name">

      <h1>Password Generator</h1>

      <h3><?php echo($passwordResult); ?></h3>

    </div>

    <div class="password">
      <div class="row">
        <div class="col-center">
            <form action="index.php" method="get">

                Amount of Words: <input type="text" name="wordAmount"><br>
                <input type="checkbox" name="number" value="true"> Include Number?<br>
                <input type="checkbox" name="symbol" value="true"> Include Special Symbol?<br><br>

                <p><input class="btn btn-default" type="submit" value="Generate My Password!"></p>

            </form>
        </div>
      </div>
    </div>

    <a href="http://xkcd.com/936/">
				<img src='images/password_strength.png' alt='Password Generator'>
	</a>

  </div>

  <div class="footer">
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2016 Ilya Nossov</p>
  </div>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
