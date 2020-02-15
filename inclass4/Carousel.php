<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery-cycle-all.js"></script>
    <script type="text/javascript" src="Info.js"></script>
        <script type="text/javascript">
        //declaring html variable which is used later to add elements to DOM
        var html = '';
        //When document loads, this will execute.
        $(document).ready(function () {
            console.log('ready');
            $.getJSON('things.json',function (data) {
                $.each(data, function (key, value) {
                    //each sub-object in the JSON object
                    $.each(value, function (index, stuff){
                        console.log(index + ' ' + stuff.Activity);
                        html += '<div id="things" style="text-align: center;">';
                        html += '<h2 id="activity">' + stuff.Activity + '</h2>'
                        html += '<p onclick="activityinfo(' + index + ')"><img src="' + stuff.Source + '" style="width: 500px; height: 450px;" alt="image of activity"></p>';
                        html += '<p id="information'+index+'"></p>';
                        html += '<h4>' + stuff.desc + '</h4>';
                        html += '</div>';
                  });
               });
               //loading the html we just created into the DOM from the variable
               $('#things').html(html);
               //Setting the carousel options for how it will cycle
               $('#things').cycle({
                    fx: 'slideX',
                    pause: '1',
                    prev: '#prev',
                    next: '#next',
                    speed: 500, 
                    timeout: 15000
               });
            });
        });
        </script>
</head>
<body id="bg">
    <h1>Carousel</h1>
    <!--Centering and adding the Prev and Next buttons-->
    <div style="text-align: center">
        <a href='#' id="prev" class='mybutton'>Prev</a>
        <a href='#' id="next" class='mybutton'>Next</a>
    </div>
        <div id="things"></div>
</body>
</html>