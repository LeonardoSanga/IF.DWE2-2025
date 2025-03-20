<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        if (!empty($value)) {
            setcookie($key, $value, time() + 3600, "/");
        }
    }
}
?>