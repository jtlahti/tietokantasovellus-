<html>
    <head>
        <title>Muokkaa kilpailua</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">

        </nav>

        <h1>Suunnistustulospalvelu</h1>
        <h2>Muokkaa kilpailua</h2>

        <form action="updatekilpailu.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $data->kilpailunmuokkaaminen->id; ?>"/>

            <p>Päivämäärä: <br>
                <input type="text" name="Päivämäärä" value="<?php echo $data->kilpailunmuokkaaminen->paivamaara; ?>"></p>
            <p>Nimi: <br>
                <input type="text" name="nimi" value="<?php echo $data->kilpailunmuokkaaminen->nimi; ?>"></p>
            <p>Tunnus: <br>
                <input type="text" name="Tunnus" value="<?php echo $data->kilpailunmuokkaaminen->tunnus; ?>"></p>
            <p>Salasana: <br>
                <input type="text" name="Salasana" value="<?php echo $data->kilpailunmuokkaaminen->salasana; ?>"></p>
            <input type="submit" name="Tallenna" value="Tallenna">
            <input type="submit" name="Poista" value="Poista">
        </form>
    </body>
</html>

