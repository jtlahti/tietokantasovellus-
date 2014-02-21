<html>
    <head>
        <title>Etusivu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <a href="http://jtlahti.users.cs.helsinki.fi/suunnistustulospalvelu/kilpailunmuokkaus.php">Muokkaa kilpailulistaa</a>
        </nav>

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
                        <td><a href="sarjat.php?id=<?php echo $asia->id; ?>">Sarjat</a></td>
                    </tr>
                <?php endforeach; ?>   
            </tbody>
        </table>

        Suunnistustulospalvelu tarjoaa suunnistuskilpailujen lopputulokset sarjoittain. Lisäksi ne, joilla on vaaditut tunnukset, voivat muokata kilpailujen, sarjojen ja tulosten tietoja.
    </body>
</html>
