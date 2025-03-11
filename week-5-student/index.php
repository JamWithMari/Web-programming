<?php
// add lesson code here
require_once 'database.php';
$customer = new Database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD With PDO</title>
  <meta name="description" content="This week we will be building a CREATE and READ CRUD system with PDO">
  <meta name="robots" content="noindex, nofollow">
  <!--  Add our Google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap"
    rel="stylesheet">
  <!--  Add our Bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--  Add our custom CSS  -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
  <header>
    <h1>Full CRUD With OOP</h1>
  </header>
  <main class="container">
    <?php
    // add lesson code here
    if (isset($_GET['msg1']) && $_GET['msg1'] == "insert") {
      echo "<div class='alert alert-success'>
              <button type='button' class='close' data-dismiss='alert'>x</button> 
              Your Record Has Been Added
              </div>";
    }
    //Add the update 
    if (isset($_GET['msg1']) && $_GET['msg1'] == "update") {
      echo "<div class='alert alert-success'>
              <button type='button' class='close' data-dismiss='alert'>x</button> 
              Your Record Has Been Updated
              </div>";
    }
    ?>
    <section>
      <h2>View Records
        <a href="add.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
      </h2>
      <table class="table table-hover table-dark table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Salary</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // add lesson code here
          $customers = $customer->displayData();
          foreach ($customers as $customer) {
            ?>
            <tr>
              <td><?php echo $customer['id']; ?></td>
              <td><?php echo $customer['name']; ?></td>
              <td><?php echo $customer['email']; ?></td>
              <td><?php echo $customer['salary']; ?></td>

              <td>
                <button class="btn btn-primary mr02">
                  <a href="edit.php?editId=<?php echo $customer['id'] ?>">
                    <i class="fa fa-pencil text-white"></i>
                  </a>
                </button>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>
    </section>
  </main>
</body>

</html>