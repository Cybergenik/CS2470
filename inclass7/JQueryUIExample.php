<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>JQueryUI Examples</title>
        <link href="css/jquery-ui.min.css" rel="stylesheet">
        <link href="css/site.css" rel="stylesheet">
        <style>
            #menu {
                float: left;
            }
            #menu > li {
                width: 10em;
                float: left;
            }
            .ui-menu .ui-menu {
                width: 10em;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#tabContainer').tabs({
                    show: 'fadeIn',
                    hide: 'fadeOut'
                });
                var hash = location.hash;
                if (hash) {
                    $('#tabContainer').tabs('load', hash) //Q1 about what loads first
                }
                //Zombie
                $('#confirm').dialog({
                    modal: true,
                    autoOpen: false,
                    buttons: {
                        "Confirm" : function() {
                            $('#zombie').effect('explode');
                            $(this).dialog('close');
                        },
                        "Cancel": function() {
                            $(this).dialog('close');
                        }
                    }
                });
                $('#zombie').click(function() {
                    $('#confirm').dialog('open');
                });
                //DOB
                $('#dob').datepicker({
                    changeMonth : true,
                    changeYear : true,
                    yearRange : '-120:+0',
                    maxDate : 0,
                    dateFormat : 'm-dd-yy'
                });
                //Menu
                $('#menu').menu({
                  position: {
                    my: 'center top',
                    at: 'center bottom'
                  },
                  icons: {
                    submenu: 'ui-icon-triangle-1-s'
                  }
                });                
            }); // end ready
        </script>

    </head>
    <body>
        <div class="wrapper">
            <div class="content">
                <div class="main">
                    <h1>Tabbed Panels</h1>
                    <div id="tabContainer">
                        <ul>
                            <li><a href="#panel1">Tab 1</a></li>
                            <li><a href="#panel2">Tab 2</a></li>
                            <li><a href="#panel3">Tab 3</a></li>
                        </ul>
                        <!-- panel 1 -->
                        <div id="panel1">
                            <p>Eeek, a zombie! Click on the zombie to destroy it.</p>
                            <p><img src="zombie.jpg" id="zombie"></p>
                            <!-- add dialog here -->
                            <div id="confirm" title="Confirm Destruction">
                                <p>Are you sure you want to destroy the zombie?</p>
                            </div>
                        </div>
                        <!-- panel 2 -->
                        <div id="panel2">
                            <h1>A Birthday Picker</h1>
                            <form>
                                <div>
                                    <label for="dob" class="label">What's your birth date?</label>
                                    <input type="text" id="dob" name="birthdate">
                                </div>
                            </form>
                        </div>
                        <!-- panel 3 -->
                        <div id="panel3">
                            <h1>Single Level Horizontal Menus</h1>
                            <div>
                                <ul id="menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us </a>
                                        <ul>
                                            <li><a href="#">Our History</a></li>
                                            <li><a href="#">Driving Directions</a></li>
                                            <li><a href="#">Hours</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Our Products </a>
                                        <ul>
                                            <li><a href="#">Gizmos</a></li>
                                            <li><a href="#">Gadgets </a></li>
                                            <li><a href="#">Time Machines</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
