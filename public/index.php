<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>

<body>
    <h1>To Do List</h1>

    <div class="todo_form">
        <form action="/add.php">
            <input type="text" id="title" name="title" placeholder="To do" require>
            <button type="submit">Add &nbsp; <span>&#43;</span></button>
        </form>
    </div>

    <div class="todo_section">
        <div class="todo_item">
            <input type="checkbox">
            <p>My to do</p>
            <small>created at : 12/11/2024</small>
        </div>
    </div>

</body>

</html>