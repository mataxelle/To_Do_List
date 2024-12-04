<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>

<body>
    <h1>Ma To-Do List</h1>
    <form method="POST" action="/add">
        <input type="text" name="title" placeholder="Titre de la tâche" required>
        <textarea name="content" placeholder="Description"></textarea>
        <button type="submit">Ajouter une tâche</button>
    </form>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
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