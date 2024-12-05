<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>

<body>
    <div>
        <a href="/">Retour</a>
    </div>
    <h1>Modification</h1>
    <form method="POST" action="/update/<?= $task['id']; ?>">
        <input type="text" name="title" value="<?= htmlspecialchars($task['title']); ?>" required>
        <textarea name="content"><?= htmlspecialchars($task['content']); ?></textarea>
        <div>
            <label for="status">Statut :</label>
            <select id="status" name="status">
                <option value="pending" <?= $task['status'] === 'pending' ? 'selected' : ''; ?>>En attente</option>
                <option value="completed" <?= $task['status'] === 'completed' ? 'selected' : ''; ?>>Terminé</option>
            </select>
        </div>
        <button type="submit">Enregistrer les modifications</button>
    </form>
</body>

</html>