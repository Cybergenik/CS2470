
<!DOCTYPE html>
<html>
    <head>
    <title>JSON Using AJAX</title>
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" src="js/FamilyAndFriends.js"></script>
    </head>
    <body id='bg'>
        <h1>Friends and Family List</h1>
        <div class="central">Select a Friend or Family member:
	    <select id='Namelist' onchange ="drpJSON()"> 
            </select>
            Or Enter a Name: <input type="text" name="FullName" id="FullName" onkeyup ="wrtJSON()">
            <input class="mybutton" type="button" onclick="wrtJSON()" value="Pick">
        </div>
        <br>
        <table class="src" >
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Relation</th>
            </tr>
            <tr>
                <td><div id="Name">None Selected</div></td>
                <td><div id="Last Name">None Selected</div></td>
                <td><div id="Relation">None Selected</div></td>
            </tr>
            <tr>
                <td><div id="refresh"></div></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            </tr>
        </table>
    </body>
</html>
