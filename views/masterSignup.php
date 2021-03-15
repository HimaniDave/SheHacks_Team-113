<?php
?>
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
    <link rel="stylesheet" href="../public/css/styles.css" />
    <title>Signup</title>
</head>

<body>
    <h1 class="main-heading">Signup</h1>
    <h4 class="main-heading">
        Remember this master password as forgetting this one would lead to major
        loss of other passwords.
    </h4>
    <div class="signup-container">
        <form action="#" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="name" class="form-control" id="exampleInputEmail1" autocomplete="off"
                    aria-describedby="emailHelp" />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" autocomplete="off" id="exampleInputPassword1" />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" autocomplete="off" class="form-control" id="exampleInputPassword1" />
            </div>

            <button type="button" class="btn btn-info">
                <a href="http://localhost/Shehacks_Team-113/views/showPasswords.php">Signup!</a>
            </button>
        </form>
    </div>
</body>

</html>