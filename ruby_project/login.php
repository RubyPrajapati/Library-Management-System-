<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    .text{
        font-size: 3em;
        position: relative;
        top: 20px;
        text-align: center;
    }
    .form-group {
        position: relative;
        margin-left: 30%;
        margin-top: 20px;
    }
    .control-label {
        font-weight: bold;
        font-size: 30px;
    }
    .btn{
        position: relative;
        margin-left: 45%;
    }
    </style>
</head>
<body>

      <form id="login_form" action="" method="POST">
        <fieldset class="bg bg-dark text-white ">
          <legend class="text  font-weight-bold">Log in</legend>
          <div class="form-group col-lg-4 text-center">
            <label for="user_username" class="control-label">Username:</label>
            <input type="text" id="user_username" class="form-control" name="user_username" placeholder="username" autofocus/>
          </div>
          <div class="form-group col-lg-4 text-center">
            <label for="user_password" class="control-label ">Password:</label>
            <input type="password" id="user_password" class="form-control" name="user_password" placeholder="password"/>
          </div>
          <div class="text-center pad-top-20">
            <p>Have you forgotten your<br><a href="#" class="link"><strong>username</strong></a> or <a href="#" class="link"><strong>password</strong></a>?</p>
          </div>
          <div class="pad-top-20 pad-btm-20">
            <input type="submit" class="btn  btn-primary btn-lg" value="Continue">
          </div>
          <div class="text-center">
            <p>Do you wish to register<br> for <a href="signup.php" class="link user-actions"><strong>a new account</strong></a>?</p>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
  
</body>
</html>