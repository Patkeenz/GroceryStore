<?php
include "connection.php";
?>

<html lang="en">

<head>
  <title>Order List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    

  <link rel="stylesheet" href="../css/style2.css">
  <script src="https://kit.fontawesome.com/d27ba70d65.js" crossorigin="anonymous"></script>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  

  <div id="sidebar"></div>
  <script>
  $(function(){
      $("#sidebar").load("sidenavphp.html");
  });
  </script>
</head>

<body>
    <div class="content">
    <div class="col-lg-4">
    <h2>Order</h2>
    <form action="" name="form2" method="POST">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Email Address" name="email">
        </div>
        <div class="form-group">
        <label for="orderNb">Order Number:</label>
        <input type="text" class="form-control" id="orderNb" placeholder="Enter Order Number" name="orderNb">
        </div>
        <div class="form-group">
        <label for="preTaxCost">Pre-tax cost:</label>
        <input type="text" class="form-control" id="preTaxCost" placeholder="Enter pre-tax cost" name="preTaxCost">
        </div>
        <div class="form-group">
        <label for="postTaxCost">Post-tax cost:</label>
        <input type="text" class="form-control" id="postTaxCost" placeholder="Enter Post Tax Cost" name="postTaxCost">
        </div>
        <div class="form-group">
        <label for="orderSummary">Order Summary:</label>
        <input type="test" class="form-control" id="orderSummary" placeholder="Enter Order Summary" name="orderSummary">
        </div>
        <button type="submit" name="insert" class="btn btn-default">Insert</button>
    </form>
    </div>

    <div class="col-lg-12">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Email</th>
        <th>orderNb</th>
        <th>Pre-tax Cost</th>
        <th>Post-tax Cost</th>
        <th>Order Summary</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $res=mysqli_query($link,"select * from orderlist");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row["id"]; echo "</td>";
                echo "<td>"; echo $row["email"]; echo "</td>";
                echo "<td>"; echo $row["orderNb"]; echo "</td>";
                echo "<td>"; echo $row["preTaxCost"]; echo "</td>";
                echo "<td>"; echo $row["postTaxCost"]; echo "</td>";
                echo "<td>"; echo $row["orderSummary"]; echo "</td>";
                echo "<td>"; ?> <a href="editOrders.php?id=<?php echo $row["id"]; ?> "><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
                echo "<td>"; ?> <a href="deleteOrder.php?id=<?php echo $row["id"]; ?> "><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";

            }
        ?>
    </tbody>
    </table>
    </div>
    </div>
</body>

<?php
if(isset($_POST["insert"]))
{
    mysqli_query($link,"insert into orderlist values (NULL, '$_POST[email]', '$_POST[orderNb]','$_POST[preTaxCost]','$_POST[postTaxCost]','$_POST[orderSummary]')");
    ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
}
?>

</html>
