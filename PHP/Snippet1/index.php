<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snippet1</title>
</head>
<body>
    <form action="index.php" method="POST">
         <label for ="name">Nom*&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="name" name="name"></label>
         <label for ="name">Objet*&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="name" name="name"></label>
         <label for ="name">Email*&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="name" name="name"></label>
         <label for ="name">Message*&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="name" id="message"></label>
         <button type="submit">Envoyer</button>
         <p>Les Champs (*) sont Obligatoires </p>
     </form>

<style>
body{
    display:flex;
    font-size: 19px;
}
form{
    display: flex;
    flex-direction:column;
}
label{
    margin-top:3%;
}
button{
    margin-top:3%;
    margin-left:20%;
    width:120px;
}
#message{
    height:70px;
    width:200px;
}

</style>

</body>
</html>
