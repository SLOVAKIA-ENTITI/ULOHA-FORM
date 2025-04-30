<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $error = 'OK';
}
else{
    $error =  "ERROR";
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
<form>
    <label>Name:</label>
    <input type="text"  class="text" placeholder="Enter Name">
    <label>Email:</label>
    <input type="email"  class="text" placeholder="Enter email">
    <label>Subject:</label>
    <input type="text" class="text" placeholder="Enter subject">
    <label>Message:</label>
    <textarea class="textareaM" placeholder="Enter message"></textarea>
    <button class="buttonS">Submit <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
    <div class="Spodok1"><?php echo $error; ?></div>
</form>
</section>


</body>
</html>
