<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet" />
    <!-- No need to mention public folder "css/name_of_the_respectiove_stylesheet, similarly with js" -->
    <link rel="stylesheet" href="styles.css" />
    <title>Secura</title>
</head>

<body>
    <!-- NAVBAR -->
    <header id="home">
        <nav class="navbar navbar-light navbar-expand-lg" id="my-navbar" style="background-color: #83d5fb">
            <!-- Navbar content -->
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">Secura</a>

                <button id="togglerBtn" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse links-container" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link list-item js-scroll-trigger" href="#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link list-item js-scroll-trigger" href="#features">Features</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link list-item js-scroll-trigger" href="#contacts">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-item" aria-current="page" href="masterSignup.php"
                                target="_blank">Signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- END OF NAVBAR -->
    <!-- Main Container -->
    <div class="container-fluid">
        <div class="jumbotron-fluid intro" id="main">
            <img class="img col-6"
                src=" https://cdn.dribbble.com/users/2879528/screenshots/11007898/media/02a3ee1367c85fbf8ee060614cb97fb0.jpeg?compress=1&resize=1200x900"
                alt="photo" />
            <div class="descrption">
                <div class="typing-effect">
                    <!-- <h2>Password :</h2> -->
                    <h1 class="typing"></h1>
                </div>
                <h2 class="content-text">Have a habit of forgetting passwords.</h2>

                <h4 class="content-text">Don't worry we have got you covered!</h4>
                <p class="content-text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Laboriosam, veritatis.
                </p>
                <button type="button" class="btn btn-info">
                    <a href="masterSignup.php">Get started</a>
                </button>
            </div>
        </div>
    </div>
    <!-- End of Container -->

    <!-- About us -->
    <h2 class="main-heading" id="about">About us!</h2>

    <div class="container-fluid aboutus">
        <h3 class="content-about main-heading">
            <img src="https://cdn.dribbble.com/users/3366206/screenshots/10583824/media/a242c31359ec9f92fc0c9a344a4b355e.jpg?compress=1&resize=1200x900"
                alt="" class="img-about" />
            <br />
            Secura is a password storing webapp. It allows you to save your
            passwords securely of different accounts. Just remember the master
            password and you are good to go! Secura provides you the most
            minimalistic user experience!
        </h3>
    </div>
    <!-- End of about us -->

    <!-- Features of secura! -->
    <h2 class="main-heading" id="features">Features of Secura!</h2>

    <div class="container-fluid">
        <div class="jumbotron scroll-links">
            <div class="cards">
                <div class="card col-3">
                    <img src="https://cdn.dribbble.com/users/2879528/screenshots/10840828/media/921df49bfa30cb940cc89309e98b5bb5.png?compress=1&resize=1200x900"
                        class="card-img-top" alt="img" />
                    <div class="card-body">
                        <h4 class="card-title">Generate Passwords</h4>
                        <p class="card-text">
                            Can't think of a password Secura got this! Generate your
                            passwords here at no added cost. Get your password
                            <a href="generatePasswords.php" target="_blank">here</a>
                        </p>
                    </div>
                </div>
                <div class="card col-3">
                    <img src="https://cdn.dribbble.com/users/1182636/screenshots/9783373/media/35b59b79fd1fe9720f8a585a9d435500.jpg?compress=1&resize=1200x900"
                        class="card-img-top" alt="img" />
                    <div class="card-body">
                        <h4 class="card-title">Safe and Easy to use!</h4>
                        <p class="card-text">
                            Secura has a minimalistic layout. Gives you the best user
                            experience!
                        </p>
                    </div>
                </div>
                <div class="card col-3">
                    <img src="https://cdn.dribbble.com/users/415096/screenshots/13918021/media/40e8f144668bfb2b59364afe357d2210.png?compress=1&resize=1200x900"
                        class="card-img-top" alt="img" />
                    <div class="card-body">
                        <h4 class="card-title">Totally free!</h4>
                        <p class="card-text">
                            Secura doesn't charge anything from our trusted users! It
                            believes in technology for everyone!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of features of secure! -->
    <!-- Contact us -->
    <h3 class="main-heading" id="contacts">Contact us for queries!</h3>
    <div class="container-fluid">
        <div class="jumbotron scroll-links" id="contact">
            <div class="contact-bb border-class">
                <form action="home.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="name" autocomplete="off" required name="entry.273814093" class="form-control"
                            id="exampleFormControlInput1" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" autocomplete="off" required name="entry.273814093" class="form-control"
                            id="exampleFormControlInput1" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Query</label>
                        <textarea class="form-control" required name="entry.199236889" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-info">
                        <a href="">Submit!</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End of contact us -->

    <!-- footer -->
    <footer class="footer">
        <p class="footer-text">
            Copyright &copy; <span id="head"></span>| All rights reseverd!
        </p>
    </footer>
    <!-- end of footer -->

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="app.js"></script>
</body>

</html>