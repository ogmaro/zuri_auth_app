<?php

spl_autoload_register(function ($className) {

    include_once($_SERVER['DOCUMENT_ROOT'] . '/App/Class/' . $className . '.php');
});
