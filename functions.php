<?php

function formatDate ($date) {
    return date('F j, Y, g:j a', strtotime($date));
}

?>