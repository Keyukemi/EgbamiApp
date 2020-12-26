<!DOCTYPE html>
<html>

<?php include('include/specialheader.php');?> 
      
    <section >
        <!-- class="app-wrap" -->
    <br>
    <br>
        <form action="" class="white container" id="loginForm">
        <h3 class="center-align">Log In</h3><br>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" placeholder="Email" type="email" class="validate">
                    <!-- <label for="email">Email</label> -->
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" placeholder="Password" type="password" class="validate">
                    <!-- <label for="password">Password</label> -->
                </div>
            </div>
            <div class="row">
                <div class="col s12 l12">
                    <p>
                    <label>
                    <input type="checkbox" />
                    <span>Keep me logged in</span>
                    </label>
                    </p>
                </div>
            </div>
            <div class="center">
                <button class="btn-small cyan lighten-2 waves-effect waves-light" type="submit" name="action">Log In </button>
            </div>
            <br>
            <div class="center">
                <h6>New here? <a href="signup.php">Register.</a></h6>
                <br>
                
            

            </div>
        </form>
    </section>
         
    <?php include('include/specialfooter.php');?>