<?php
if(isset($_POST ["firstname"]) && isset($_POST["eduform"]) && isset($_POST["courses"]))
{
    $name = htmlentities($_POST["firstname"]);
    $eduform = htmlentities($_POST["eduform"]);
    $courses = $_POST["courses"];
    $output = "
    <html>
    <head>
    <title>Анкета</title>
    </head>
    <body>
    Вас зовут: $name <br/>
    Форма обучения: $eduform<br/>
    Выбранные курсы:
    <ul>";
    foreach($courses as $item)
        $output.="<li>". htmlentities($item). "<li>";
        $output.="</ul></body></html>";
        echo $output;
}
else{
    echo "Введённые данные некорректны";
}
?>