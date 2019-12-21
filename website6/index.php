<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Search User</title>
    <script>
        function showSuggestion(str) {
            if(str.length === 0) {
                document.getElementById('output').innerHTML = '';
            } else {
                // AJAX REQ
                var xmlhttp = new XMLHttpRequest();
                // onreadystatechange	Defines a function to be called when the readyState property changes
                // readyState	Holds the status of the XMLHttpRequest.
                // 0: request not initialized
                // 1: server connection established
                // 2: request received
                // 3: processing request
                // 4: request finished and response is ready
                // status	200: "OK"
                // 403: "Forbidden"
                // 404: "Page not found"
                // For a complete list go to the Http Messages Reference
                xmlhttp.onreadystatechange = function() {
                    if(this.readyState === 4 && this.status === 200) {
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "suggest.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h4>Search User</h4>
        <form>
            Search User:
            <input type="text" class="form-control" onkeyup="showSuggestion(this.value)"/>
        </form>
        <p>
            Suggestions: <span id="output"></span>
        </p>
    </div>
</body>
</html>