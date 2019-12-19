<?php
    //  Get & Post Tutorial
    // Pamietaj, ze tu moze cos nie dzialać, bo trzeba pare rzeczy zakomentować - ale to jest tylko poglądowe

    // Za pomocą GET mozemy przesyłąć dane i będa one przesyłane w URL (POST jest bezpieczniejszy!)
    // Tutaj $_GET jest Superglobal
    if(isset($_GET['name'])) {
        // print_r($_GET);

        // poniżej sposób, który nie jest bezpieczny
        echo $_GET['name'];

        // Tutaj z zabezpieczeniem
        $name = htmlentities($_GET['name']);
        echo $name;
    }

    // Za pomocą POST powinniśmy wysyłąć dane, bo jest bezpieczniejszy i dane są wysyłane w headers
    // Tutaj $_POST jest Superglobal
    if(isset($_POST['name'])) {
        // print_r($POST);
        $name = htmlentities($_POST['name']);
        echo $name;
    }

    // 3 sposób - za pomocą Superglobal REQUEST (Rzadko używany). Zadziała zarówno z method="POST" w formularzu jak i z method="GET"
    if(isset($_REQUEST['name'])) {
        // print_r($POST);
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }

    echo $_SERVER['QUERY_STRING']; // Superglboal któy poakże wartość query stringa (czyli stringa zapytania, w naszym przypadku bedzie coś takiego -> "name=Karol&email=kakis%40op.pl")
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My website</title>
    </head>
    <body>
        <form method="GET" action="get_posts.php">
            <p>Formualrz z GET</p>
            <div>
                <label>Name</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email">
            </div>
            <input type="submit" value="Submit">
        </form>

        <form method="POST" action="get_posts.php">
            <p>Formualrz z POST</p>
            <div>
                <label>Name</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email">
            </div>
            <input type="submit" value="Submit">
        </form>

        // Można też przesyłąć wartości bezpośrendio przez URL, np:
        <ul>
            <li>
                <a href="get_post.php?name=Steve" />
            </li>
            <li>
                <a href="get_post.php?name=Adam" />
            </li>
        </ul>
        // Poniżej wyświetlimy zmienną, którą zapiszemy za pomocą samego odesłania do URLa przez <a href></a>
        <h3><?php echo "{name}'s Profile"; ?></h3>
    </body>
</html>
