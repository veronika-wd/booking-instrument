<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/styles.css">
    <style>
        header{
            display: flex;
            flex-direction: row;
            gap: 50px;
        }
    </style>
    <title>Заявки</title>
</head>
<body>
<header style="background-color: #fb857c">
    <h1>Заявки</h1>
    <a href="/"><button>На главную</button></a>
    <a href="/goods"><button>Перейти в CRUD-товаров</button></a>
    <a href="/categories"><button>Перейти в CRUD-категорий</button></a>
</header>
<table>
    <thead>
        <tr>
            <td>№</td>
            <td>Пользователь</td>
            <td>Товар</td>
            <td>Количество дней</td>
            <td>Статус</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($applications as $application) :?>
        <tr>
            <td><?=$application['id']?></td>
            <td><?=$application['user_phone']?></td>
            <td><?=$application['good']?></td>
            <td><?=$application['time']?></td>
            <td><?=$application['status']?></td>
            <td>
                <a href="/applications/<?=$application['id']?>/edit">Редактировать</a>
                <a href="/applications/<?=$application['id']?>/delete">Удалить</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

</body>
</html>