<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Тест по истории</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Главная страница</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ссылка</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Контакты</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Найти</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<main class="container">
    <h1>Тест из вопросов по истории:</h1>
    <div class="test-form">

    <form action="" method="post">
        <strong><label for="its_test_one">Первый Российский император?:</label></strong><br>
        <input class="form-check-input" type="radio" name="first_question" value="1" id="its_test_one">1)Пётр 1<br>
        <input class="form-check-input" type="radio" name="first_question" value="2" id="its_test_one">2)Александр 1<br>
        <input class="form-check-input" type="radio" name="first_question" value="3" id="its_test_one">3)Юрий Долгорукий<br>
        <input class="form-check-input" type="radio" name="first_question" value="4" id="its_test_one">4)Павел 1<br>
        <br>
        <hr>
        <br>

        <strong><label for="its_test_two">В каком году была Октябрьская революция?:</label></strong><br>
        <input type="number" name="second_question" value="1917" id="its_test_two"><br>
        <hr>
        <br>

        <strong><label for="">Какой город был столицей России в такие года (1243—1389)?:</label></strong><br>
        <select name="threeth_question" id="its_test_three"><br>

            <option value="2">Москва</option>
            <option value="3">Киев</option>
            <option value="4">Новгород</option>
            <option value="1">Владимир</option>

        </select>
        <br>
        <br>
        <br>
        <input class="btn btn-primary" type="submit" value="Отправить">
    </form>
        <?php
        $question_1 = $_POST['first_question'];
        $question_2 = $_POST['second_question'];
        $question_3 =$_POST['threeth_question'];

        $right_answer = 0;
        $wrong_answer = 0;
        if ($question_1 == 1){
            $right_answer++;

        }
        else{
            $wrong_answer++;
        }
        if ($question_2 == 1917){
            $right_answer++;
        }
        else{
            $wrong_answer++;
        }

        if ($question_3 == 1){
            $right_answer++;

        }
        else{
            $wrong_answer++;
        }
        if ($right_answer == 3){
            echo 'УРА, вы ответили на все вопросы правильно и получаете золотой кубок '.$right_answer. ' :кол_во правильных ответов'.'<img src="https://as2.ftcdn.net/v2/jpg/03/03/36/61/500_F_303366199_Zin808abyKCSyjvmHguBJo3Ejg595qJV.jpg" alt="картинки нет">';

        }
        elseif ($right_answer == 2){
            echo  $wrong_answer .' кол-во неправильных ответов '.' У вас серебро, вы ответили правильно на '.$right_answer.' вопроса '.'<img src="http://sport69.ru/wp-content/uploads/2020/02/kubok-hb4116d-h14.jpg"';

        }
        elseif ($right_answer == 1){
            echo 'Вы ответили только на '.$right_answer.' вопрос правильно'.'<br>';
            echo $wrong_answer.' кол-во неправильных ответов';
        }



        ?>


    </div>




</main>
</body>
</html>
