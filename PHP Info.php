<!DOCTYPE html>
<html>
<body>

<?php
    // This code outputs the "PHP version" in a 'right-aligned' styled <div> tag
    echo "<div style='text-align: right;'>PHP Version: " . phpversion() . "</div>";
    
    // This code outputs the same "PHP version", but uses variables with a special function 
    // and a 'right-aligned' styled <div> tag

    // $text = "PHP Version: " . phpversion();
    // echo '<div style="text-align: right;">' . htmlspecialchars($text) . '</div>';

    // --------------------------------------------------------------------------------------------------------------------------
    // This section of code is a simple 'echo' function that outputs text
    echo "<p><center>An Introduction to PHP</center></p>";
    echo "<br>";

    echo "What is PHP?";
    echo "<br>";
    echo "PHP is an open-source, general-purpose scripting language built using the C language, 
    and is widely used in web development.";
    echo "<br><br>";
    
    echo "What does PHP stand for?";
    echo "<br>";
    echo "PHP stands for 'PHP: Hypertext Preprocessor'.";
    echo "<br>";
    echo "PHP originally stood for 'Personal Home Page'; but today, it uses a recursive acronym that refers to itself.";
    echo "<br><br>";
    
    echo "Why should you learn PHP?";
    echo "<br>";
    echo "PHP is easy to learn, has a large community, and is widely used in web development. 
    It allows you to create dynamic web pages, interact with databases, and build web applications.";
    echo "<br><br>";
    
    echo "How does learning PHP benefit you?";
    echo "<br>";
    echo "PHP can be embedded directly into 'HTML' and is excellent for creating simple websites or a full-fledged 
    'Software as a Service (SaaS)' application.";
    echo "<br>";
    echo "PHP is also the foundational language of 'Laravel', one of the most in-demand open-source PHP frameworks which
    speeds up development and uses a design pattern for building adavanced web applications called 'MVC'.";
    echo "<br><br>";

    echo "What does MVC stand for?";
    echo "<br>";
    echo "MVC stands for 'Model-View-Controller'. 
    It is a design pattern that separates the application logic into three interconnected components.";
    echo "<br>";
    echo "The 'Model' represents the data and business logic, the 'View' is responsible for the user interface, 
    and the 'Controller' handles user input and interacts with the model.";
    echo "<br><br>";
    // --------------------------------------------------------------------------------------------------------------------------
    echo "For coding examples, you can refer to the other project files or the PHP cheatsheet in the following link:";
    echo "<br>";
    
    $link = "https://github.com/LeCoupa/awesome-cheatsheets/blob/master/languages/php.php";
    $text = "Click this link for more PHP Examples";
    echo "<a href=\"$link\">$text</a>";
?> 

</body>
</html>