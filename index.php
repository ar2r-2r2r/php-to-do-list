<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список дел</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Список дел</h1>
        <form action="/add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
        </form>

        <?php
            require 'configDB.php';

            echo '<ul>';
            $query=$pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
            while($row=$query->fetch(PDO::FETCH_OBJ)){
                echo '<li><b>'.$row->task.'</b><a href="delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
            }
            echo '</ul>';
        ?>

    </div>

    
</body>
</html>