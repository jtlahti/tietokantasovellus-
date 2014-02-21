
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
            <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu">Etusivu</a>
            <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/sarjanmuokkaus.php?id=<?php echo $data->kilpailu; ?>">Muokkaa kilpailusarjoja</a>
        </nav>

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
                        <td><a href="lopputulokset.php?id=<?php echo $asia->id; ?>">tulokset</a></td>
                    </tr>
                <?php endforeach; ?>        
            </tbody>
        </table>

    </body>
</html>


