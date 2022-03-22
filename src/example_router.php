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
                            echo "<pre><code>" . file_get_contents("./docs/${language}/examples" . '/' . $godir . '/' . $example) . "</code></pre>";
                        }
                    }
                }
            }
        } else {
            $dir = array_slice(scandir("./docs/${language}/examples"), 2);
            foreach ($dir as $example) {
                if ($selected_language == $language) {
                    if (str_contains($example, $action) && str_contains($example, $object)) {
                        echo "<pre><code>" . htmlspecialchars(file_get_contents("./docs/${language}/examples" . '/' . $example)) . "</code></pre>";
                    }
                }
            }
        }
    }
}
