<?php 
$email = $firstName = $lastName = $phoneNum = $password = $passwordConfirm = ' ';
$errors = array('email'=>'', 'firstName'=>'', 'lastName'=> '', 'phoneNum'=>'', 'password'=> '', 'passwordConfirm'=> '');
if (isset($_POST['submit'])){

    //check email
    if (empty($_POST['email'])){ 
        $errors['email'] =  'an email is required <br />';
    } else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] =  'email must be a valid email address';
        }
        
    } 

    // check name
    if (empty($_POST['firstName'])){
        $errors['firstName'] = 'First name is required <br />';
    } else{
        $firstName = $_POST['firstName'];
        if(!preg_match('/^[a-zA-z\s]+$/', $firstName)){
            $errors['firstName'] = 'Name must be letters and spaces only'. '<br>';
        }
        
    }
    if (empty($_POST['lastName'])){
        $errors['lastName'] = 'Last name is required <br />';
    } else{
        $lastName = $_POST['lastName'];
        if(!preg_match('/^[a-zA-z\s]+$/', $lastName)){
            $errors['lastName'] = 'Name must be letters and spaces only'. '<br>';
        }
        
    }

    //phoneNo
    if (empty($_POST['phoneNum'])){
        $errors['phoneNum'] = 'Phone Number is required <br />';
    } else{
        $phoneNum = $_POST['phoneNum'];
        if(!preg_match('/^[0-9\s]+$/', $phoneNum)){
            $errors['phoneNum'] = 'Numbers only'. '<br>';
        }
        
    }

    //password
    if (empty($_POST['password'])){
        $errors['password'] = 'Password is required <br />';
    } else{
        $password = $_POST['password'];
        if(!preg_match('/^[a-zA-z\s]+$/', $password)){
            $errors['password'] = 'Title must be letters and spaces only'. '<br>';
        }
        
    }
    if (empty($_POST['passwordConfirm'])){
        $errors['passwordConfirm'] = 'Password Confirmation is required <br />';
    } else{
        $passwordConfirm = $_POST['passwordConfirm'];
        if(!preg_match('/^[a-zA-z\s]+$/', $passwordConfirm)){
            $errors['passwordConfirm'] = 'Title must be letters and spaces only'. '<br>';
        }
        
    }
    
    if(array_filter($errors)){
        //echo 'there are errors in the form';
    }else{
        header('location: regsuccessful.php');
    }
        // $email = mysqli_real_escape_string($conn, $_POST['email']);
        // $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        // $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        // $phoneNum  = mysqli_real_escape_string($conn, $_POST['phoneNum']);
        // $password = mysqli_real_escape_string($conn, $_POST['passsowrd']);
        // $passwordConfirm = mysqli_real_escape_string($conn, $_POST['passwordConfirm']);
        
    
    

} //end of post check

   



?>
<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php');?> 
        <section class="container grey-text">
        <br>
        <br>
        <form action="signup.php" class="white center" id="signupForm" method="POST">
        <h3 class="center">Hello!</h3>
        <h6 class="center">Kindly fill in the form below.</h6><br>

           
            <input name="email" placeholder="Email" type="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label for="" >Email</label>

    
            <div class="row">
                <div class="input-field col s12 m6 l6">
               
                    <input name="firstName" placeholder="First Name" type="text"  value="<?php echo htmlspecialchars($firstName) ?>">
                    <div class="red-text"><?php echo $errors['firstName']; ?></div>
                    <label for="">First Name</label>
                </div>
                <div class="input-field col s12 m6 l6">
                
                    <input name="lastName" placeholder="Last Name" type="text"  value="<?php echo htmlspecialchars($lastName) ?>">
                    <div class="red-text"><?php echo $errors['lastName']; ?></div>  
                    <label for=""> Last Name </label>    
                </div>
            </div>

            <label for="">Phone Number </label>
            <input name="phoneNum" placeholder="Phone Number" type="text" value="<?php echo htmlspecialchars($phoneNum) ?>">
            <div class="red-text"><?php echo $errors['phoneNum']; ?></div>

            <label for=""></label>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input name="password" placeholder="Password" type="text"  value="<?php echo htmlspecialchars($password) ?>">
                    <div class="red-text"><?php echo $errors['password']; ?></div>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input name="passwordConfirm" placeholder="Retype Password" type="text"  value="<?php echo htmlspecialchars($passwordConfirm) ?>">
                    <div class="red-text"><?php echo $errors['passwordConfirm']; ?></div>
                </div>
            </div>

            <div class="row confirmation">
                <div class="col s12 l12">
                    <p>
                    <label>
                    <input type="checkbox" name="agree" />
                    <span>I agree with the terms and conditions of this service.</span>
                    </label>
                    </p>
                </div>
            </div>
            <div class="center">
            <input class="btn grey waves-effect waves-light z-depth-0" type="submit" name="submit" value="Submit">
            </div>
        </form>
    </section>

    <!-- <div class="row">
                <div class="input-field col s12">
                    <input id="email" placeholder="Email" type="email" class="validate">
                    
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="phone_num" placeholder="Phone Number" type="text" class="validate">
                    
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" placeholder="Password" type="password" class="validate">
                    
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password_revalidation" placeholder="Retype Password" type="password" class="validate">
                    
                </div>
            </div> -->   

            <?php include('include/footer.php');?>