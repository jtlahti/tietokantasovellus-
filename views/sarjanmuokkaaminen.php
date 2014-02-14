<html>
<head>
<title>Sarjan uudelleenimeäminen</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
</nav>
       
  <h1>Suunnistustulospalvelu</h1>
  <h2>Sarjan uudelleennimeäminen</h2>
  
  <form action="updatesarja.php" method="POST">

  <input type="hidden" name="id" value="<?php echo $data->sarjanmuokkaaminen->id; ?>"/>

<p>Kilpailu: <br>
<select name="kilpailu">
  <option value="1">Testikilpailu</option>  
</select> 
  
<p>Nimi: <br>
<input type="text" name="nimi" value="<?php echo $data->sarjanmuokkaaminen->nimi; ?>"></p>
<input type="submit" name="tallenna" value="Tallenna">
<input type="submit" name="poista" value="Poista sarja">
</form>
</body>
</html>