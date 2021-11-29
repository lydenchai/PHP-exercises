
<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
  <a class="navbar-brand" href="#">
    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/logo_white.png" width="30" height="30" alt="logo">
    P-Event
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">My Account</a>
          <a class="dropdown-item" href="userProcess/login.php">Log Out</a>
        </div>
      </li>   
    </ul>
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="?page=event" class="nav-link active fa fa-calendar aria-hidden=true">
                    Events
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link active fa fa-list-ol aria-hidden=true" >
                    Category
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=user" class="nav-link active fa fa-address-book aria-hidden=true">
                    Manage
                </a>
            </li>
        </ul>
      </div>
      <a href="userProcess/register.php"><i class="fa fa-sign-out btn-danger" style="height: 30px; width: 70px;display: flex; text-align: center; align-items: center; justify-content: center; border-radius: 5px; text-decoration: none; ">Logout</i></a>
  </div>
</nav>