<!DOCTYPE html>

<head>
    <title>Edit idea</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $dbHost = 'mysql'; // The service name of your MySQL container
    $dbName = 'test_ideas'; // Name of the database
    $dbUser = getenv('dbuser'); // Your database user
    $dbPass = getenv('dbuserpassword'); // Your database password

    // Create connection
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $sql = 'SELECT * FROM ideas ORDER BY idea_id';
    $result = $conn->query($sql);

    if (isset($_GET['id'])) {
        echo 'The current ID is ' . $_GET['id'] . '. That means you got here via the correct link.';
    } else {
        echo '
            It seems like you didn\'t get here properly... Which idea to edit?<br><br>
        ';
        while ($row = $result->fetch_assoc()) {
            echo $row['idea_id'] . '. ' . $row['idea_title'] . '<br>';
        }
    }

    ?>
</body>
