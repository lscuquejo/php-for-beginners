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

    <h1>Task For The Day</h1>

    <ul>

        <li>

            <strong>Name: </strong> <?= $task['title']; ?>

        </li>

        <li>

            <strong>Due Date: </strong> <?= $task['due']; ?>

        </li>

        <li>

            <strong>Person Responsible:</strong> <?= $task['assigned_to']; ?>

        </li>

        <li>

            <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>

        </li>

    </ul>

</header>

</body>

</html>