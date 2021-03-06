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
    <link rel="stylesheet" href="css/alertify.css" />
    <link rel="stylesheet" href="css/alertify.bootstrap.css" />
</head>

<body ng-controller="MemberInfoController as member">

<?php
include('nav.php');
?>

<div class="container main">
    <h4 class="mobile-text-center">Freshman Evalutations Submission Form</h4>
    <hr>
    
            <form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="commitee">Did you attend any social events?</label>
    <div class="col-sm-10">
      <select class="form-control" name="committee">
        <option>Yes</option>
        <option>No</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="project-name">Social events attended:</label>
    <div class="col-sm-10">
          <textarea class="form-control" name="description" rows="5" style="resize: none;" placeholder="Social Events"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="description">Projects worked on/other comments:</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="description" rows="5" style="resize: none;" placeholder="Projects/comments"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
        
    
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