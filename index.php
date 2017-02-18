<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>GeekHub PHP-HW-1</title>
    </head>
    <body>
        <form method="post" action="send.php">
            <p>
               <fieldset>
               <legend>Коротко о себе</legend>
                   <p><label>Имя: <input required type="text" size="35" name="name"></label></p>
                   <p><label>Фамилия: <input required type="text" size="35" name="s-name"></label></p>
                   <p>Пол: <label><input required name="sex" type="radio" value="man"> мужской</label><label><input name="sex" type="radio" value="woman"> женский</label></p>
                   <p><label>Возраст: <input required type="number" name="age"> лет</label></p>
                </fieldset>
            </p>
            <p>
                <fieldset>
                    <legend>Подробнее о себе</legend>
                    <p><label><input name="gender" type="radio" value="youngman"><small>Молодой человек</small></label></p>
                    <p><label><input name="gender" type="radio" value="younwoman"><small>Девушка</small></label></p>
                    <p><label><input type="date" name="birthday"><small> Дата рождения</small></label></p>
                    <p><label><input type="text" name="familystatus"><small> Семейное положение</small></label></p>
                    <p><label><input type="text" name="socialstatus"><small> Социальный статус</small></label></p>
                    <p><label><input type="text" name="adress"><small> Местожительство</small></label></p>
                    <p><b>Что вы обычно делаете на выходных</b></p>
                    <p><label><input type="checkbox" name="timespend[]" value="slleep">Сплю</label></p>
                    <p><label><input type="checkbox" name="timespend[]" value="walk">Гуляю с друзьями</label></p>
                    <p><label><input type="checkbox" name="timespend[]" value="fish">Хожу на рыбалку</label></p>
                    <p><label><input type="checkbox" name="timespend[]" value="games">Играю в игры</label></p>
                    <p><label for="lb"><b>Рассказать о формах в книге, посвященной HTML:</b></label></p>
                    <select id="lb" name="sitef">
                        <option selected value="0">Site frequency</option>
                        <option value="Low">Low</option>
                        <option value="Middle">Middle</option>
                        <option value="High">High</option>
                    </select>
                    <p>
                        <b>Сколько книг вы прочитали за свою жизнь:</b>
                        <p><label><input name="books" type="radio" value="0-10"> 0 - 10</label></p>
                        <p><label><input name="books" type="radio" value="11-20"> 11 - 20</label></p>
                        <p><label><input name="books" type="radio" value="20-50"> 20 - 50</label></p>
                        <p><label><input name="books" type="radio" value="50+"> 50+</label></p>
                    </p>
                    <p><b><label for="ta">Ваши коментарии</label></b></p>
                    <p><textarea id="ta" rows="10" cols="60" name="textarea"></textarea></p>
                    <p>
                        <select name="day[]" size="3" multiple>
                            <option value="first">Первая позиция
                            <option selected value="second">Вторая позиция
                            <option value="rhird">Третья позиция
                            <option value="fourth">Четвертая позиция
                        </select>
                    </p>
                </fieldset>
            </p>
            <p>
                <fieldset>
                    <legend>И в заключении</legend>
                    <p><input type="text" placeholder="Это поле было введено до вас" readonly size="35"></p>
                    <p><label for="mail"><b>Email:</b></label></p>
                    <p><input type="email" id="mail" name="email"></p>
                    <p><b>Хотите подписаться на самю модную рассылку спама?</b></p>
                    <p><em>Выберите категории</em></p>
                    <p><label><input type="checkbox" name="categories[]" value="1"> Оборудование</label></p>
                    <p><label><input type="checkbox" name="categories[]" value="2"> Как приготовить обеды</label></p>
                    <p><label><input type="checkbox" name="categories[]" value="3"> Заработай миллион за два дня!</label></p>
                    <p>На сколько сложная задача:</p>
                    <p><label><input name="level" type="radio" value="easy" checked> Совсем нет</label></p>
                    <p><label><input name="level" type="radio" value="medium"> Так себе</label></p>
                    <p><label><input name="level" type="radio" value="hard"> Еле справились</label></p>
                </fieldset>
            </p>
            <p><input type="submit" value="Отправить"></p>
            <a href="data.php">Get Users Data</a>
        </form>
    </body>
</html>
