<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Technicians</title>
        <link rel="stylesheet" type="text/css" href="/PHP_Assignment_4.2/tech_support copy/main.css">
    </head>
    <body>
        <?php include '../view/header.php'; ?>
        <main>
            <?php
                require('../model/database_oo.php');
                require_once('../technician_manager/technician.php');
                $db = Database::getDB();
                // require('../model/product_db.php');
                $query = 'SELECT * FROM technicians;';
                // processes to the database
                $statement = $db->prepare($query);
                $statement->execute();
                $technicians = $statement->fetchAll(PDO::FETCH_ASSOC);  
            ?>
            <table>
                <tr>
                    <th>Tech ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th></th>
                </tr>
                <?php
                    foreach($technicians as $technicianData) {
                        echo'<tr>';
                        // creates a Technician object
                        $technician = new Technician(
                            $technicianData['techID'],
                            $technicianData['firstName'],
                            $technicianData['lastName'],
                            $technicianData['email'],
                            $technicianData['phone'],
                            $technicianData['password']
                        );

                        echo '<tr>';
                        echo '<td>'.$technician->getTechID().'</td>';
                        echo '<td>'.$technician->getFullName().'</td>';
                        echo '<td>'.$technician->getEmail().'</td>';
                        echo '<td>'.$technician->getPhone().'</td>';
                        echo '<td>'.$technician->getPassword().'</td>';
                        echo '
                        <td>
                            <form method="post" action="delete_technician.php">
                                <input type="hidden" name="techID" value="'.$technician->getTechID().'">
                                <button>Delete</button>
                            </form>
                        </td>';

                    echo '</tr>';
                        
                    }
                ?>
            </table>
            <a href="add_technician.php">Add Technician</a>
        </main>   
    </body>
    <?php include '../view/footer.php'; ?> 
</html>