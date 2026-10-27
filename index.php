<?php
// Redirect root access to production build in dist/
header("Location: ./dist/");
exit;
?>
