<html>
    <head>
        <title>Kilpailun sarjat</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/">Etusivu</a>
            <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/logoutsarja.php">Kirjaudu ulos</a>
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
        <h2>Sarjat</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nimi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($data->lista as $asia): ?>
                    <tr>     
                        <td><?php echo $asia->nimi; ?></td>
                        <td><a href="updatesarja.php?id=<?php echo $asia->id; ?>">muokkaa</a></td>
                    </tr>

                <?php endforeach; ?>        
            </tbody>
        </table>
        <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/lisaasarja.php?id=<?php echo $data->kilpailu; ?>">Lisää sarja</a>
    </body>
</html>
