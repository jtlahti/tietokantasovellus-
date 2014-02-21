<html>
    <head>
        <title>Lisää kilpailu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">

        </nav>

        <h1>Suunnistustulospalvelu</h1>
        <h2>Lisää kilpailu</h2>

        <form action="lisaakilpailu.php" method="POST">

            <p>Päivämäärä: <br>
                <input type="text" name="Päivämäärä"></p>
            <p>Nimi: <br>
                <input type="text" name="nimi"></p>
            <p>Tunnus: <br>
                <input type="text" name="Tunnus"></p>
            <p>Salasana: <br>
                <input type="text" name="Salasana"></p>
            <input type="submit" value="Lisää kilpailu">
        </form>
    </body>
</html>
