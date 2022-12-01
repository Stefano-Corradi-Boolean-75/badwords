<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>

  <title>badwords</title>
</head>
<body>

<div class="container my-5">

<form action="./atterraggio.php" method="GET">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Parola d acensurare</label>
  <input type="text" name="badword" class="form-control" id="exampleFormControlInput1" placeholder="Scrivi parola">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Testo</label>
  <textarea class="form-control" name="paragraph" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <button class="btn btn-primary" type="submit">Invia</button>
</div>
</form>

</div>
  
</body>
</html>