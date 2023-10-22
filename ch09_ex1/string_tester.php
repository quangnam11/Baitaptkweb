<!DOCTYPE html>
<html>
<head>
    <title>String Tester</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>String Tester</h1>
        <form action="." method="post">
        <input type="hidden" name="action" value="process_data">

        <label>Name:</label>
        <input type="text" name="name" 
               value="<?php echo $name; ?>">
        <br>

        <label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo $email; ?>">
        <br>

        <label>Phone Number:</label>
        <input type="text" name="phone" 
               value="<?php echo $phone; ?>">
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Submit">
        <br>

        </form>

        <h2>Message:</h2>
        <p><?php echo $message; ?></p>

    </main>
</body>
</html>