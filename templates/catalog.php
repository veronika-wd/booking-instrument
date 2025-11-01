<main>
    <div class="sidebar">
        <a href="/"><h2>Категории</h2></a>
        <?php foreach ($parentCategories as $parentCategory) :?>
            <a href="/<?=$parentCategory['id']?>"><?=$parentCategory['name']?></a>
        <?php endforeach;?>
        <a href="/categories"><button>Перейти к админ-панели</button></a>
    </div>
    <div class="main-cont">
        <div class="category-cont">
            <h2>Категории</h2>

            <div class="card-container">
                    <?php foreach ($categories as $category) :?>
                        <div class="card">
                            <a href="/<?=$category['slug']?>"><h4><?=$category['name']?></h4></a>
                        </div>
                    <?php endforeach;?>
                </div>
        </div>
    </div>
</main>
