<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/csh_logo_white.svg" alt="CSH" class="logo"> <span>Evaluations</span></a>
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
                <li class="active"><a href="conditional.html"><span class="glyphicon glyphicon-exclamation-sign"></span> Conditionals</a></li>
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

