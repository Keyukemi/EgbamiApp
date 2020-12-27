
<!DOCTYPE html>
<html lang="en">
<?php include('include/specialheader.php');?> 
        <section class="app-wrap">
        <br>
        <br>
        <form action="" class="white container center" id="signupForm">
        <h3>Hello!</h3>
        <h6>Kindly fill in the form below.</h6>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input id="first_name" placeholder="First Name" type="text"  class="validate">
                    <!-- <label for="first_name">First Name</label> -->
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="last_name" placeholder="Last Name" type="text"  class="validate">
                    <!-- <label for="last_name">Last Name</label> -->
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" placeholder="Email" type="email" class="validate">
                    <!-- <label for="email">Email</label> -->
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="phone_num" placeholder="Phone Number" type="tel" class="validate">
                    <!-- <label for="phone_num">Phone Number</label> -->
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" placeholder="Password" type="password" class="validate">
                    <!-- <label for="password">Password</label> -->
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password_revalidation" placeholder="Retype Password" type="password" class="validate">
                    <!-- <label for="password_revalidation">Retype Password</label> -->
                </div>
            </div>
            <div class="row confirmation">
                <div class="col s12 l12">
                    <p>
                    <label>
                    <input type="checkbox" />
                    <span>I agree with the terms and conditions of this service.</span>
                    </label>
                    </p>
                </div>
            </div>
            <div class="row center">
            <button class="btn-small cyan lighten-2 waves-effect waves-light" type="submit" name="action">Sign Up </button>
                <!-- <input type="submit" value="submit" class="btn-small cyan lighten-2 z-depth-0"> -->
            </div>
        </form>
    </section>
         
    <?php include('include/specialfooter.php');?>