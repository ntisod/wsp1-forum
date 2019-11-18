<?php

session_start();

// ta bort alla sessionsvariabler
session_unset();

// Förstör sessionen
session_destroy();

//Gå tillbaka till session.php
header("Location: session.php");