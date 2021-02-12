<?php
    require 'model/ContactDAO.php';

    $contactDAO = new ContactDAO();
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $contactDAO->addContact($username, $email);
        header('Location: index.php');
        exit;        
    }
    $contacts=$contactDAO->getAllContacts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Show Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light" style="margin-bottom: 20px">
    <a class="navbar-brand" href="#">
        <img src="images/lion.png" width="12%" height="12%" class="d-inline-block align-middle" alt="">
        CS 2033 Web Systems
    </a>
    </nav>
    <div class="container">
    <div class="row">
        <div class="col-sm-8">
            <table class="table table-bordered table-striped">
                <thead><tr><th>Contact ID</th><th>User Name</th><th>Email</th></tr></thead>
                <tbody>
                    <?php
                        for($index=0;$index<count($contacts);$index++){
                            echo "<tr><td>".$contacts[$index]->getContactID()."</td><td>"
                                    .$contacts[$index]->getUsername()."</td><td>"
                                    .$contacts[$index]->getEmail()."</td></tr>";
                        }
                    ?>
                </tbody>        
            </table>       
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mailing List</h5>
                    <p class="card-text">Add a new contact to the list.</p>
                    <form action="index.php" method="POST">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control mb-3" id="username" name="username" placeholder="Enter your Username" required>
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control mb-3" id="email" name="email" placeholder="Enter your Email Address" required>
                        <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                    </form>
                </div>
            </div>      
        </div>
        </div>
 
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>