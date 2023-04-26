<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <?php
        $servername = "127.0.0.1";
        $user = "Administrator"
        $safeword = "h6qfd6parC3GPBF"

        $conection = new mysqli($servername, $user, $safeword);

        if (connect_error)  {
            die("error 403" .$con->connect_error);
        }
        echo "connected"
    ?>
</head>
<body id="body">
    <div id="nav-bar">
        <h1 id="head">codingrange</h1>
        <div id="navigation">
            <ul>
                <li id="list-item1">Navigieren: </li>
                <a href="notes.php" id="list-item"><li>Notizen</li></a>
                <a href="data.php" id="list-item"><li>Gewicht</li></a>
            </ul>
        </div>
    </div>
</body>
</html>