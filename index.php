<?php
include 'modif.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do Jerrome</title>
</head>
<body>
    <main>
        <h1>To Do jerrome</h1>

        <form action="index.php" method="POST">
            <table class="todolist">
                <tr>
                    <th>Active Tasks</th>
                </tr>
                <?php
                include 'todo.php';
                ?>
                
                <input type="submit" name="deleteTask" value="DONE">
            </table>

            <input name="task" placeholder="Your task">
            <input type="submit" name="submitTask" value="Add your task">
        </form>

        <table class="archivelist">
            <tr>
                <th>Archived Tasks</th>
            </tr>
            <?php
            include 'archives.php'
            ?>
        </table>
    </main>
</body>
</html>