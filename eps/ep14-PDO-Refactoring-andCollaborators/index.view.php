<html>

<head>

    <meta charset="UTF-8">

    <title>Document</title>

    <style>

    </style>

</head>

<body>

<header>

    <h1>Task For The Day</h1>

    <ul>

        <?php foreach ($tasks as $task) : ?>

        <li>

            <?php if ($task->completed) : ?>

            <strike>

            <?php endif; ?>

            <?= $task->description; ?>

            <?php if ($task->completed) : ?>

            </strike>

            <?php endif; ?>

        </li>

        <?php endforeach; ?>

    </ul>

</header>

</body>

</html>