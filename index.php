<html>
  <head>
    <title>Which OS is this?</title>
  </head>
  <body>
    <h1>And the underlying operating system is... </h1>
    <h2 style="color: red;">
<?php
  echo shell_exec("grep ^NAME /etc/os-release | cut -d '\"' -f2");
?>
    </h2>
  </body>
</html>
