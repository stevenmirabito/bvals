<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/csh_logo_white.svg" alt="CSH" class="logo"> <span>Evals</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-stats"></span> Evaluations <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="freshman-evals.php"><span class="glyphicon glyphicon-star"></span> Freshman Evaluations</a></li>
                        <li><a href="spring-evals.php"><span class="glyphicon glyphicon-tree-deciduous"></span> Spring Evaluations</a></li>
                        <li><a href="major_project_submission.php"><span class="glyphicon glyphicon-blackboard"></span> Major Project Form</a></li>
                        <li><a href="evals_submission.php"><span class="glyphicon glyphicon-stats"></span> Freshman Evaluations Form</a></li>
                    </ul>
                </li>
                <li><a href="list_projects.php"><span class="glyphicon glyphicon-blackboard"></span> Major Projects</a></li>
                <li><a href="conditional.php"><span class="glyphicon glyphicon-exclamation-sign"></span> Conditionals</a></li>
                <li><a href="housing.php"><span class="glyphicon glyphicon-home"></span> Housing</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ng-cloak><img src="https://profiles.csh.rit.edu/image/{{member.data.username}}" class="profile-picture"> {{member.data.username}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
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

