<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>logs</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="fonts/icons/material-icons.css"> -->
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
    <script src="js/popper.js" charset="utf-8"></script>
    <script src="js/funciones.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#ver").click(function(){
          $.post("core/Logs/controller_logs.php",{action:"ver"},function(res){
            var info = JSON.parse(res);
            $("#resp").html(info);
            // $("#resp").html(res);
          });
        });
      });
    </script>
  </head>
  <body>
    <button type="button" name="button" class="btn btn-outline" id="ver">Ver</button>
    <div class="" id="resp">

    </div>
  </body>
</html>
