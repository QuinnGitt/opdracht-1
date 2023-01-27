<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PHP PDO CRUD</title>
</head>
<body>
    <h1>PHP PDO CRUD</h1>
    
    <form action="create.php" method="post">

        <label for="firstname">Voornaam:</label><br>
        <input type="text" name="firstname" id="firstname"><br>
        <br>
        <label for="infix">Tussenvoegsel:</label><br>
        <input type="text" name="infix" id="infix"><br>
        <br>
        <label for="lastname">Achternaam:</label><br>
        <input type="text" name="lastname" id="lastname"><br>
        <br>
        <label for="haircolor">Haarkleur:</label><br>
        <input type="text" name="haircolor" id="haircolor"><br>
        <br>
        <label for="phonenumber">Telefoonnummer:</label><br>
        <input type="number" name="phonenumber" id="phonenumber"><br>
        <br>
        <label for="streetname">Straatnaam:</label><br>
        <input type="text" name="streetname" id="streetname"><br>
        <br>
        <label for="housenumber">Huisnummer:</label><br>
        <input type="number" name="housenumber" id="housenumber"><br>
        <br>
        <label for="city">Woonplaats:</label><br>
        <input type="text" name="city" id="city"><br>
        <br>
        <label for="postalcode">Postcode:</label><br>
        <input type="text" name="postalcode" id="postalcode"><br>
        <br>
        <label for="country">Landnaam:</label><br>
        <input type="text" name="country" id="country"><br>
        <br>
        
        <input type="submit" value="Verstuur!">        

    </form>



</body>
</html>