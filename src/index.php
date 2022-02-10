<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tuneup Technology Docs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tuneup Technology Docs</h1>

        <?php
        $dir = array_slice(scandir('./docs'), 2);
        foreach ($dir as $language) {
            if ($language == 'go') {
                echo "<h2>${language} Examples</h2>";

                $dir = array_slice(scandir("./docs/${language}/examples"), 2);
                foreach ($dir as $godir) {
                    $subdir = array_slice(scandir("./docs/${language}/examples/$godir"), 2);
                    foreach ($subdir as $example) {
                        echo "<h3>" . $example . "</h3>";
                        echo "<code>" . nl2br(file_get_contents("./docs/${language}/examples" . '/' . $godir . '/' . $example)) . "</code>";
                        echo "<hr />";
                    }
                }
            } else {
                echo "<h2>${language} Examples</h2>";

                $dir = array_slice(scandir("./docs/${language}/examples"), 2);
                foreach ($dir as $example) {
                    echo "<h3>" . $example . "</h3>";
                    echo "<code>" . nl2br(file_get_contents("./docs/${language}/examples" . '/' . $example)) . "</code>";
                    echo "<hr />";
                }
            }
        }
        ?>
    </div>
</body>

</html>
