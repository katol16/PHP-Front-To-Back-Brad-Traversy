<?php
    session_start();

    // Usuwanie wartości z sesji
    unset($_SESSION['name']);

    // Jeśli chcesz kompletnie usunąć całą sesję to:
    session_destroy();