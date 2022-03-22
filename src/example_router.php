<?php

/**
 * Gets an example snippet based on the language selected and the action and object.
 *
 * @param String $action
 * @param String $object
 * @return String
 */
function get_example(String $action, String $object)
{
    $selected_language = $_GET['lang'] ?? 'curl';
    $docs_dir = array_slice(scandir('./docs'), 2);
    foreach ($docs_dir as $language) {
        // GOLANG
        if ($selected_language == 'go') {
            $dir = array_slice(scandir("./docs/${selected_language}/examples"), 2);
            foreach ($dir as $godir) {
                $subdir = array_slice(scandir("./docs/${selected_language}/examples/$godir"), 2);
                foreach ($subdir as $example) {
                    if (str_contains($example, $action)) {
                        return htmlspecialchars(file_get_contents("./docs/$selected_language/examples/$godir/$example"));
                    }
                }
            }
        } else {
            // ALL OTHER LANGUAGES
            $lang_examples_dir = array_slice(scandir("./docs/$selected_language/examples"), 2);
            foreach ($lang_examples_dir as $object_dir) {
                if (str_contains($object_dir, $object)) {
                    $subdir = array_slice(scandir("./docs/$selected_language/examples/$object_dir"), 2);
                    foreach ($subdir as $example) {
                        if (str_contains($example, $action)) {
                            return htmlspecialchars(file_get_contents("./docs/$selected_language/examples/$object_dir/$example"));
                        }
                    }
                }
            }
        }
    }
}
