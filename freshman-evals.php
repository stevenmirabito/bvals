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

<div class="container main" ng-controller="EvaluationResultsController as evalResults" ng-init="type='freshman'">
    
        <h4 class="mobile-text-center">Freshman Evaluations</h4>
            <hr>
            <table class="table table-striped table-responsive">
                <tbody>
                <tr>
                    <th>Name</th>
                    <th>Packet Due</th>
                    <th>Evaluations Date</th>
                    <th>Signatures Missed</th>
                    <th>Committee Meetings</th>
                    <th>House Meetings Missed</th>
                    <th>House Meeting Comments</th>
                    <th>Technical Seminars</th>
                    <th>Social Events</th>
                    <th>Freshmen Project</th>
                    <th>Comments</th>
                    <th>Result</th>
                </tr>
                <tr ng-repeat="freshman in evalResults.data">
                    <td>{{freshman.username}}</td>
                    <td>{{freshman.packetDueDate | date:'MMMM dd, yyyy'}}</td>
                    <td>{{freshman.voteDate | date:'MMMM dd, yyyy'}}</td>
                    <td>
                        <span class="glyphicon glyphicon-remove-sign red" ng-hide="freshman.numMissedSigs == '0'"></span>
                        <span class="glyphicon glyphicon-ok-sign green" ng-show="freshman.numMissedSigs == '0'"></span>
                        {{freshman.numMissedSigs}}
                    </td>
                    <td>
                        <span class="glyphicon glyphicon-remove-sign red" ng-show="parseInt(freshman.getCommitteeMeetingsForMember(freshman.username)) < 10"></span>
                        <span class="glyphicon glyphicon-ok-sign green" ng-hide="parseInt(freshman.getCommitteeMeetingsForMember(freshman.username)) < 10"></span>
                        {{freshman.getCommitteeMeetingsForMember(freshman.username)}}
                    </td>
                    <td>
                        <span class="glyphicon glyphicon-remove-sign red" ng-show="parseInt(freshman.getHouseMeetingsMissedForMember(freshman.username)) > 0"></span>
                        <span class="glyphicon glyphicon-ok-sign green" ng-hide="parseInt(freshman.getHouseMeetingsMissedForMember(freshman.username)) > 0"></span>
                        {{freshman.getHouseMeetingsMissedForMember(freshman.username)}}
                    </td>
                    <td>
                        <div ng-repeat="comment in house_meetings_comments">{{comment}}</div>
                    </td>
                    <td>
                        <span class="glyphicon glyphicon-remove-sign red" ng-show="parseInt(freshman.numTechSems) > 2"></span>
                        <span class="glyphicon glyphicon-ok-sign green" ng-hide="parseInt(freshman.numTechSems) > 2"></span>
                        {{freshman.numTechSems}}
                    </td>
                    <td>
                        <span class="glyphicon glyphicon-remove-sign red" ng-show="parseInt(freshman.numSocEvents) > 1"></span>
                        <span class="glyphicon glyphicon-ok-sign green" ng-hide="parseInt(freshman.numSocEvents) > 1"></span>
                        {{freshman.numSocEvents}}
                    </td>
                    <td>
                        <span ng-show="freshman.freshProjPass == '1'"><span class="glyphicon glyphicon-ok-sign green"></span> Pass</span>
                        <span ng-hide="freshman.freshProjPass == '1'"><span class="glyphicon glyphicon-remove-sign red"></span> Fail</span>
                    </td>
                    <td>
                        <div ng-show="freshman.comments">{{freshman.comments}}</div>
                        <div ng-hide="freshman.comments">None</div>
                    </td>
                    <td>

                    </td>

                    <td>{{conditional.description}}</td>
                    <td>{{conditional.deadline | date:'MMMM dd, yyyy'}}</td>
                    <td ng-show="conditional.status=='pending'"><span class="glyphicon glyphicon-hourglass yellow"></span> Pending</td>
                    <td ng-show="conditional.status=='pass'"><span class="glyphicon glyphicon-ok-sign green"></span> Passed</td>
                    <td ng-show="conditional.status=='fail'"><span class="glyphicon glyphicon-remove-sign red"></span> Failed</td>
                </tr>
                </tbody>
            </table>
        
    
</div>

<script src="js/libraries/jquery.min.js"></script>
<script src="js/libraries/bootstrap.min.js"></script>
<script src="js/libraries/angular.min.js"></script>
<script src="js/plugins/salvattore.min.js"></script>
<script src="js/plugins/dirPagination.js"></script>
<script src="js/app.js"></script>
</body>
</html>
</html>