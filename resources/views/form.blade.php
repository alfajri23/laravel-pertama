<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/test" method="POST">
@csrf
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <a>First name :</a><br><br>
    <input type="text" name="nm_dpn"><br><br>
    <a>Last name:</a><br><br>
    <input type="text" name="nm_blkg"><br><br>
    <a>Gender :</a><br><br>

    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label><br><br>

    <a>Nationality :</a><br><br>
    <select name="cars" id="cars">
        <option value="volvo">Indonesia</option>
        <option value="saab">Singapura</option>
        <option value="opel">Malaysia</option>
        <option value="audi">Australia</option>
      </select><br><br>

    <a>Language Spoken :</a><br><br>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> Bahasa Indonesia</label><br>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
    <label for="vehicle2"> English</label><br>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
    <label for="vehicle3"> Others</label><br><br>

    

    <a>Bio:</a><br><br>
    <textarea name="message" rows="7" cols="20"></textarea>

    <form action="test">
        <input href="test" type="submit" value="Sign Up" >
    </form>
    
</form>
</body>
</html>