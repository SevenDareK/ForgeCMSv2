<?php
function isLogged() {
    if(isset($_SESSION['id'])) {
        return true;
    } else {
        return false;
    }
}