<h1>Categories List</h1>

<ul>
<?php foreach($categories as $category):?>
    <li><?=$category->id;?> | <?=$category->name;?></li>
<?php endforeach ?>
</ul>