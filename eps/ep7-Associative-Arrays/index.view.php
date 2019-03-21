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

    <ul>
        <?php foreach ($person as $key => $feature) : ?>

            <li><strong><?= $feature; ?></li></strong>

        <?php endforeach; ?>

    </ul>

</header>

</body>

</html>