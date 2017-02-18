<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>GeekHub PHP-HW-1</title>
    </head>
    <body>
        <?php
            $con = mysqli_connect('localhost', 'root', 'root');

            if (!$con) {
                echo "No connection!";
            }

            if (!mysqli_select_db($con, '1')) {
                echo "NO DataBase selected!";
            }

            $name = $_POST['name'];
            $sname = $_POST['s-name'];
            $sex = $_POST['sex'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $birthday = $_POST['birthday'];
            $familystatus = $_POST['familystatus'];
            $socialstatus = $_POST['socialstatus'];
            $adress = $_POST['adress'];
            $timespend = ((isset($_POST["timespend"]))?implode(", ", $_POST["timespend"]):""); // @todo Переписати код вище, застосувавши php-функцію implode
            $sitef = $_POST['sitef'];
            $books = $_POST['books'];
            $textarea = $_POST['textarea'];
            $day = ((isset($_POST["day"]))?implode(", ", $_POST["day"]):""); // @todo Самостійно напишіть код, щоб масив опцій відображався як рядок символів
            $email = $_POST['email'];
            $categories = ((isset($_POST["categories"]))?implode(", ", $_POST["categories"]):"");  // @todo Самостійно напишіть код, щоб масив опцій відображався як рядок символів (див. приклад вище)
            $level = $_POST['level'];

            // @todo написати функцію-перекладач на українську (див. приклад вище)
            switch ($level) {
                case 'easy':
                    $levelUkr = "легко";
                    break;
                case 'medium':
                    $levelUkr = "середньо";
                    break;
                case 'hard':
                    $levelUkr = "важко";
                    break;
            }

            $level = $levelUkr;


            $sql = "INSERT INTO person (name, sname, sex, age, gender, birthday, familystatus, socialstatus, adress, timespend, sitef, books, textarea, day, email, categories, level) 
                    VALUES ('$name', '$sname','$sex','$age', '$gender', '$birthday', '$familystatus', '$socialstatus', '$adress', '$timespend', '$sitef', '$books', '$textarea', '$day', '$email', '$categories', '$level')";

            if (!mysqli_query($con,$sql)) {
                echo "Not inserted";
            }
            else {
                echo "Success!!!!!!!!";
            }

            // @todo порівняти змінні $gender і $gender2 і додати меседж, якщо вони виявляться різними
            $gender1 = ($sex == 'man') ? '1' : '2';
            $gender2 = ($gender == 'youngman') ? '1' : '2';

            if (!($gender1 == $gender2)) {
                echo '<p>ALARM!!!! Gender miss understood detected!!!!Are you shure who you are?</p>';
            }
            else {
                echo '<p>Everything is ok with yours gender</p>';
            }


            // @todo використовуючи оператор switch-case записати сімейний стан словом у змінну $familyStatusWord
            $familyStatusWord = "";

            switch ($familystatus) {
                case 'женат':
                    $familyStatusWord = "женат";
                    break;
                case 'не женат':
                    $familyStatusWord = "не женат";
                    break;
                case 'один':
                    $familyStatusWord = "один";
                    break;
                case 'есть девушка':
                    $familyStatusWord = "есть девушка";
                    break;
                case 'есть парень':
                    $familyStatusWord = "есть парень";
                    break;
                case 'одна':
                    $familyStatusWord = "одна";
                    break;
                case 'замужем':
                    $familyStatusWord = "замужем";
                    break;
                case 'не замужем':
                    $familyStatusWord = "не замужем";
                    break;
            }
            echo $familyStatusWord;
        ?>
    </body>
</html>





