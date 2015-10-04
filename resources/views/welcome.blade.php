<!DOCTYPE html>

<html lang="en">
<head>
  <title>WhatsMyQuota</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="/mvc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src=
  "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src=
  "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/mvc/styles/style.css">
</head>

<body>
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-4"><img alt="Cinque Terre" class=
        "img-circle img-responsive" height="230" src="/mvc/images/KR3.jpg" width=
        "230"></div>

        <div class="col-md-8">
          <h1>Whats My Quota HEllo</h1>

          <p>Take Control of your Finances!</p>

          <p>Make a Budget, Save Money.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <h3>Our System</h3>

        <p>Learn about our Budget System</p><button class="btn btn-primary"
        type="button">Learn Now</button>
      </div>

      <div class="col-md-4">
        <h3>Stories</h3>

        <p>Not Convinced? Read how millions of others saved with our
        software!</p><button class="btn btn-primary" type=
        "button">Testimonies</button>
      </div>

      <div class="col-md-4">
        <h3>Tutorial</h3>

        <p>Tutorial and demo of how our Budget Software
        works.</p><button class="btn btn-primary" type="button">Start
        Tutorial</button>
      </div>
    </div>
  </div>

  <div style="width:600x; padding: 20px; margin: 10px 0px 10px 10px">
    <div class="container">
      <div class="row"></div>

      <div class="row">
        <div class="col-md-4">
          <h3>Login:</h3>

          <form action="login" method="post">
            <label>Username:</label> <input name="username" required type=
            "text"><br>
            <br>
            <label>Password:</label> <input name="password" required type=
            "password"><br>
            <br>
            <input type="submit" value="Submit">
          </form>
        </div>

        <div class="col-md-4">
          <h3>Sign Up Here</h3>

          <form action="register" method="post">
            <label>First name:</label> <input name="firstname" required
            type="text"><br>
            <br>
            <label>Last name:</label> <input name="lastname" required type=
            "text"><br>
            <br>
            <label>Username:</label> <input name="username" required type=
            "text"><br>
            <br>
            <label>Password:</label> <input name="password" required type=
            "password"><br>
            <br>
            <label>Email:</label> <input name="email" required type=
            "email"><br>
            <br>
            <label>Date of Birth:</label> <input maxlength="2" name="month"
            placeholder="mm" required size="2" type="test">
            <input maxlength="2" name="day" placeholder="dd" required size=
            "2" type="test"> <input maxlength="4" name="year" placeholder=
            "yyyy" required size="4" type="test"><br>
            <br>
            <input type="submit" value="Submit">
          </form>
        </div>

        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
</body>



</html>