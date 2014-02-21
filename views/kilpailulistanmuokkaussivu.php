<html>
    <head>
        <title>Kilpailulistan muokkaussivu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/">Etusivu</a>
            <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/logoutkilpailu.php">Kirjaudu ulos</a>
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
        <h2>Kilpailut</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Päivämäärä</th>
                    <th>Nimi</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach ($data->lista as $asia): ?>           
                    <tr>
                        <td><?php echo $asia->paivamaara; ?></td>
                        <td><?php echo $asia->nimi; ?></td>
                        <td><a href="updatekilpailu.php?id=<?php echo $asia->id; ?>">muokkaa</a></td>
                    </tr>
                <?php endforeach; ?>   
            </tbody>
        </table>
        <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/lisaakilpailu.php">Lisää kilpailu</a> 

    </body>
</html>