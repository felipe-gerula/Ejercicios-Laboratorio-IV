<?php
    $parameters = array();

    if ($_SERVER['REQUEST_METHOD'] == "POST")
        $parameters = $_POST;
    else
        $parameters = $_GET;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Form</title>
    <style>
        *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 500px;
  margin: 10px auto;
  padding: 10px 10px;
  background: #f4f7f8;
  border-radius: 8px;
  border: 2px solid rgba(0, 0, 0, 0.2);
}

h1 {
  margin: 0 0 10px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="email"],
input[type="number"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 5px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 10px;
  border-radius: 1px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

textarea{
    min-height: 50px;
    max-height: 200px;
    margin-bottom: 5px; 
    resize: vertical;
}

select {
  padding: 5px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 49.5%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
}

button:hover{
    background-color: #48a564;
}

fieldset {
  margin-bottom: 5px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: contents;
  margin-bottom: 8px;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 500px) {

  form {
    max-width: 500px;
  }

}

/* Table Style */

body div{
  border: 2px solid rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  padding: 5px;
  margin-left: 25%;
  margin-right: 25%;
  min-width: 50%;
  text-align: center;
}

body div a{
  text-decoration: none;
}

table {
  margin: 2% 5%;
  border-radius: 5px;
  width: 90%;
  text-align: center;
}

td, th {
  border: 1px solid #dddddd;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.header-row-color{
  background-color: #5fcf80;
}
    </style>
</head>
<body>
    <div>
        <table>
            <tr>
                <th colspan="2" class="header-row-color">
                    YOUR BASIC INFORMATION
                </th>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $parameters['name']?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $parameters['mail']?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo $parameters['password']?></td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td><?php echo $parameters['birthday']?></td>
            </tr>
            <tr>
                <th>Sex</th>
                <td><?php 
                    if (isset($parameters['gender'])) {
                        echo $parameters['gender'] == 'male' ? "Masculino" : "Femenino";
                    }else {
                        echo "-Sin Indicar-";
                    }
                ?></td>
            </tr>
            <tr>
                <th colspan="2" class="header-row-color">Your Profile</th>
            </tr>
            <tr>
                <th>About You</th>
                <td><?php
                    if (isset($parameters['aboutyou']) && $parameters['aboutyou'] != "") {
                        echo $parameters['aboutyou'];
                    }else {
                        echo "-Sin Completar-";
                    }
                ?></td>
            </tr>
            <tr>
                <th>Role</th>
                <td><?php echo $parameters['select'] ?></td>
            </tr>    
            <tr>
                <th>Interest</th>
                <td><?php
                    $initValue = "interest_";
                    foreach ($parameters as $parameterName => $parameterValue) {
                        if (substr($parameterName,0,strlen($initValue)) === $initValue) {
                            $nameValue = ltrim($parameterName,$initValue);
                            echo ucfirst($nameValue)."<br>";
                        }
                    }
                ?></td>
            </tr>    
        </table>
        <br>
        <a href="index.html">Regresar a Formulario</a>
    </div>
</body>
</html>