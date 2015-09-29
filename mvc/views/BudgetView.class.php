<?php  
class BudgetView {
	
  public static function show() {  	
?> 

<!DOCTYPE html>
<html>
<head>
  <title>WhatsMyQuota</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="/mvc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src=
  "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src=
  "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/mvc/styles/budget.css">
</head>

<body>
<?php
session_start(); 
echo "Welcome " . $_SESSION["sessionUser"] . "!<br>"; ?>
<a href="../controllers/logout.php">Logout</a>
<br>
  <h1>Budget</h1>

  <h2>Balance: 4539.43</h2><br>

  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-4" id="month">
          <h3>September 2015</h3>

          <form action="../action_page.php">
            <table border="0">
              <tr>
                <td>
                  <h3><label for="housing">Housing</label></h3>
                </td>
              </tr>

              <tr>
                <td><label for="rent">Rent</label></td>

                <td><input name="name" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td>
                  <h3><label for="utilities">Utilities</label></h3>
                </td>
              </tr>

              <tr>
                <td><label for="electricity">Electricity</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td><label for="internet">Phone & Internet</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td><label for="water">Water</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td>
                  <h3><label for="food">Food</label></h3>
                </td>
              </tr>

              <tr>
                <td><label for="groceries">Groceries</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td><label for="restaurants">Restaurants</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td>
                  <h3><label for="debt">Debt</label></h3>
                </td>
              </tr>

              <tr>
                <td><label for="loan">Student Loan</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td>
                  <h3><label for="transportation">Transportation</label></h3>
                </td>
              </tr>

              <tr>
                <td><label for="insurance">Car Insurance</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td><label for="cpayment">Car Payment</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td><label for="crepairs">Car Repairs</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td><label for="gas">Gas</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>

              <tr>
                <td>
                  <h3><label for="fun">Fun</label></h3>
                </td>
              </tr>

              <tr>
                <td><label for="recreation">Recreation</label></td>

                <td><input name="email" size="25" type="number" placeholder="$0.00"></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

<?php
  }
}
?>
</html>