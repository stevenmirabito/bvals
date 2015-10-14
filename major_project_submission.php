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
        <div class="panel-heading"><h3 class="panel-title">Major Project Submission Form</h3></div>
        <div class="panel-body">
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
      <textarea class="form-control" name="description" rows="5" style="resize: none;" placeholder="Description"></textarea>
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
<script src="js/plugins/alertify.min.js"></script>
</body>
</html>