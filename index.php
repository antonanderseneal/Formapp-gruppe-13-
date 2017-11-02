<?php
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formapp</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body     { padding-top:30px; }
    </style>


    <!-- JS -->
    <script src="https://code.angularjs.org/1.4.0-rc.1/angular.js"></script>
    <script src="app.js"></script>

</head>
<body>
<body ng-app="validationApp" ng-controller="mainController">

<div class="container">

    <!-- PAGE HEADER -->
    <div class="page-header1"><h1>Brandts Klædefabrik</h1></div>
    <div class="page-header"><h3>Create a new user</h3></div>

    <!-- FORM ============================================================== -->

    <!-- pass in the variable if our form is valid or invalid -->
    <form action="send.php" method="post" name="userForm" ng-submit="submitForm(userForm.$valid)" novalidate>

        <!-- NAME -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
            <label>Name*</label>
            <input type="text" name="name" class="form-control" ng-model="user.name" required>
            <p ng-show="userForm.name.$invalid && !userForm.name.$pristine" class="help-block">You name is required.</p>
        </div>

        <!-- SURNAME -->
        <div class="form-group2" ng-class="{ 'has-error' : userForm.surname.$invalid && !userForm.surname.$pristine }">
            <label>Surname*</label>
            <input type="text" name="surname" class="form-control" ng-model="surname" required>
            <p ng-show="userForm.name.$invalid && !userForm.name.$pristine" class="help-block">You surname is required.</p>
        </div>

        <!-- USERNAME -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.username.$invalid && !userForm.username.$pristine }">
            <label>Username*</label>
            <input type="text" name="username" class="form-control" ng-model="user.username" ng-minlength="3" ng-maxlength="8">
            <p ng-show="userForm.username.$error.minlength" class="help-block">Username is too short.</p>
            <p ng-show="userForm.username.$error.maxlength" class="help-block">Username is too long.</p>
        </div>

        <!-- EMAIL -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }">
            <label>Email*</label>
            <input type="email" name="email" class="form-control" ng-model="user.email">
            <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">Enter a valid email.</p>
        </div>

        <!-- Password -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }">
            <label>Password*</label>
            <input type="password" name="password" class="form-control" ng-model="password">
            <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">Enter a code.</p>
        </div>

        <!-- Repeat password -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }">
            <label>Repeat Password*</label>
            <input type="password" name="password2" class="form-control" ng-model="password2">
            <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">.</p>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>

    </form>


</body>
</html>

</body>
</html>