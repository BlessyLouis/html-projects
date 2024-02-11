<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with HTML and CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        form {
            margin-top: 20px;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    
    </style>
</head>
<body>

    <header>
        <h1>SCORE AND GRADE </h1>
    </header>

    <main>
    <?php
        // Your PHP code goes here
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score = $_POST["score"];
            if ($score >= 90) {
                echo "Grade: A";
            } elseif ($score >= 80) {
                echo "Grade: B";
            } elseif ($score >= 70) {
                echo "Grade: C";
            } else {
                echo "Grade: F";
            }
        }
        ?>

        <?php
        // Your second PHP code goes here
        $string = "Hello, PHP!";

        // String length
        $length = strlen($string);
        echo "<br>Length: $length<br>";

        // Convert to uppercase
        $uppercase = strtoupper($string);
        echo "Uppercase: $uppercase<br>";

        // Substring
        $substring = substr($string, 0, 5);
        echo "Substring: $substring <br>";

        // String replace
        $newString = str_replace("PHP", "World", $string);
        echo "Replaced: $newString";
        ?>

        <?php
        // Your third PHP code goes here
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            echo "<br>Hello, $name!";
        }
        ?>

        <!-- Your HTML form goes here -->
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        
           <label for="score">Enter your score:</label>
            <input type="number" name="score" id="score" min="0" max="100">
            <BR>
            <br>
            <br>
            <label for="name">Enter your name:</label>
          
            <input type="text" name="name" id="name">
            <input type="submit" value="Submit">
        </form>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> Your Company Name
    </footer>

</body>
</html>