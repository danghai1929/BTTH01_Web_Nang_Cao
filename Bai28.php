<!DOCTYPE html>
<html>
    <head>
        <title>Bài 28</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 28</h1> 
        <?php
            // Create a temporary file in the temporary 
            // files directory using sys_get_temp_dir()
            $temp_file = tempnam(sys_get_temp_dir(), 'Tux');
            echo $temp_file."\n";
        ?>
    </body>
</html>