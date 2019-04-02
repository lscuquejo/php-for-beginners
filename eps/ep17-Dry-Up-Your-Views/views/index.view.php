    <?php require ('partials/head.php'); ?>

    <nav>

        <ul>

            <li><a href="/about/culture">About our culture</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a><</li>

        </ul>

    </nav>

    <h1>My Tasks</h1>

    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else : ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>

    <?php require ('partials/head.php'); ?>
