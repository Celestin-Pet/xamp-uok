<!Doctype html>
<html lang="en">
    <head>
         <meta charset="utf-8">
        <title> PHP code</title>
</head>
<body>
    <?php

 $sentence=" The main body of the book";
    echo strtolower($sentence);
    echo strtoupper($sentence);

    echo strlen($sentence);
    

    $sentence[3]="m";
    echo ($sentence);

    echo str_replace ("book","a college",$sentence);
   
    ?>
    </body>
    </html>