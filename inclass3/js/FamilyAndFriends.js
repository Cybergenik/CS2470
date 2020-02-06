//Populate table on load of page
window.onload = function() {
    function myFunction() {
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
                var relation = "";
                for (var i = 0; i < jsonObj.people.length; i++) {
                        name = name + jsonObj.people[i].name + "<br>";
                        lname = lname + jsonObj.people[i].lname + "<br>";
                        relation = relation + jsonObj.people[i].relation + "<br>";
                        console.log(i);
                    }
                }
                document.getElementById("Name").innerHTML = name;
                document.getElementById("Last Name").innerHTML = lname;
                document.getElementById("Relation").innerHTML = relation;
            }
        
            http_request.open("GET", data_file, true);
            http_request.send();
        }
    myFunction();
};

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
            var relation = "";
            for (var i = 0; i < jsonObj.people.length; i++) {
                if (document.getElementById("Namelist").value == 0)
                {
                    name = name + jsonObj.people[i].name + "<br>";
                    lname = lname + jsonObj.people[i].lname + "<br>";
                    relation = relation + jsonObj.people[i].relation + "<br>";
                    console.log(i);
                }

                else if (jsonObj.people[i].name != document.getElementById("Namelist").value)
                    {
                        if (jsonObj.people[i].relation == document.getElementById("Namelist").options[document.getElementById("Namelist").selectedIndex].text)
                            {
                            name = name + jsonObj.people[i].name + "<br>";
                            lname = lname + jsonObj.people[i].lname + "<br>";
                            relation = relation + jsonObj.people[i].relation + "<br>";
                            console.log(i);
                            }
                    }
            }
            document.getElementById("refresh").innerHTML = "";
            document.getElementById("Name").innerHTML = name;
            document.getElementById("Last Name").innerHTML = lname;
            document.getElementById("Relation").innerHTML = relation;
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
            var relation = "";
            for (var i = 0; i < jsonObj.people.length; i++) {
                if (((jsonObj.people[i].lname).toLowerCase()).indexOf((document.getElementById("FullName").value).toLowerCase()) > -1 || ((jsonObj.people[i].name).toLowerCase()).indexOf((document.getElementById("FullName").value).toLowerCase()) > -1 && document.getElementById("FullName").value != "")
                    {
                        if (document.getElementById("Namelist").options[document.getElementById("Namelist").selectedIndex].text != "--")
                        {
                            if (jsonObj.people[i].relation == document.getElementById("Namelist").options[document.getElementById("Namelist").selectedIndex].text)
                            {
                                name = name + jsonObj.people[i].name + "<br>";
                                lname = lname + jsonObj.people[i].lname + "<br>";
                                relation = relation + jsonObj.people[i].relation + "<br>";
                                var selection = i;
                                console.log(i);
                            }
                        }
                        else
                        {
                            name = name + jsonObj.people[i].name + "<br>";
                            lname = lname + jsonObj.people[i].lname + "<br>";
                            relation = relation + jsonObj.people[i].relation + "<br>";
                            var selection = i;
                            console.log(i);
                        }
                    }       
            }
            document.getElementById("refresh").innerHTML = "";
            document.getElementById("Name").innerHTML = name;
            document.getElementById("Last Name").innerHTML = lname; 
            document.getElementById("Relation").innerHTML = relation;
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
        let totalrelations = [];
        var text = "<option value='0'>--</option>";
        for (var i = 0; i < jsonObj.people.length; i++) {   
            x = totalrelations.indexOf(jsonObj.people[i].relation)
            console.log(totalrelations.indexOf(jsonObj.people[i].relation))
            if (x == -1)
                {
                totalrelations.push(jsonObj.people[i].relation);
                }    
            }
        totalrelations.forEach(element => {
            text = text + "<option value = '"+ element +"'> "+ element +"</option>"; 
        });

        console.log(text)
        document.getElementById("Namelist").innerHTML = text;
    }
}
http_request.open("GET", data_file, true);
http_request.send();
