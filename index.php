<?php
    //connect to the database
    $db = mysqli_connect('localhost','root','', 'todo');

    if (isset($_POST['submit'])){
        $task = $_POST['task'];

        mysqli_query($db,"INSERT INTO tasks (task) VALUES('$task')");
        header('location: index.php');
    }
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title> ToDo List Application PHP and MySQL </title>
        <link rel = "stylesheet" type="text/css" href="style.css">
    </head>
<body>

    <div class = "heading">
        <h2> ToDo List Application PHP and MySQL </h2>
    </div>
    <br>
        <form method ="POST" action="index.php">
            <input type ="text" name="task" class ="task_input" placeholder ="Please Input the Task">
            <button type="submit" class ="add_btn"name="submit"> Add Task</button>
        </form>
        <table align = "center">
            <thead>
                <tr>
                    <th>N</th>
                    <th>Task</th>
                    <th>Action</th>
            </thead>

            <tbody>
                <tr>
                    <td>1<td>
                    <td class="task">This is the first task place holder</td>
                    <td class= "delete">
                        <a href="#">X</a>
                    </td>
                </tr>
            </tbody>

        </table>
</body>
</html>