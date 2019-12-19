<?php
    # $_SERVER Superglobal - dostepna w całym scopie zmienna $_SERVER
    # Zazwyczaj super global zaczyna się od $_
    # $_SERVER - powinna zawierać inforamcje o serwerze -> Dokumentacja: https://www.php.net/manual/en/reserved.variables.server.php


    // Create Server Array
    // Wartości, które możemy tu uzywać też są w dokumentacji - warto to sprawdzić
    // Przykład: $_SERVER['SERVER_NAME'] -> z dokumentacji: "The name of the server host under which the current script is executing. If the script is running on a virtual host, this will be the value defined for that virtual host"
    // ponziej tablcia asocjacyjna
    $server = [
        // "Własna nazwa" => $_SERVER["Nazwa globlanej zmiennej serwra (z dokuemntacji)]_
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
    ];

    // echo $server['Host Server Name'];
    // echo $server['Host Header'];

    // Wydrukujemy całość
    print_r($server);


    // Create Client Array
    $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT']
    ];

    print_r($client);

?>