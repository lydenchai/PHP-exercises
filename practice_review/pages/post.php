<div class="container p-4">
    <form action="" method="post" class="form-inline my-2 my-lg-0">
        <input name="search" class="form-control bg-dark mr-sm-2 text-white" type="search" placeholder="Search Here..." aria-label="Search" style="width:79.5%; margin: 10px; margin-left: -2px">
        <button class="btn btn-success my-2 my-sm-0 " type="submit">Search</button>
    </form>
    <div class="d-flex justify-content-end p-4">
        <a href="create_fruit_html.php" class="btn btn-primary">Add+</a>
    </div>
    <?php
        require_once('database/database.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $fruits = searchPost($_POST);
        }else{
            $fruits = getFruitData();
        }
        foreach($fruits as $fruit): 
    ?>
    <div class="card mb-2">
        <div class="card-body">
            <h1 class="display-4 text-capitalize"><?= $fruit['fruitName']?></h1>
            <strong class="badge badge-primary"><?= $fruit['price']?>$</strong>

            <div class="action d-flex justify-content-end">
                <a href="update_fruit_html.php?id=<?= $fruit['fruitID']?>" class="btn btn-primary btn-sm mr-2">EDIT</i></a>
                <a href="delete_fruit.php?id=<?= $fruit['fruitID']?>" class="btn btn-danger btn-sm">DELETE</i></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
