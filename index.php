<!DOCTYPE html>

<head>
    <title>Idea tank</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.brendongames.com/site/image/favicon.png">

    <script>
        setTimeout(function() {
            document.body.className = "";
        }, 500);
    </script>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        body.preload * {
            animation-duration: 0s !important;
            -webkit-animation-duration: 0s !important;
            transition: background-color 0s, opacity 0s, color 0s, width 0s, height 0s, padding 0s, margin 0s !important;
        }

        /* 
        table,
        th,
        tr {
            min-width: 100%;
            padding: 5px;
            border: 5px solid;
            border-collapse: collapse;
            text-align: justify;
            text-justify: inter-word;
            overflow-wrap: break-word;
            max-width: fit-content;
        }

        table {
            min-height: 100%;
        }

        .idea_title {
            text-align: center;
            height: fit-content;
        }
        */

        .idea_list {
            display: grid;
            grid-auto-flow: row;
            grid-template-rows: repeat(auto-fit, 475px);
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            grid-auto-rows: 475px;
            grid-auto-columns: minmax(400px, 1fr); 
            
            justify-items: stretch;
            place-content: center;
            border: 2px solid yellow;
            justify-items: stretch
        }


        .idea {
            padding: 5px;
            text-align: justify;
            text-justify: inter-word;
            overflow-wrap: break-word;
            word-wrap: break-word;
            border: 2px solid blue;
        }

        .idea_title {
            min-width: 95%;
            padding: 5px;
            border: 5px solid;
            text-align: center;
            text-justify: inter-word;
            overflow-wrap: break-word;
            border-collapse: collapse;
            -ms-transform: translateY(5px);
            transform: translateY(5px);
        }

        .idea_description {
            min-width: 95%;
            padding: 5px;
            border: 5px solid;
            text-align: justify;
            text-justify: inter-word;
            overflow-wrap: break-word;
            border-collapse: collapse;
        }

        .top-bar {
            background-color: black;
            height: 50px;
            overflow: hidden;
            display: flex;
            box-sizing: border-box;
        }

        .new_button {
            color: black;
            text-decoration: none;
            justify-content: center;
            align-items: center;
            background-color: white;
            width: 150px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 250ms;
            height: 40px;
            border: black 2px solid;
            margin-right: 10px;
            margin-left: auto;
            position: relative;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .new_button:hover {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body class="preload">

    <div class="top-bar">
        <a class="new_button" href="/new/">
            Create new
        </a>
    </div>


    <?php
    // Load environment variables
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
    // echo 'Connected successfully';

    $sql = 'SELECT * FROM ideas ORDER BY idea_date DESC';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        echo '<div class="idea_list">';
        while ($row = $result->fetch_assoc()) {
            echo '
                <div class="idea">
                        <div class="idea_title"> 
                            ' . $row['idea_title'] . ' 
                        </div>
                        <div class="idea_description">
                            ' . $row['description'] . '
                        </div>
                </div>
            ';
        }
        echo '</div>';
    } else {
        echo '0 results';
    }

    // Close connection
    $conn->close();
    ?>
</body>



<!-- <div class="idea">
    id: ' . $row['idea_id'] . ' - Title: ' . $row['idea_title'] . '<br>' . 'description: ' . $row['description'] .
</div> -->
