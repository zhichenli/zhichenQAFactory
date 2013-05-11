<?php
ob_start();

echo "xxx\n";

header("Location: www.google.com");

ob_start();
ob_clean();
flush();

echo "something\n";

ob_flush();
flush();

echo "aaa\n";

ob_end_flush();