<?php
function get_example(String $action, String $object)
{
    $selected_language = $_GET['lang'] ?? 'curl';
    $dir = array_slice(scandir('./docs'), 2);
    foreach ($dir as $language) {
        if ($language == 'go') {
            $dir = array_slice(scandir("./docs/${language}/examples"), 2);
            foreach ($dir as $godir) {
                $subdir = array_slice(scandir("./docs/${language}/examples/$godir"), 2);
                foreach ($subdir as $example) {
                    if ($selected_language == $language) {
                        if (str_contains($example, $action) && str_contains($example, $object)) {
                            echo "<h3>${language} example</h3>";
                            echo "<code><pre>" . file_get_contents("./docs/${language}/examples" . '/' . $godir . '/' . $example) . "</pre></code>";
                            echo "<hr />";
                        }
                    }
                }
            }
        } else {
            $dir = array_slice(scandir("./docs/${language}/examples"), 2);
            foreach ($dir as $example) {
                if ($selected_language == $language) {
                    if (str_contains($example, $action) && str_contains($example, $object)) {
                        echo "<h3>${language} example</h3>";
                        // TODO: We need to escape the file contents because PHP examples are getting run as code
                        echo "<code><pre>" . file_get_contents("./docs/${language}/examples" . '/' . $example) . "</pre></code>";
                        echo "<hr />";
                    }
                }
            }
        }
    }
}
