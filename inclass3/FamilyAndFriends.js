//change on the drop down
function drpJSON() {
    var data_file = "FriendsAndFamily.json";
    var http_request = new XMLHttpRequest();
    try {
        // Opera 8.0+, Firefox, Chrome, Safari
        http_request = new XMLHttpRequest();

    } catch (e) {
        // Internet Explorer Browsers
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }
    http_request.onreadystatechange = function () {
        if (http_request.readyState == 4) {
            // Javascript function JSON.parse to parse JSON data
            var jsonObj = JSON.parse(http_request.responseText);

            // jsonObj variable now contains the data structure and can
            // be accessed as jsonObj.name and jsonObj.country.
            var name = "";
            var lname = "";
            var extra = "";
            for (var i = 0; i < jsonObj.people.length; i++) {
                if (document.getElementById("Namelist").value != 0)
                    {
                        name = name + jsonObj.people[i].name + "<br>";
                        lname = lname + jsonObj.people[i].lname + "<br>";
                        var selection = i;
                        console.log(i);
                    }
            }
            document.getElementById("peoplelist").innerHTML = "";
            document.getElementById("Name").innerHTML = name;
            document.getElementById("Last Name").innerHTML = lname;
        }
    }
    http_request.open("GET", data_file, true);
    http_request.send();
}
//for the write in element
function wrtJSON() {

    var data_file = "FriendsAndFamily.json";
    var http_request = new XMLHttpRequest();

    try {
        // Opera 8.0+, Firefox, Chrome, Safari
        http_request = new XMLHttpRequest();

    } catch (e) {
        // Internet Explorer Browsers
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }
    http_request.onreadystatechange = function () {
        if (http_request.readyState == 4) {
            // Javascript function JSON.parse to parse JSON data
            var jsonObj = JSON.parse(http_request.responseText);

            // jsonObj variable now contains the data structure and can
            // be accessed as jsonObj.name and jsonObj.country.
            var name = "";
            var lname = "";
            var extra = "";
            for (var i = 0; i < jsonObj.people.length; i++) {
                if (jsonObj.people[i].lname.indexOf(document.getElementById("FullName").value) > -1 && document.getElementById("FullName").value != "")
                    {
                        name = name + jsonObj.people[i].name + "<br>";
                        lname = lname + jsonObj.people[i].lname + "<br>";
                        var selection = i;
                        console.log(i);
                    }       
            }
            document.getElementById("peoplelist").innerHTML = "";
            document.getElementById("Name").innerHTML = name;
            document.getElementById("Last Name").innerHTML = lname; 
        }
    }
    http_request.open("GET", data_file, true);
    http_request.send();
}

var data_file = "FriendsAndFamily.json";
var http_request = new XMLHttpRequest();

try {
    // Opera 8.0+, Firefox, Chrome, Safari
    http_request = new XMLHttpRequest();

} catch (e) {
    // Internet Explorer Browsers
    try {
        http_request = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            http_request = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            // Something went wrong
            alert("Your browser broke!");
        }
    }
}
http_request.onreadystatechange = function () {
    if (http_request.readyState == 4) {
        // Javascript function JSON.parse to parse JSON data
        var jsonObj = JSON.parse(http_request.responseText);
        var text = "<option value='0'>--</option>";
        for (var i = 0; i < jsonObj.people.length; i++) {
            text = text + "<option value = '"+ jsonObj.people[i].id +"'> "+ jsonObj.people[i].name +"</option>"; 
        }
        document.getElementById("Namelist").innerHTML = text;
    }
}
http_request.open("GET", data_file, true);
http_request.send();
