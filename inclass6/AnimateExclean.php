<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>JQuery Animation Examples</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#Gallery a').click(function (evt) {
                    evt.preventDefault();
                    var path = $(this).attr('href');
                    var old = $('#ship img');
                    var newimg = $('<img src="' + path + '" width="700" height="650">');
                    newimg.hide();
                    $('#ship').prepend(newimg);
                    newimg.fadeIn(1500);
                    old.fadeOut(1500, function () {
                        $(this).remove();
                    }); // end fadeout
                }); // end click on ship
                $('#gallery a:first').click();

                $('#Gallery img').each(function () {
                    var file = $(this).attr('src');
                    var loaded = new Image();
                    var imgExt = /(\.\w{3,4}$)/;
                    loaded.src = file.replace(imgExt, '_p$1');

                    $(this).hover(
                            function () {
                                $(this).attr('src', loaded.src);
                            },
                            function () {
                                $(this).attr('src', file);
                            }
                    ); // end hover over image
                }); // end each for roll over
                //drop down login
                $("#flip").click(function () {
                    $("#panel").slideToggle("slow");
                });
            });

        </script>

        <style> 
            #panel, #flip {
                padding: 5px;
                text-align: center;
                background-color: #e5eecc;
                border: solid 1px #c3c3c3;
            }

            #panel {
                padding: 50px;
                display: none;
            }
        </style>
    </head>
    <body>
        <div id="flip">Click here to log in</div>
        <div id="panel">
            <form name="form1" method="post" action="#">
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">

                    <tr>
                        <td colspan="3"><strong>Member Login </strong></td>

                    </tr>
                    <tr>
                        <td width="78">Username</td>
                        <td width="6">:</td>
                        <td width="294"><input name="myusername" type="text" id="myusername"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input name="mypassword" type="password" id="mypassword">

                        </td>

                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Login"></td>
                    </tr>

                    <tr>
                        <td>

                            <a href="#">Create an Account</a>

                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div >
            <h1>Rollover Images</h1>
            <p>Mouse over the images below</p>
            <div id="Gallery">
                <a href="images/tie.jpg">
                    <img src="images/tie.jpg" width="140" height="140" alt="Tie">
                </a>
                <a href="images/vader.jpg">
                    <img src="images/vader.jpg" width="140" height="140" alt="Tie">
                </a>
                <a href="images/millenniumfalcon.jpg">
                    <img src="images/millenniumfalcon.jpg" width="140" height="140" alt="Tie">
                </a>
                <a href="images/xwing.jpg">
                    <img src="images/xwing.jpg" width="140" height="140" alt="Tie">
                </a>
            </div>
            <div id="ship">

            </div>

        </div>
    </body>
</html>
