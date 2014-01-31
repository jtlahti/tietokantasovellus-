<HTML>
<head>
<title>Kirjautuminen kilpailijan muokkaukseen</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation"> 
<a href="http://jtlahti.users.cs.helsinki.fi/lopputulokset.html">Takaisin</a>
</nav>

<?php if (!empty($data->virhe)): ?>
  <div class="alert alert-danger"><?php echo $data->virhe; ?></div>
<?php endif; ?>

<h2>Kirjautuminen</h2>
<form action="dologinkilpailija.php" method="POST">
Käyttäjänimi: <input type="text" name="username" />
Salasana: <input type="password" name="password" />
<button type="submit">Kirjaudu</button>
</form>
</body>
</HTML>