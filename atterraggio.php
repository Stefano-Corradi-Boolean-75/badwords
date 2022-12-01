<?php 

//var_dump($_GET);

/*
// SOLUZIONE ESTESA
// se è stato settato il parametro paragraph $paragraph = $_GET['paragraph'];
if(isset($_GET['paragraph'])){
  $paragraph = $_GET['paragraph'];
} else {
  // altrimenti stringa vuota
  $paragraph = '';
}


// stesso discorso per badword
if(isset($_GET['badword'])){
  $badword = $_GET['badword'];
} else {
  $badword = '';
}

*/

// SOLUZIONE COMPATTA
// $paragraph assume il valore $_GET['paragraph'] solo se esiste, atrimenti stringa vuota
$paragraph = $_GET['paragraph'] ?? '';
$badword = $_GET['badword'] ?? '';

//var_dump($badword);
//var_dump($paragraph);

if(isset($_GET['badword'])){
  $paragrafo_corretto = str_replace($_GET['badword'], '***' , $_GET['paragraph']);
} else {
  $paragrafo_corretto = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>

  <title>atterraggio</title>
</head>
<body>

<div class="container my-5">
  <h1>Badwords</h1>
  <h2>Paragrafo originale</h2>
  <p><?php echo $paragraph ?></p>
  <h3>Questo paragrafo è lungo <?php echo strlen($paragraph) ?></h3>
  <h2>Paragrafo corretto</h2>
  <p><?php echo $paragrafo_corretto ?></p>
  <h3>Questo paragrafo è lungo <?php echo strlen($paragrafo_corretto) ?></h3>
</div>

  
</body>
</html>