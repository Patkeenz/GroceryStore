<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locations</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../javascript/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <div id="nav-placeholder"></div>
    <script>
    $(function(){
        $("#nav-placeholder").load("navbar.html");
        });
        </script>
    
    <main>
        <div class = "center">
            <h3>Find Us Here</h3>
            <p> <t>27 Avenue Designweb J4N O9G </t></p>
            <img class="map" src= "../Images/maps.Jpg" width= "500" height = "500"> 
         </div>
    </main>
    

    


    <!--Footer-->
    <div id="footer" class="footer"></div>
    <script>
        $(function(){
          $("#footer").load("footer.html");
        });
        </script>

</body>
</html>