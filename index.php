<?php
/*
    GuardianGGBot
    Copyright © 2016, Slava slavikus Karpenko <slavikus@gmail.com>

    All rights reserved, and whatnot. Be brave, guardian!

    If you improve this app, please consider making a pull request: https://github.com/slavikus/guardiangg-bot
*/

require_once("common.inc.php");

if (!isset($_REQUEST['secret']) or $_REQUEST['secret'] != ADMIN_PASSWORD) {
    die("Admin password is not supplied or is invalid. Use ".BOT_URL_BASE."?secret=PASSWORD to access this script.");
}

