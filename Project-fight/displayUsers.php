<?php
$title = "Admin Page";
// Connecting to the database

session_start();
if (!isset($_SESSION['user_id'])) {
    header('location:register.php');
    exit();
}

require_once './includes/database.php';
include './includes/header.php';
$sql = "SELECT user_id, first_name, last_name, email, isAdmin FROM siteusers";
// Try catch for the sql statement
try {
    // Assigning a variable to the grabbed users from the query
    $grabbedUsers = $conn->query($sql);
    ?>


    <?php
    //before maing the table we want to be sure that we have stuff to input into it first 
    if ($grabbedUsers->rowCount() > 0) {
        echo "<table class='admin-table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<td>User ID</td>";
        echo "<td>First Name</td>";
        echo "<td>Last Name</td>";
        echo "<td>Email</td>";
        echo "<td>Is Admin</td>";
        echo "<td colspan='2'>Action</td>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";




        // For loop to display all the data if any found
        foreach ($grabbedUsers as $user) {
            echo "<tr>";
            echo "<td>" . $user['user_id'] . "</td>";
            echo "<td>" . $user['first_name'] . "</td>";
            echo "<td>" . $user['last_name'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            // For the admin user just a simple conditional to display regular or admin user
            echo "<td>";
            if ($user['isAdmin'] == 1) {
                echo "Admin";
            } else {
                echo "Regular User";
            }

            //Link for account editing
            echo "</td>";
            echo "<td>";
            echo "<a href='edit.php?user_id=" . $user['user_id'] . "'>Edit</a>";
            echo "</td>";

            //Link for account deleting
            echo "</td>";
            echo "<td>";
            echo "<a href='delete.php?user_id=" . $user['user_id'] . "'>Delete</a>";
            echo "</td>";
            //End of the inserts into the table
            echo "</tr>";
        }
    } else {
        echo '<p id="no-users">There are no registered users in the database</p>';
    }

    //Closing the connection to the database
    $conn = null;
    ?>
    </tbody>
    </table>

    <?php
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
include'./includes/footer.php';
?>