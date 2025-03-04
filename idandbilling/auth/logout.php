<?php
session_start();

$_SESSION = [];

session_destroy();

echo "<script>
    alert('Successfully logged out.');
    window.location.href = '../auth/login/';
</script>";
exit;
