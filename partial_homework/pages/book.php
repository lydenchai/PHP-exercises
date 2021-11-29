<div class="container p-5">
    <div class="d-flex justify-content-end p-4">
        <a href="create_book_html.php" class="btn btn-primary">Add Book</a>
    </div>
    <?php
        require_once('database/database.php');
        $books = getBookData();
        foreach($books as $book): 
    ?>
    <div class="card mb-2">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <h1 class="display-4 text-center"><?= $book['title']?></h1>
                    <strong><?= $book['price']?>$</strong>
                </div>
                <div class="align-items-end">
                    <div class="action d-flex justify-content-end">
                        <a href="update_book_html.php?id=<?= $book['book_id']?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                        <a href="delete_book.php?id=<?= $book['book_id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </div>
                    <br>
                    <br>
                    <strong><?= $book['date']?></strong> 
                </div>
            </div>
        </div>
    </div>
    
    <?php endforeach; ?>
</div>
