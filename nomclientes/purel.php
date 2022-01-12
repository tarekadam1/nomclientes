<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="p.php" method="post">

<input type="text" name="firstname" placeholder="First Name" />

<input type="text" name="lastname" placeholder="Last Name" />

<input type="submit" name="submit" />
</form> 
<?php
// Check if the form is submitted
if ( isset( $_POST['submit'] ) ) {

    // retrieve the form data by using the element's name attributes value as key
    
    echo '<h2>form data retrieved by using the $_REQUEST variable<h2/>'
    
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    
    // display the results
    echo 'Your name is ' . $lastname .' ' . $firstname;
    
    // check if the post method is used to submit the form
    
    if ( filter_has_var( INPUT_POST, 'submit' ) ) {
    
    echo '<h2>form data retrieved by using $_POST variable<h2/>;
    $firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

// display the results
echo 'Your name is ' . $lastname .' ' . $firstname;
}

// check if the get method is used to submit the form

if ( filter_has_var( INPUT_GET, 'submit' ) ) {

echo '<h2>form data retrieved by using $_GET variable<h2/>'

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
}

// display the results
echo 'Your name is ' . $lastname .' ' . $firstname;
exit;
}
?>

</body>
</html>