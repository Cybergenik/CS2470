<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mobil App Demo</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/base.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                //tool tipper
                $('[data-toggle="tooltip"]').tooltip();

                //profile
                $('#profile').on('affix.bs.affix', function () {
                    $(this).width($(this).width() - 1);
                    $('#main').addClass('col-md-offset-3');
                }).on('affix-top.bs.affix', function () {
                    $(this).css('width', '');
                    $('#main').removeClass('col-md-offset-3');
                });
            });

        </script>
    </head>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">
                    <img src="imgs/yog.jpg" class="img-responsive" style="height: 32px">
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button id="tweet" class="btn btn-default pull-right visible-xs-block" >
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    Tweet
                </button>
                <!-- <a class="btn btn-primary navbar-btn pull-left" href="#" role="button">Sign up</a> -->
            </div>

            <div id="nav-menu" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="badge">5</span>
                            <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                            Notifications
                        </a>
                    </li>
                    <li>
                        <a href="#" role="button" data-toggle="modal" data-target="#messages-modal">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true" ></span>
                            Messages
                        </a>
                    </li>
                    <li class="visible-xs-inline">
                        <a href="#">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            Profile
                        </a>
                    </li>
                    <li class="visible-xs-inline">
                        <a href="#">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            Logout
                        </a>
                    </li>
                </ul>
                <button id="tweet" class="btn btn-default pull-right hidden-xs" data-toggle="modal" data-target="#tweet-modal">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    Post
                </button>
                <div id="nav-options" class="btn-group pull-right hidden-xs">
                    <button type="button" class="btn btn-default dropdown-toggle thumbnail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="imgs/profile.png" style="height:32px">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <form id="search" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <body>
        <div class="container">
            <div class="row">
                <div id="profile" class="col-md-3 hidden-sm hidden-xs" data-spy="affix" data-offset-top="0">
                    <div id="profile-resume" class="card" style="top: 20px;">
                        <img class="card-img-top img-responsive" src="imgs/brain.jpg">
                        <div class="card-block">
                            <img src="imgs/priest.png" class="card-img">
                            <h4 class="card-title">Luciano Remes<a href="https://www.lremes.com/"><small>lremes.com</small></a></h4>
                            <p class="card-text">CompSci Student & Programmer</p>
                            <ul class="list-inline list-unstyled">
                                <li id="card-tweets">
                                    <a href="#">
                                        <span class="profile-stats">Tweets</span>
                                        <span class="profile-value">257</span>
                                    </a>
                                </li>
                                <li class="card-following">
                                    <a href="#">
                                        <span class="profile-stats">Following</span>
                                        <span class="profile-value">99</span>
                                    </a>
                                </li>
                                <li class="card-followers">
                                    <a href="#">
                                        <span class="profile-stats">Followers</span>
                                        <span class="profile-value">100k</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="profile-photo" class="card">
                            <div class="card-header">Photos</div>
                            <div class="card-block">
                                <ul class="list-inline list-unstyled">
                                    <li>
                                        <a href="#" class="thumbnail"><img class="img-responsive" src="imgs/lee.jpg"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="thumbnail"><img class="img-responsive" src="imgs/rock.jpg"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="thumbnail"><img class="img-responsive" src="imgs/baby.jpg"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="thumbnail"><img class="img-responsive" src="imgs/tux.jpg"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main" class="col-sm-12 col-md-6"> 
                    <div id="main-card" class="card" style="top: 20px;">
                        <form id="new-message">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="What is happening?">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                                </span>
                            </div>
                        </form>
                        <ul id="feed" class="list-unstyled">
                            <li>
                                <img src="imgs/dude.png" class="feed-avatar img-circle" style="size: 1%">
                                <div class="feed-post">
                                    <h5>Michael<small>@michelle_league</small></h5>
                                    <p> No! Lets play some Overwatch</p>
                                </div>
                                <div class="action-list">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Reply">
                                        <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Retweet">
                                        <span class="glyphicon glyphicon-refresh " aria-hidden="true"></span>
                                        <span class="retweet-count">6</span>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Start">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <img src="imgs/ball.jpg" class="feed-avatar img-circle">
                                <div class="feed-post">
                                    <h5>Jozey<small>@Jo.brosifish</small></h5>
                                    <p>Lets play WoW</p>
                                </div>
                                <div class="action-list">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Reply">
                                        <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Retweet">
                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                                        <span class="retweet-count">6</span>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Star">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <nav class="text-center">
                        <ul class="pagination pagination-lg">
                            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li class="disabled"><a href="#">...</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div id="right-content" class="col-md-3 hidden-sm hidden-xs"> 
                    <div id="who-follow" class="card" style="top: 20px;">
                        <div class="card-header">
                            Trending
                        </div>
                        <div class="card-block">
                            <ul class="list-unstyled">
                                <li>
                                    <img src="imgs/corona.jpg" class="img-rounded">
                                    <div class="info">
                                        <a href="https://www.cdc.gov/coronavirus/2019-ncov/index.html" role="button" tabindex="-1" class="btn btn-default" data-toggle="popover" data-trigger="focus" title="You may want to follow">
                                            <span aria-hidden="true"></span> <strong>Corona</strong>
                                        </a>
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <img src="imgs/trump.jpg" class="img-rounded">
                                    <div class="info">
                                        <a href="https://www.whitehouse.gov/briefings-statements/" role="button" tabindex="-1" class="btn btn-default" data-toggle="popover" data-trigger="focus" title="You may want to follow">
                                            <span aria-hidden="true"></span> <strong>Trump</strong>
                                        </a>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
    <div class="modal fade" id="tweet-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" rows="4" placeholder="What will you say?" maxlength="140"></textarea>
                </div>
                <div class="modal-footer">
                    <span class="char-count pull-left" data-max="140">140</span>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="messages-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">New</h4>
                    <button type="button" class="btn btn-primary btn-message">Message</button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <img src="imgs/dude.png" class="img-circle">
                                <div class="msg-content">
                                    <h5>Michael<small>@michelle_league</small></h5>
                                    <p style="color: white;">The new champ Ekko comes out, lets play!</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="imgs/yog.jpg" class="img-circle">
                                <div class="msg-content">
                                    <h5>Jozey <small>@Jo.brosifish</small></h5>
                                    <p style="color: white;">What is the meaning of life?</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="imgs/yog.jpg" class="img-circle">
                                <div class="msg-content">
                                    <h5>Jozey <small>@Jo.brosifish</small></h5>
                                    <p style="color: white;">We ran out of milk bro...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="imgs/priest.png" class="img-circle">
                                <div class="msg-content">
                                    <h5>Franco<small>@Fr_Sinatra</small></h5>
                                    <p style="color: white;">I've been preparing for corona my entire life, I stay home all day anyway.</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</html>
