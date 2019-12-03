<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
                Some School
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=about">About Us</a>
                    </li>
                    <li class="nav-item <?php if($_GET['page'] == "courses" or $_GET['page'] == "lessons") echo "active"; ?>">
                        <a class="nav-link" href="index.php?page=courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=login">Login</a>
                    </li>
                </ul>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0">Личный Кабинет</button>
        </nav>