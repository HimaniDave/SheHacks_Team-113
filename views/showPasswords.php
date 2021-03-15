<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/fccb07e8f1.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet" />
    <!-- No need to mention public folder "css/name_of_the_respectiove_stylesheet, similarly with js" -->
    <link rel="stylesheet" href="../public/css/styles.css" />
    <title>Dashboard</title>
</head>

<body>
    <div class="main-heading">
        <h4>Store your password here!</h4>
    </div>
    <div class="main-dashboard">
        <form>
            <div class="mb-3 >
          <label for=" exampleInputEmail1" class="form-label"><i class="fas fa-pen icon"></i>Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    autocomplete="off" />
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label"><i class="far fa-user icon"></i>Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    autocomplete="off" />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><i class="fas fa-key icon"></i>Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required />
            </div>

            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label"><i
                        class="far fa-window-restore icon"></i>Website</label>
                <input type="website" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    autocomplete="off" />
            </div>


            <button type="button" class="btn btn-info">
                <a href="#">Save!</a>
            </button>
        </form>
    </div>
    <script src="/public/app.js"></script>
</body>

</html>

<!-- Tasks needs to be done! -->
<!-- Once the user adds the neccessary details show me this dismissible alert -->

<!-- 
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sucess!</strong> Your details have been saved successfully!
    <button
      type="button"
      class="btn-close"
      data-bs-dismiss="alert"
      aria-label="Close"
    ></button>
  </div>;
 -->

<!-- If all details are not correct show him the same message but the content changed -->