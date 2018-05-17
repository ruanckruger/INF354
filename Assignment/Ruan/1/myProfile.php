<!DOCTYPE html>
<html>
    <head>
        <title>INF 354 - Assignment 1 - u14059950</title>
    </head>
    <body>
        <section>
            <div id="output-area">
                <h1 id="output">
                <?php
                    $name = $_POST['tName'];
                    $surname = $_POST['tSurname'];
                    $dob = new DateTime($_POST['dDateOfBirth']);
                    $today = new DateTime();
                    $totalDiff = $today->diff($dob);
                    $age = $totalDiff->y;                

                    echo "My name is $name $surname. I am $age years old.";
                ?>
                </div>
            </div>
        </section>
    </body>
</html>