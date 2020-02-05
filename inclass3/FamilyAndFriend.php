
<!DOCTYPE html>
<html>
    <head>
	<title>JSON Using AJAX</title>
        <script type="text/javascript" src="FamilyAndFriends.js"></script>
    </head>
    <body>
        <h1>Friends and Family List</h1>
        <div class="central">Select a Friend or Family member:
	    <select id='Namelist' onchange ="drpJSON()"> 
            </select>
            Or Enter a Name: <input type="text" name="FullName" id="FullName" onkeyup ="wrtJSON()">
            <input type="button" onclick="wrtJSON()" value="Pick">
        </div>
        <br>
        <table class="src" >
            <tr>
                <th>Name</th>
                <th>Last Name</th>
            </tr>
            <tr>
                <td><div id="Name">None Selected</div></td>
                <td><div id="Last Name">None Selected</div></td>
            </tr>
            <tr>
                <td><div id="peoplelist">some books</div></td>
                <td></td>
            </tr>
        </table>
    </body>
</html>
