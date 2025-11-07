<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование категории</title>
</head>
<body>
<h1>Редактирование категории</h1>
<form action="/goods/<?=$good['id']?>/edit" method="post">
    <input type="text" name="name" placeholder="Наименование категории" value="<?=$good['name']?>" required>
    <select name="category" id="category">
        <?php foreach ($categories as $category) :?>
            <option value="<?=$category['id']?>"><?=$category['name']?></option>
        <?php endforeach;?>
    </select>
    <textarea name="description" id="desc" cols="30" rows="10"><?= $good['description']?></textarea>
    <input type="number" name="price-one" value="<?=$good['price_one']?>" placeholder="Цена до 1 сут.">
    <input type="number" name="price-two" value="<?=$good['price_two']?>" placeholder="Цена от 2 до 5 сут.">
    <input type="number" name="price-three" value="<?=$good['price_three']?>" placeholder="Цена от 5 сут.">
    <input type="submit" value="Редактировать">
</form>
</body>
</html>
