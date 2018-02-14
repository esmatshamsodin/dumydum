<!DOCTYPE html>
<html>
<body>
<h2>Get data as JSON from a PHP file on the server.</h2>
<p>The JSON received from the PHP file:</p>
<p id="demo"></p>
<script>
        var obj, dbParam, xmlhttp;
        obj = { "table":"employees", "position":"'android developer'" }; // Define an object containing a table property and a limit property
        dbParam = JSON.stringify(obj); // Convert the Object into a JSON
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "server-side.php?x=" + dbParam, true); // Send a request to the PHP file, with the JSON string as a parameters
        xmlhttp.send(); // Display the result received from the PHP file
</script>
</body>
</html>
