<html>
    <head>
        <title>Lisää tulos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">

        </nav>

        <h1>Suunnistustulospalvelu</h1>
        <h2>Lisää tulos</h2>

        <form action="lisaakilpailija.php" method="POST">

            <input type="hidden" name="sarja" value="<?php echo $data->sarja; ?>"/>

            <p>Nimi: <br>
                <input type="text" name="nimi"></p>
            <p>Seura: <br>
                <input type="text" name="seura"></p>
            <p>Emit: <br>
                <input type="text" name="emit"></p>
            <p>Lopputulos: <br>
                <input type="text" name="loppuaika"></p>
            <input type="submit" value="Lisää tulos">
        </form>
    </body>
</html>



