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

    <section id="taskSection">
        <ul class="taskSectionList">
            <?php foreach ($tasks as $task): ?>
                <li class="tasksList">
                    <details>
                        <summary>
                            <?= htmlspecialchars($task['title']); ?>
                        </summary>
                        <p>
                            <?= htmlspecialchars($task['content']); ?>
                        </p>
                    </details>
                    <div class="tasksListBtn">
                        <a class="button editBtn" href="/update/<?= $task['id']; ?>">
                            <img class="icon" src="/img/edit.svg" alt="edit icon">
                        </a>
                        <form action="/delete/<?= $task['id']; ?>" method="POST">
                            <button class="button deleteBtn" type="submit">
                                <img class="icon" src="/img/close.svg" alt="close icon">
                            </button>
                        </form>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>

</html>