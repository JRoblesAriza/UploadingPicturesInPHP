<htm>
    <head>
        <meta charset="UTF-8">
        <title>FILES Superglobal</title>
    </head>
    <body>
        <?php
        // $_FILES
        // We can upload files in two different ways:
        // 1. Upload it to the root
        // 2. Directly to the database

        // enctype specifies how the form data should be encoded.
        
        /*echo $name = $_FILES['file']['name']."<br>";
        echo $type = $_FILES['file']['type']."<br>";
        echo $tmp_location = $_FILES['file']['tmp_name']."<br>";*/
        ?>
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type = "submit" name = "submit">SUBMIT</button>
        </form>
    </body>
</htm>

