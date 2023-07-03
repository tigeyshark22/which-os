<html>
  <head>
    <title>Which OS is this?</title>
  </head>
  <body>
    <h1>And the underlying operating system is... </h1>
    <br/>
<?php
  echo shell_exec("grep ^NAME /etc/os-release | cut -d '\"' -f2");
?>
  </body>
</html>
