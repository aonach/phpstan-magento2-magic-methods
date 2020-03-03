<?php

require_once 'app/bootstrap.php';

if (!in_array('phar', stream_get_wrappers()) && extension_loaded('phar')) {
    stream_wrapper_restore('phar');
}
