<html>

<head>

    <meta charset="UTF-8">

    <title>Document</title>

    <style>

        header {

            background: gray;

            padding: 2em;

            text-align: center;

        }

    </style>

</head>

<body>

<header>

    <h1>
        <?php

        echo "hello" . htmlspecialchars($_GET['name']);

        ?>

    </h1>

</header>

</body>

</html>