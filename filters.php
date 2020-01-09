<?php
    // check for posted data. Jeżeli jest GET to musi być INPUT_GET, drugi parametr 'data' to 'name' w input
    if (filter_has_var(INPUT_POST, 'data')) {
        echo 'Data found';
    } else {
        echo 'No Data';
    }

    if (filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];

        // Remove illegal cahracters
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if (filter_input($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is valid';
        } else {
            echo 'Email is NOT valid';
        }

//        if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
//            echo 'Email is valid';
//        } else {
//            echo 'Email is NOT valid';
//        }

    // Przykłady innych filtrów:
        # FILTER_VALIDATE_BOOLEAN
        # FILTER_VALIDATE_EMAIL
        # FILTER_VALIDATE_INT
        # FILTER_VALIDATE_IP
        # FILTER_VALIDATE_REGEXP
        # FILTER_VALIDATE_URL

        # FILTER_SANITIZE_EMAIL
        # FILTER_SANITIZE_ENCODED
        # FILTER_SANITIZE_NUMBER_FLOAT
        # FILTER_SANITIZE_NUMBER_INT
        # FILTER_SANITIZE_SPECIAL_CHARS
        # FILTER_SANITIZE_STRING
        # FILTER_SANITIZE_URL


        // Examples
        $var = '33kj2j3k3ljl32lj';
        var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT)); // wywali literki i zostawi same cyfry

        $var2 = '<script>alert(1)</script>';
        echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS); // wyrzuci na stronie kod <script> ze spejcalnymi znakami i nie wstawi tego kodu (jakoś tak)

        // For working with multiple fields
        $filters = array(
            "data" => FILTER_VALIDATE_EMAIL,
            "data2" => array(
                "filter" => FILTER_VALIDATE_INT,
                "options" => array(
                    "min_range" => 1,
                    "max_range" => 100
                )
            )
        );

        print_r(filter_input_array(INPUT_POST, $filters));

        // filter var array
        $arr = array(
            "name" => "Karol",
            "age" => "28",
            "email" => "kakis@op.pl"
        );

        $filters2 = array(
            "name" => array(
                "filter" > FILTER_CALLBACK,
                "options" => "ucwords"
            ),
            "age" => array(
                "filter" => FILTER_VALIDATE_INT,
                "options" => array(
                    "min_range" => 1,
                    "max_range" => 120
                )
            ),
            "email" => FILTER_VALIDATE_EMAIL
        );

        // Tutaj dzięki filter_var_array zrobimy kilka tych filtrów, które są w tablicy $filters2 i zrobimy to na tablicy $arr
        print_r(filter_var_array($arr, $filters2));

    }

?>
<!--action="--><?php //echo $_SERVER['PHP_SELF']; ?><!--" - oznacza, ze akcja zostanie przekierowana na aktualną stronę. ($_SERVER['PHP_SELF'] - Superglobal-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button sype='submit'>Submit</button>
</form>