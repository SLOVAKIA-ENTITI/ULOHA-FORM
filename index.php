<?php
function kontrola($udaje){
    $udaje = trim($udaje);
    $udaje = htmlspecialchars($udaje);
    $udaje = stripcslashes($udaje);


    return $udaje;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $meno = kontrola($_POST['name']);
    $email = kontrola($_POST['email']);
    $predmet = kontrola($_POST['subj']);
    $pripomienka = kontrola($_POST['poznamka']);
    if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST ['subj'])  && isset($_POST ['poznamka'])){
        if(empty($_POST ['email'] || empty($_POST ['subj']) || empty($_POST ['name'])) || empty(($_POST ['poznamka']))){
            $error = "Nevyplnil si všetko";
        }
        else{
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                $error = "Úspešne odoslané!";
             }
             else{
                $error =  "Invalid email!";
            }
        }
    }
    else{
        $error =  "Nevyplnil si všetko!";
    }}
else{
        $error =  "ERROR!";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>Feedback Form</h1>
<form action="#" method="POST">
    <label>Name:</label>
    <input type="text"  class="text" name="name" placeholder="Enter Name" >
    <label>Email:</label>
    <input type="email"  class="text" name="email" placeholder="Enter email">
    <label>Subject:</label>
    <input type="text" class="text" name="subj" placeholder="Enter subject">
    <label>Message:</label>
    <textarea class="textareaM" placeholder="Enter message" name="poznamka"></textarea>
    <button class="buttonS">Submit <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
    
</form>
        <p><?php echo $error; ?></p>
</section>


</body>
</html>
