/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function activityinfo(t) {
    console.log(x);
    var data_file = "things.json";
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
            z = jsonObj.things[t].information;
            x = document.getElementById("things").style.zIndex; 
            console.log(x)
            for (var i = 0; i < jsonObj.things.length; i++) {
                if (document.getElementById("things").style.zIndex == 7) {
                    document.getElementById("information").innerHTML = jsonObj.things[i].desc;
                }
            }
            document.getElementById("information").innerHTML = "hello";
        }
    }
    http_request.open("GET", data_file, true);
    http_request.send();
}