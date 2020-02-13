<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery-cycle-all.js"></script>
    <script type="text/javascript" src="bookInfo.js"></script>
        <script type="text/javascript">
        var html = '';
        $(document).ready(function () {
            console.log('ready');
            $.getJSON('things.json',function (data) {
                $.each(data, function (key, value) {
                    $.each(value, function (index, stuff){
                        console.log(index + ' ' + stuff.Activity);
                        html += '<div id="things" style="text-align: center;">';
                        html += '<h2 id="activity">' + stuff.Activity + '<h2>'
                        html += '<p onclick="activityinfo(' + index + ')"><img src="' + stuff.Source + '" style="width: 500px; height: 450px;" alt="image of activity"></p>';
                        html += '<h4 id="information"></h4>';
                        html += '<h4>' + stuff.desc + '</h4>';
                        html += '</div>';
                  });
               });
               $('#things').html(html);
               $('#things').cycle({
                    fx: 'slideX',
                    pause: '1',
                    prev: '#prev',
                    next: '#next',
                    speed: 500, 
                    timeout: 10000
               });
            });
        });
        </script>
</head>
<body id="bg">
    <h1>Carousel</h1>
    <div style="text-align: center">
        <a href='#' id="prev" class='mybutton'>Prev</a>
        <a href='#' id="next" class='mybutton'>Next</a>
    </div>
        <div id="things"></div>
</body>
</html>