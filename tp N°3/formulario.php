<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <h1>Formulario</h1>
    <p>
        <label>Name</label><br>
        <input type="text" name="name" required>
    </p>
    <p>
        <label>Birthday</label><br>
        <input type="date" name="birthday" required>
    </p>
    <p>
        <label>Sex:</label>
        <input type="radio" id="male" name="gender" value="male" class="gender">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" class="gender">
        <label for="male">Female</label>
    </p>
        <input type="submit">
    </form>
</body>
</html>