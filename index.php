<?php

include 'db.php';

$result = $conn-> query("SELECT * FROM users");

?>

<!DOCTYPE html> 

<html> 
    <head>
         <title>Formulario</title> <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
         <link rel="stylesheet" href="style.css"> </head>

<body>
     <div class="container"> 
        <h1>Formulario </h1>

        <form action="insert.php" method="POST"> 


        <div class="input-group">

            <div class="field">
                <h5>First Name </h5>
                <input 
                    type="text" 
                    name="name" 
                    placeholder="Enter first name" 
                    required >
            </div>
        
            <div class="field">
                <h5>Last Name </h5>
                <input 
                    type="text" 
                    name="lastname" 
                    placeholder="Enter last name" 
                    required >
            </div>

        </div>
                <h5>Email Address </h5>
                <input 
                    type="email" 
                    name="email" 
                    placeholder="Enter email" 
                    required >

        <div class="input-group">
                <div class="field">
                    <h5>Password </h5>

                <input 
                    type="password" 
                    name="password" 
                    placeholder="Enter password" 
                    required >
                </div>

                <div class="field">
                <h5>Confirm Password </h5>
                <input 
                    type="password" 
                    name="confirm_password" 
                    placeholder="Confirm password" 
                    required >
                </div>
        </div>
            
        <div class="terms">
            <input type="checkbox" name="terms" required>

            <label for="terms"> 
                I accept the terms and conditions 
            </label>
        </div>

        <button type="submit"> Add users </button>

        
        <table> 
            <tr> 
                <th>ID </th> 
                <th>Name </th> 
                <th>Lastname </th> 
                <th>Email </th> 
                <th>Password </th> 
                <th>Confirm Password </th>
            </tr> 
    
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>

            <td><?= $row['id'] ?></td>

            <td><?= $row['first_name'] ?></td>

            <td><?= $row['last_name'] ?></td>

            <td><?= $row['email'] ?></td>

            <td>••••••••</td>


            <td>

            <a 
            href="delete.php?id=<?= $row['id'] ?>"
            onclick="return confirm('delete user?')"
            >
            Delete
            </a>
  
</td>
</tr>
<?php } ?>
</table>
</body>
</html>