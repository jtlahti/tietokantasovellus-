<html>
    <head>
        <title>Tulosten muokkaussivu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/">Etusivu</a>
            <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/logoutkilpailija.php">Kirjaudu ulos</a>
        </nav>
        
        <?php if (!empty($_SESSION['ilmoitus'])): ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['ilmoitus']; ?>
            </div>

            <?php
            unset($_SESSION['ilmoitus']);
        endif;
        ?>
        
        <h1>Suunnistustulospalvelu</h1>
        <h2>Lopputulokset</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sijoitus</th>   
                    <th>Nimi</th>
                    <th>Seura</th>
                    <th>Lopputulos</th>          
                </tr>
            </thead>

            <tbody>         
                <?php $sijoitus = 1; ?> 
                <?php foreach ($data->lista as $asia): ?>
                    <tr>     
                        <td><?php echo $sijoitus;
                $sijoitus++ ?></td>
                        <td><?php echo $asia->nimi; ?></td>
                        <td><?php echo $asia->seura; ?></td>
                        <td><?php echo $asia->loppuaika; ?></td>
                        <td><a href="updatekilpailija.php?id=<?php echo $asia->id; ?>">muokkaa</a></td>
                    </tr>
<?php endforeach; ?>        

            </tbody>
        </table>

        <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/lisaakilpailija.php?id=<?php echo $data->sarja; ?>">Lisää tulos</a>

    </body>
</html>