<?php

$conn = mysqli_connect(
    "sql202.infinityfree.com",
    "if0_42197882",
    "islamrashid123",
    "if0_42197882_horse_mart"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>