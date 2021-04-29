<?php

$defineEmployee = [
    [
        "photo" => "<img src='http://localhost/2021-04-27/uploads/jg.jpg' alt='' class='img-thumbnail'>",
        "name" => "Jurgis",
        "surname" => "Gudauskas",
        "experience" => 9,
        "title" => "Head of Marketing",
    ],
];

if (empty($_POST) == false) {
    $employee_added = FALSE;

    if (count(array_intersect_key($defineEmployee[0], $_POST)) == 4) {

        if (!isset($_SESSION['employees'])) {
            $_SESSION['employees'] = [];
        }

        $_SESSION['employees'][] = $_POST;

        $employee_added = TRUE;
    }

    define('EMPLOYEE_ADDED', $employee_added);
}

array_unshift($defineEmployee, array_map('ucfirst', array_keys($defineEmployee[0])));

if (isset($_SESSION['employees'])) {
    $defineEmployee = array_merge($defineEmployee, $_SESSION['employees']);
}

