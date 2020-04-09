<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <title>Form</title>
    <script>
        $(document).ready(function () {
            //Accordion
            var x = 1;
            var max_fields = 5; //Maximum allowed input fields 
            var wrapper    = $(".wrapper"); //Input fields wrapper
            var addButton = $(".addButton"); //Add button class or ID
            
            //Dynamic List
            $("#addButton").click(function (e) {
                e.preventDefault();
                //Check maximum allowed input fields
                if(x < max_fields){ 
                    x++; //input field increment
                    //add input field
                    $(wrapper).append('<div><input type="text" class="myin2" name="hobby" placeholder="hobbie" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div>');
                }
            });
            $(wrapper).on("click",".remove_field", function(e){ 
                e.preventDefault();
                $(this).parent('div').remove(); //remove inout field
                x--; //inout field decrement
            });
            //Form Validation
            $('#form').submit(function(e) {
                //looking at all text fields in the form
                $('#form :text').each(function(){
                    if ( $(this).val()  == ""){ //checking for empty
                        alert('Fill the form out');
                        e.preventDefault();
                        return false;
                    }
                });
            });
        });
    </script>
</head>
<body id='bg'>
    <h1 class="heading" >JQuery Form</h1><br><br>
    <div class="container">
        <form name="form" id="form">
        <div class="flex-container">
            <button type="button" class="mybutton" data-toggle="collapse" data-target="#personal">Personal</button>
            <div id="personal" class="collapse">
            <input type="text" id="fname" class="myin" name="fname" placeholder="First Name">
            <input type="text" id="lname" class="myin" name="lname" placeholder="Last Name">
            </div>
            <button type="button" class="mybutton" data-toggle="collapse" data-target="#school">School</button>
            <div id="school" class="collapse">       
            <input type="text" id="school" class="myin" name="school" placeholder="School you attend">
            </div>
            <button type="button" class="mybutton" data-toggle="collapse" data-target="#hobbies">Hobbies</button>
            <div id="hobbies" class="collapse">
                    <button class="mybutton" id="addButton" style="position: relative; ">Add</button>            
                    <div class="wrapper">
                        <div><input type="text" class='myin2' name="hobby" placeholder="hobbie" /></div>
                    </div>
            </div>
            <button type="button" class="mybutton" data-toggle="collapse" data-target="#music">Music</button>
            <div id="music" class="collapse">
            <input type="text" id="music" class="myin" name="music" placeholder="Favorite Genre">
            </div>
        </div>
    </div>
        <div class="flex-container2">
        <input type="reset" class="mybutton" value="Reset">
        <input type="submit" class="mybutton" value="Submit">
        </div>
    </form>
</body>
</html>