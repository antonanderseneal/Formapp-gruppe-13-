<?php

function getProfiles() {
    $data = file_get_contents('data.json');
    return json_decode($data, 1);
}

function setProfiles($Profiles) {
    $data = json_encode($Profiles);
    file_put_contents('data.json', $data);
}

function saveProfile() {
    $Profiles = getProfiles();

    $Profiles[] = [
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'repeat password ' => $_POST['repeat password  '],
    ];

    setProfiles($Profiles);
}

?>