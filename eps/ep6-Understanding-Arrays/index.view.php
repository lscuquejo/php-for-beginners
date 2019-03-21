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

            foreach ($names as $name){

                echo "<li>$name</li>";

            }

        ?>

    </h1>

</header>

</body>

</html>