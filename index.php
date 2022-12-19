<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Formulario PHP</title>
</head>

<body>

        <h1>Got something to say?</h1>


        <form action="HandleForm.php" method="post">
                <div>
                        <p>Name: <input required type="text" name="name" /></p>
                </div>

                <div>

                        <p>Email: <input required type="email" name="email" /></p>
                </div>


                <div>
                        <p>
                                Comment:
                                <textarea required cols="20" rows="1" name="comment"></textarea>
                        </p>

                </div>

                <button type="submit">Submit</button>
        </form>

        <h2>Previous Comments</h2>


        <?php
        include 'config.php';

        $res = $db->query("SELECT * FROM $db_name");

        while ($row = $res->fetchArray()) {
                echo " <div> Name: {$row['name']} </br> Comment: {$row['comment']}</div> </br>";
        }

        ?>


</body>

</html>
