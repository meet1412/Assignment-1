<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            Student Records
        </title>
        <link rel="stylesheet" href="css/styles.css"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&family=Young+Serif&display=swap" rel="stylesheet">
    </head>
<body> 
    
    <nav>
    <ul><li class="menu">Menu
    
    <ul class="hidden">
        <li><a href="index.php">Home</a></li>
        <li><a href="view.php">View</a></li>
    </ul>
    </li></ul>
    </nav>

    <main> 
    <form method="post">

        <div class="title">
            Student Records
        </div>
        <!--NAME-->
        <div>
            <input type="text" name="fname" id="fname" placeholder="First Name"/>
        </div>

        <div>
            <input type="text" name="lname" id="lname" placeholder="Last Name"/>  
        </div>

        <div>
            <input type="text" name="StdID" id="StdID" placeholder="Student ID"/>
        </div>
        
        <div>
            <input type="number" name="sem" id="sem" min="1" max="5" placeholder="Semester"/>  
        </div>

        <div>
            <input type="text" name="grade" id="grade" placeholder="Total GPA"/>
        </div>

        <div class="button">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
    
    <?php
        require_once('database.php');
    ?>
    
    </main>
</body>
</html>
