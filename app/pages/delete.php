<?php
    $id = $_GET['id'];
    $not_find_msg = true;
    for ($i = 0; $i < count($all_messages); $i++) {
        if ($id == $all_messages[$i]['message_id']) {
            $_SESSION['delete_msg_id'] = $id;
            delete_message($message);
            $not_find_msg = false;
        }
    }
    if ($not_find_msg) {
        echo "<script> alert('Не получилось!'); </script>";
    }

