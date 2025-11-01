<div class="main-cont">
    <h1>Мои заявки</h1>
    <a href="/"><button>Назад на главную</button></a>
    <a href="/logout"><button>Выйти</button></a>
    <div class="card-container">
        <?php foreach ($applications as $application) :?>
            <div class="card">
                <p>Заявка №<?=$application['id']?></p>
                <hr>
                <p>Товар: <?=$application['good_name']?></p>
                <p>Количество дней аренды: <?=$application['time']?></p>
                <p>Статус: <?=$application['status']?></p>
            </div>
        <?php endforeach;?>
    </div>
</div>

