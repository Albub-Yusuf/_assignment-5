<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
    <style>
       .container{
            width: 500px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 200px auto;
           
       }
      
    </style>
</head>
<body>
    <div class="container">
        <div class="form-body">
            <form action="superGlobals.php" method="POST">
                <label for="name"><strong>Name:</strong></label>
                <input type="text" placeholder="Enter your name here..." name="user_name" required>
                <br><br>
                <label for="email"><strong>Email:</strong></label>
                <input type="email" placeholder="Enter user email here..." name="user_email" required>
                <br> <br>
                <input type="submit" value="Submit"/>
            </form>
        </div>
    </div>
</body>
</html>