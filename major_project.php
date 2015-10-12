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

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/csh_logo_white.svg" alt="CSH" class="logo"> <span>Evaluations</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-copy"></span> Submit Forms <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-blackboard"></span> Major Project Form</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-stats"></span> Evaluation Forms</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-stats"></span> Evaluation Results <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span> Freshman Evaluations</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-tree-conifer"></span> Winter Evaluations</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-tree-deciduous"></span> Spring Evaluations</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-blackboard"></span> Major Projects</a></li>
                <li><a href="conditional.html"><span class="glyphicon glyphicon-exclamation-sign"></span> Conditionals</a></li>
                <li><a href="housing.html"><span class="glyphicon glyphicon-home"></span> Housing</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ng-cloak><img src="https://profiles.csh.rit.edu/image/{{member.data.username}}" class="profile-picture"> {{member.data.username}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.html"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                        <li><a href="https://profiles.csh.rit.edu/user/{{member.data.username}}"><span class="glyphicon glyphicon-user"></span> Profiles</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://members.csh.rit.edu/"><span class="glyphicon glyphicon-globe"></span> Members Portal</a></li>
                        <li><a href="https://webauth.csh.rit.edu/logout"><span class="glyphicon glyphicon-log-out"></span> Webauth Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container main">
    <div class="panel panel-default">
        <div class="panel-body">
            <h2>Major Projects</h2>
            <form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="commitee">Committee:</label>
    <div class="col-sm-10">
      <select class="form-control" name="committee">
        <option>Evaluations</option>
        <option>Financial</option>
        <option>House History</option>
        <option>House Improvements</option>
        <option>OpComm</option>
        <option>Research and Development</option>
        <option>Social</option>
        <option>Chairman</option>
        </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="project-name">Project Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="project-name" placeholder="Project Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="description">Description:</label>
    <div class="col-sm-10"> 
      <textarea class="form-control" name="description" rows="5" placeholder="Description"></textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
        </div>
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