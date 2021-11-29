<div class="container mt-5 p-2">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                    Create a new account
                </div>
                <div class="card-body">
                    <form action="models/create_model.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name"> 
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Age" name="age"> 
                        </div>
                        <div class="form-group">
                            <textarea name="info" rows="5" class="form-control" placeholder="Informaiton"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>