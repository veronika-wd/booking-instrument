<main>
    <h1>Подача заявки на бронирование <?=$good['name']?></h1>
    <form action="" method="post">
        <label for="user-phone">Номер телефона</label>
        <input type="tel" id="user-phone" name="user-phone" value="<?=$userPhone?>" placeholder="89007006050">
        <label for="time">Количество дней</label>
        <input type="text" name="time" placeholder="Введите количество дней аренды">
        <input type="submit" value="Отправить заявку">
    </form>
</main>