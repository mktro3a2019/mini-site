<?php

function log_error($err) {
    $_SESSION["error"] = $err;
}

function get_error() {
    if(isset($_SESSION["error"])) {
        $err = $_SESSION["error"];
        unset($_SESSION["error"]);
        return $err;
    } else {
        return false;
    }
}

function print_error() {
    if($err=get_error()) {
        ?>
            <div class="error">
                <?php echo $err; ?>
            </div>
        <?php
    }
}