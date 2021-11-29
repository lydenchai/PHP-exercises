<?php require_once('partial/header.php'); ?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-5 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">User</h5>
            <form action="create_user_model.php" method="post">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="first_name" placeholder="First Name">
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-floating mb-3">
                <select name="userSelected">
                  <option selected disabled>Choose your role</option>
                  <option value="normal">Normal</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold " name ="createEvent" type="submit">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
<?php require_once('partial/footer.php'); ?>