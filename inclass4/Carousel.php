<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery-cycle-all.js.js"></script>
        <script type="text/javascript">
        var html = ' ';
        $(document).ready(function () {
            
            $.getJSON('product.json',function (data) {
                $.each(data, function (key, value) {
                    $.each(value, function (index, stuff){
                        console.log(index + ' ' + stuff.Author);
                        html += '<div class="books">';
                        html += '<h2 id="title">' + stuff.Title + '<h2>';
                        html += '<h4>' + stuff.Author + '</h4>';
                        html += '<p onclick="bookinfo()"><img src="' + stuff.Source + '</p>';
                  });
               });
               $('#books').html(html);
               $('#books').cycle({
                    fx: 'fade',
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
<body>
    
</body>
</html>