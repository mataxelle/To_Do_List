<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
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
                <?= htmlspecialchars($task['title']); ?>
                <a href="/delete/<?= $task['id']; ?>">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>