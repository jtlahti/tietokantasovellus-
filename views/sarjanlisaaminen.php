<html>
<head>
<title>Lisää sarja</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
        
        </nav>
       
  <h1>Suunnistustulospalvelu</h1>
  <h2>Lisää sarja</h2>

  
<form action="lisaasarja.php" method="POST">
  
<p>Kilpailu: <br>
<select name="kilpailu">
  <option value="1">Testikilpailu</option>  
</select> 
      
<p>Nimi: <br>
<input type="text" name="nimi"></p>
<input type="submit" value="Lisää sarja">
</form>
</body>
</html>