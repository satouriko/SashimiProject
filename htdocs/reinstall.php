<?php
system("git pull");
echo "<br/>";
unlink("../admin/.initlock");
echo "Removed file /../admin/.initlock<br/>";
unlink("../admin/config.php");
echo "Removed file /../admin/config.php<br/>";
unlink("../admin/databaseInfo.php");
echo "Removed file /../admin/databaseInfo.php<br/>";
echo "Now you may reinstall sashimi project.<br/>";
echo "The dbname, dbuser, dbpwd are all 'sashimi'.";

