<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-md-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Library</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                if ($login == true) {
                    echo '<li class="nav-item"> <a class="nav-link active" aria-current="page" href="welcomePageLogin.php">Home</a> </li>';
                } else {
                    echo '<li class="nav-item"> <a class="nav-link" href="Home.php" id="tabLoginIn" name="tabLoginIn">Home</a> </li>';
                }
                ?>

                <?php
                if ($login == true) {
                    echo '<li class="nav-item"> <a class="nav-link"  id="tabLoginIn" name="tabLogin"In">"' . $_SESSION['email'] . '"</a> </li>';
                } else {
                    echo '<li class="nav-item"> <a class="nav-link" href="Login.php" id="tabLoginIn" name="tabLoginIn">Login</a> </li>';
                }
                ?>
                <?php $test = '12345' ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Books Categories
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>