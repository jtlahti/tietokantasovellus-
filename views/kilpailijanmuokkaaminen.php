<html>
<head>
<title>Muokkaa tulosta</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
        </nav>
       
  <h1>Suunnistustulospalvelu</h1>
  <h2>Muokkaa tulosta</h2>

 <form action="updatekilpailija.php" method="POST">

<p>Sarja: <br>
<select name="sarja">
  <option value="1">H21</option>  
</select> 

<p>Nimi: <br>
<input type="text" name="nimi" value="<?php echo $data->kilpailijanmuokkaaminen->nimi; ?>"></p>
<p>Seura: <br>
<input type="text" name="seura" value="<?php echo $data->kilpailijanmuokkaaminen->seura; ?>"></p>
<p>Emit: <br>
<input type="text" name="emit" value="<?php echo $data->kilpailijanmuokkaaminen->emit; ?>"></p>
<p>Lopputulos: <br>
<input type="text" name="tulos" value="<?php echo $data->kilpailijanmuokkaaminen->loppuaika; ?>"></p>

<input type="submit" value="Tallenna">
<input type="submit" value="Poista">
</body>
</html>
