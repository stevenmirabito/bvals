<!DOCTYPE html>
<html lang="en" ng-app="evals">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico">
    <title>CSH Evaluations</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/members.min.css" rel="stylesheet">
    <link href="css/evals.css" rel="stylesheet">
</head>

<body ng-controller="MemberInfoController as member">

<?php
    include('nav.php');
?>

<div class="container main">
    
        
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <img class="thumbnail profile-image" ng-src="https://profiles.csh.rit.edu/image/{{member.data.username}}">
                </div>
                <div class=" col-xs-12 col-sm-9 col-md-10" >
                    <h1 class="username" ng-cloak>{{member.data.username}}</h1>
                    <div class="profile-badges" ng-cloak>
                        <span class="label label-success" ng-show="member.data.active">Active</span>
                        <span class="label label-danger" ng-hide="member.data.active">Inactive</span>
                        <span class="label label-primary" ng-show="member.data.on_floor">On-floor</span>
                        <span class="label label-default" ng-hide="member.data.on_floor">Off-floor</span>
                        <span class="label label-primary" ng-show="member.data.voting">Voting</span>
                        <span class="label label-default" ng-hide="member.data.voting">Non-Voting</span>
                    </div>
                </div>
            </div>
    <hr>
            <div id="grid" data-columns>
                <housing-widget></housing-widget>
                <evaluations-widget></evaluations-widget>
                <conditionals-widget></conditionals-widget>
                <major-projects-widget></major-projects-widget>
                <attendance-widget></attendance-widget>
            </div>
        
    
</div>

<script src="js/libraries/jquery.min.js"></script>
<script src="js/libraries/bootstrap.min.js"></script>
<script src="js/libraries/angular.min.js"></script>
<script src="js/plugins/salvattore.min.js"></script>
<script src="js/plugins/dirPagination.js"></script>
<script src="js/app.js"></script>
</body>
</html>