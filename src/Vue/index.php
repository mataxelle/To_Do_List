<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleSheet" href="/style.css">
    <title>To-Do List</title>
</head>

<body>
    <h1>Ma To-Do List</h1>

    <section id="formSection">
        <form method="POST" action="/add">
            <input type="text" name="title" placeholder="Titre de la tâche" required>
            <textarea name="content" placeholder="Description"></textarea>
            <input type="submit" valut="Ajouter une tâche">
        </form>
    </section>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li class="tasksList">
                <h3>
                    <?= htmlspecialchars($task['title']); ?>
                </h3>
                <a href="/update/<?= $task['id']; ?>">Modifier</a>
                <form action="/delete/<?= $task['id']; ?>" method="POST">
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>