<html>
    <header>
        <meta charset="UTF-8">
        <title>Upload Superglobal</title>
    </header>
    <body>
        <?php
        // We are going to check if the file is submitted, that is why we need to call
        // the 'submit' method.
        if (isset($_POST['submit'])){
            $file = $_FILES['file'];
            $name = $_FILES['file']['name'];        // find file name
            $tmp_name = $_FILES['file']['tmp_name'];    // find file temp location
            $size = $_FILES['file']['size'];        // find file size
            $error = $_FILES['file']['error'];       // find error

            $tempExtension = explode('.', $name);   // This makes a string out of the file extension. It will split the name and the extension when finding a punctuation.
            $fileExtension = strtolower(end($tempExtension));          // We want to convert the extension into small letters to avoid problems in case the extension is using capital letters.
        
            // Allowed extensions
            $isAllowed = array('jpeg', 'jpg', 'png', 'pdf');
        echo "File name: ". $name = $_FILES['file']['name']."<br>";
        echo "File type: ". $type = $_FILES['file']['type']."<br>";
        echo "File temporary location: ". $tmp_location = $_FILES['file']['tmp_name']."<br>";

            // 0 = no error, 1 = error.
            if (in_array($fileExtension, $isAllowed)){
                if ($error === 0){
                   if ($size < 50000){             // This checks if the file size is less than 50k Kb. In PHP the size of the files is measured in Kb.
                            $newFileName = uniqid('', true).".".$fileExtension;    // assigns a Unique name according to upload time
                            $fileDestination = "updates/".$newFileName;
                       echo $fileDestination;
                            move_uploaded_file($tmp_name, $fileDestination);
                            header("Location: files.php?uploadedsuccess");
                    } else { echo "Sorry, your file is too big"."<br>";
                    }
                } else { echo "Sorry, there was an error! Try again"."<br>";
                }
            } else {
              echo "File not supported"."<br>";
            }

        }
        
        ?>
    </body>
</html>