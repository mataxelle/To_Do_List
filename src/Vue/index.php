<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
</head>

<body>
    <h1>Ma To-Do List</h1>
    <a href="/add">Ajouter une tâche</a>
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