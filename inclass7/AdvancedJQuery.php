<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cybergenik</title>
    <link rel="stylesheet" href="css/main2.css">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-cycle-all.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="Info.js"></script>
    <script>
        var html = '';
        $(document).ready(function () {
            //JQuery for making tabs for each page
            $('#tabContainer').tabs({
                show: 'fadeIn',
                hide: 'fadeOut'
            });
            var hash = location.hash;
            if (hash) {
                $('#tabContainer').tabs('load', hash) //Q1 about what loads first
            }
            //JQuery for Carousel
            $.getJSON('things.json',function (data) {
                $.each(data, function (key, value) {
                    //each sub-object in the JSON object
                    $.each(value, function (index, stuff){
                        console.log(index + ' ' + stuff.Activity);
                        html += '<div id="games" style="align-content: center; text-align: center">';
                        html += '<h2 id="activity">' + stuff.Activity + '</h2>'
                        html += '<p onclick="activityinfo(' + index + ')"><img src="' + stuff.Source + '" style="width: 500px; height: 450px;" alt="image of activity"></p>';
                        html += '<p id="information'+index+'"></p>';
                        html += '<h4>' + stuff.desc + '</h4>';
                        html += '</div>';
                  });
               });
               //loading the html we just created into the DOM from the variable
               $('.games').html(html);
               //Setting the carousel options for how it will cycle
               $('.games').cycle({
                    fx: 'slideX',
                    pause: '1',
                    prev: '#prev',
                    next: '#next',
                    speed: 500, 
                    timeout: 15000
               });
            });
            var x = 1;
            var max_fields = 5; //Maximum allowed input fields 
            var wrapper    = $(".wrapper"); //Input fields wrapper
            var addButton = $(".addButton"); //Add button class or ID
            
            //JQuery for Dynamic List
            $("#addButton").click(function (e) {
                e.preventDefault();
                //Check maximum allowed input fields
                if(x < max_fields){ 
                    x++; //input field increment
                    //add input field
                    $(wrapper).append('<div><input type="text" class="myin2" name="game" placeholder="Game" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div>');
                }
            });
            $(wrapper).on("click",".remove_field", function(e){ 
                e.preventDefault();
                $(this).parent('div').remove(); //remove inout field
                x--; //inout field decrement
            });
            //JQuery for Form Validation
            $('#form').submit(function(e) {
                //looking at all text fields in the form
                filled = true;
                //checking for empty
                $('#form :text').each(function(){
                    if ( $(this).val()  == ""){
                        filled = false;
                    }
                });
                if (filled == false){
                    alert('Fill the form out');
                    e.preventDefault();
                    return false
                }
                else {
                    alert('Form Submitted!');
                }
            });                
        }); // end ready
    </script>
</head>
<body id='bg'>
    <h1>Cybergenik Gamer Resume</h1>
    <div id="tabContainer">
        <div>
            <ul class="topnav">
                <li><a href="#panel1">Home</a></li>
                <li><a href="#panel2">Games</a></li>
                <li><a href="#panel3">Contact</a></li>
            </ul>
        </div>
        <!-- panel 1 -->
        <div id="panel1" class="flex-container">
            <h4>About me</h4>
            <p>PVP is king to me. I love any game that has a high skill gap and allows me to try very hard to be the best.<br>
            I've played only 2 games competitively in my life, those 2 games are World of Warcraft and Overwatch. Both<br>
            of those games I've reached the pinnacle of success in terms of PvP content. I also love to play survival games<br>
            , one that I've played a lot of and really enjoy the playstyle is Rust. Reach out if you want to play some games.</p>
            <h4>Skills:</h4>
            <ul>
                <li>Tracking</li>
                <li>Flicking</li>
                <li>Macro'ing</li>
                <li>Button Mashing</li>
                <li>Shot Calling</li>
            </ul>
        </div>
        <!-- panel 2 -->
        <div id="panel2" >
            <div style="text-align: center">
                <h4>Games I play</h4>
                <a href='#' id="prev" class='mybutton'>Prev</a>
                <a href='#' id="next" class='mybutton'>Next</a>
            </div>
                <div class="games" class="flex-container"></div>
        </div>
        <!-- panel 3 -->
        <div id="panel3" class="flex-container">
            <h4>Lets play together!</h4>
            <form name="form" id="form">
                <div class="flex-container-form">
                    <input type="text" id="fname" class="myin" name="fname" placeholder="First Name"><br>
                    <input type="text" id="lname" class="myin" name="lname" placeholder="Last Name"><br>    
                    <input type="email" id="email" class="myin" name="email" placeholder="Email"><br>
                    <label for="mygames">Add Games</label>
                    <div id="mygames" >
                            <button class="mybutton" id="addButton" style="position: relative; ">Add</button>            
                            <div class="wrapper">
                                <div><input type="text" class="myin2" name="game" placeholder="Game" /></div>
                            </div><br>
                    </div>
                </div>
                    <div class="flex-container2">
                    <input type="reset" class="mybutton" value="Reset">
                    <input type="submit" class="mybutton" value="Submit">
                </div>
            </form>                                
        </div>
    </div>
</body>
</html>