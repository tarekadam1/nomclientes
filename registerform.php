<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>registerform</title>
    </head>
            <body>
           
        
                <form action="registerform.php" method="post">

                    
                    <input   type="text"   name="familyname" placeholder="Family name"/> <br>

                    <input   type="text"   name="username"  placeholder="First name"/> <br>

                    <input   type="text" id="email" name="email"  placeholder="Email adresse"/> <br>

                    <input   type="text"  name="password"    placeholder="password"/> <br>

                    <input   type="text"   name="birthdate"  placeholder="birthdate"/> <br>

                    <input   type="text"   name="gender"  placeholder="gender"/> <br>

                    <input   type="text"   name="nationality"  placeholder="nationality"/> <br>

                    <input   type="text"   name="comments"  placeholder="comments"/> <br>

                    <input type="submit"  name="SUBMIT" /><br>

                    <input type="reset"   value="RESET"/><br    >

                </form>


                <?php
                if ( isset( $_POST['SUBMIT'] ) ) {

                    $familyname=$_POST['familyname'];
                    $username=$_POST['username'];
           


                    $name= array($familyname, $username, );
                    print_r($name);

                }

                ?>
                
                
            </body>

</html>