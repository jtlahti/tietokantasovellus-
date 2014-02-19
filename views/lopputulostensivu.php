<html>
<head>
<title>Lopputulokset</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
        <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu">Etusivu</a>
        <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/kilpailijanmuokkaus.php?id=<?php echo $data->sarja; ?>">Muokkaa lopputuloksia</a>
        </nav>
       
  <h1>Suunnistustulospalvelu</h1>
  <h2>Lopputulokset</h2>
  <table class="table table-striped">
      <thead>
        <tr>
          <th>Nimi</th>
          <th>Seura</th>
          <th>Lopputulos</th>      
        </tr>
      </thead>
      
       <tbody>
        <?php foreach($data->lista as $asia): ?>
       <tr>     
       <td><?php echo $asia->nimi; ?></td>
       <td><?php echo $asia->seura; ?></td>
       <td><?php echo $asia->loppuaika; ?></td>
       </tr>
       <?php endforeach; ?>        
        </tbody>
       </table>

</body>
</html>

