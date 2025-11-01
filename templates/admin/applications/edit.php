<main>
<h1>Редактирование заявки №<?=$application['id']?></h1>
    <hr>
    <form action="/applications/<?=$application['id']?>/edit" method="post">
        <input type="tel" name="user-phone" value="<?=$application['user_phone']?>" placeholder="Номер телефона пользователя">
        <input type="text" name="time" value="<?=$application['time']?>" placeholder="Количество дней">
        <select name="status" id="status">
            <option value="Новое">Новое</option>
            <option value="Активная">Активная</option>
            <option value="Завершенная">Завершенная</option>
        </select>
        <input type="submit" value="Редактировать">
    </form>
</main>