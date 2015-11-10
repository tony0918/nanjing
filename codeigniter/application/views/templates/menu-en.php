<nav class="main-navigation navbar navbar-default">
  <div class="container-fluid">
    <div class="row">
      <div class="navbar-header col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <img src="<?php echo $baseUrl; ?>images/logo.jpg" alt="" class="img-responsive">
      </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div id="navbar" class="collapse navbar-collapse pull-right main-menu col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <ul class="nav navbar-nav navbar-right">
          <li class="first"><a href="http://www.huluanpao.com">BRAND WEBSITE</a></li>
          <li><a href="<?php echo $baseUrl; ?>en">HOME</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENTS&nbsp;<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="<?php echo $baseUrl; ?>en/race.html" class="text-center">About Race</a>
              </li>
              <li>
                <a href="<?php echo $baseUrl; ?>en/race/rule.html" class="text-center">Competition Rules</a>
              </li>
              <li>
                <a href="<?php echo $baseUrl; ?>en/race/map.html" class="text-center">Route Map</a>
              </li>
              <li>
                <a href="<?php echo $baseUrl; ?>en/race/faq.html" class="text-center">常见问题</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REGISTRATION&nbsp;<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="<?php echo $baseUrl; ?>en/signup/guidelines.html" class="text-center">报名须知</a>
              </li>
              <li>
                <a href="<?php echo $baseUrl; ?>en/signup.html" class="text-center">Registrate Immediately</a>
              </li>
              <li>
                <a href="<?php echo $baseUrl; ?>en/signup/query.html" class="text-center">Registration Status Check</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RESULT AND PHOTOS&nbsp;<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="<?php echo $baseUrl; ?>en/result.html" class="text-center">Query Result</a>
              </li>
              <li>
                <a href="<?php echo $baseUrl; ?>en/photos.html" class="text-center">Photo Download</a>
              </li>
            </ul>
          </li>
          <li><a href="<?php echo $baseUrl; ?>en/sponsor.html">PARTNERS</a></li>
<!--          <li class="dropdown">-->
<!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">赛事赞助&nbsp;<span class="caret"></span>-->
<!--            </a>-->
<!--            <ul class="dropdown-menu">-->
<!--              <li>-->
<!--                <a href="--><?php //echo $baseUrl; ?><!--sponsor/sponsorship.html" class="text-center">赛事合作</a>-->
<!--              </li>-->
<!--              <li>-->
<!--                <a href="--><?php //echo $baseUrl; ?><!--sponsor.html" class="text-center">赞助商</a>-->
<!--              </li>-->
<!--            </ul>-->
<!--          </li>-->
          <li class="last">
            <div>
              <div class="btn-group btn-group-xs" role="group" aria-label="">
                <a href="<?php echo $baseUrl; ?>" class="btn btn-primary">CH</a>
                <a href="#" class="btn btn-default" disabled="disabled">EN</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>