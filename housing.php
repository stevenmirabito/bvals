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
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">                       <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">On-Floor Status
                            
                            
                            
                            <div class="dropdown pull-right">
                                <button class="btn btn-default dropdown-toggle on-floor-search-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Search
                                    <span class="caret"></span>
                                </button>
  
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li style="padding:10px"><input type="search" class="form-control on-floor-search-input" placeholder="Search..." ng-model="searchText"></li>
    
  </ul>
</div>
                            
                            
                            
                    
                        </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-responsive" ng-controller="OnFloorMembersController">
                                <tbody>
                                    <tr>
                                        <th>Member</th>
                                        <th>Housing Points</th>
                                        
                                    </tr>
                                    <tr dir-paginate="member in (data | filter:searchText| orderBy: '-housingPoints') | itemsPerPage: 5" pagination-id="on" ng-cloak>
                                        <td>{{member.username}}</td>
                                        <td>{{member.housingPoints}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <dir-pagination-controls pagination-id="on" max-size="5"></dir-pagination-controls>
                        
                        
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Housing Queue</h3>
                        </div>
                        <div class="panel-body" ng-controller="HousingQueueController">
                        <table class="table table-striped table-responsive">
                                <tbody>
                                    <tr>
                                        <th>Member</th>
                                        <th>Housing Points</th>
                                        
                                    </tr>
                                    <tr dir-paginate="member in (data | orderBy: '-housingPoints') | itemsPerPage: 5" pagination-id="housing" ng-cloak>
                                        <td>{{member.username}}</td>
                                        <td>{{member.housingPoints}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <dir-pagination-controls pagination-id="housing" max-size="5"></dir-pagination-controls>
                        
                        
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">                         <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title button-panel-title">
                                Rooms
                                <div class="dropdown pull-right">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Filter
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li class="dropdown-header">Year</li>
    <li><a ng-click="updateFilter(year,c)">Current</a></li>
    <li><a ng-click="updateFilter(year,n)">Next</a></li>
    <li class="dropdown-header">Room Type</li>
    <li><a ng-click="updateFilter(room,all)">All</a></li>
    <li><a ng-click="updateFilter(room,empty)">Empty</a></li>
  </ul>
</div>
                            
                            </h3>
                        </div>
                        <div class="panel-body table-responsive" ng-controller="HousingRosterController">
                            <table class="table table-striped">
                                
                            
                            <tbody>
                                    <tr>
                                        <th>Room Number</th>
                                        <th>Housing Points</th>
                                        <th>Roommate 1</th>
                                        <th>Roommate 2</th>
                                        
                                    </tr>
                                   
                                    <!-- FIX UPDATE FILTER CALL -->
                                    <tr dir-paginate="room in (data | orderBy: '+room_number' | filter:yearFilter| filter:roomFilter) | itemsPerPage: 10" pagination-id="roster" ng-cloak>
                                        <td>{{room.room_number}}</td>
                                        <td>{{room.total_housing_points}}</td>
                                        <td>{{room.roommate1}}</td>
                                        <td>{{room.roommate2}}</td>
                                    </tr>
                                </tbody>
                                </table>
                            <dir-pagination-controls pagination-id="roster" max-size="5"></dir-pagination-controls>
                        
                    </div>
                    </div>
                
                
                </div>
            
            </div>
        </div>
    </div>
    
<!--
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="page-header row">
                <div class="col-md-2 profile-col-fix">
                    <img class="thumbnail profile-image" ng-src="https://profiles.csh.rit.edu/image/{{member.data.username}}">
                </div>
                <div class="col-md-10">
                    <h1>{{member.data.username}}</h1>
                    <span class="profile-badges">
                        <span class="label label-success" ng-show="member.data.active">Active</span>
                        <span class="label label-danger" ng-hide="member.data.active">Inactive</span>
                        <span class="label label-primary" ng-show="member.data.on_floor">On-floor</span>
                        <span class="label label-default" ng-hide="member.data.on_floor">Off-floor</span>
                        <span class="label label-primary" ng-show="member.data.voting">Voting</span>
                        <span class="label label-default" ng-hide="member.data.voting">Non-Voting</span>
                    </span>
                </div>
            </div>
            <div id="grid" data-columns>
                <housing-widget></housing-widget>
                <evaluations-widget></evaluations-widget>
                <conditionals-widget></conditionals-widget>
                <major-projects-widget></major-projects-widget>
                <attendance-widget></attendance-widget>
            </div>
        </div>
    </div>
-->
    
    
    
    
    
    
</div>

<script src="js/libraries/jquery.min.js"></script>
<script src="js/libraries/bootstrap.min.js"></script>
<script src="js/libraries/angular.min.js"></script>
<script src="js/plugins/salvattore.min.js"></script>
<script src="js/plugins/dirPagination.js"></script>
<script src="js/app.js"></script>
</body>
</html>