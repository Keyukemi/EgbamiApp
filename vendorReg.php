<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php');?> 

<body>
<div class="container">
    <div class="center-align">
        <h3>Register Here</h3>
    </div><br>
        <form action="#" method="post"><br>
            <div class="personal">
                <input type="text" name="name" placeholder="Full Name" required/><br>
                <input type="text" name="companyName" placeholder="Company name" required/><br>
                <input type="text" name="phoneNumber" placeholder="Phone Number" required/><br>
                <input type="text" name="Address" placeholder="Street Address" required/><br>
                <input type="text" name="email" placeholder="Email" required/><br>
                <input type="text" name="city" placeholder="City" required/><br> 
                <input type="text" name="state" placeholder="State" required/><br>
                <input type="text" name="password1" placeholder="Enter Password" required/><br>
                <input type="text" name="password2" placeholder="Retype Password" required/><br>
                <input type="text" name="services" placeholder="What Service will you offer?" required/><br><br>
                
                <!-- <label for="service">Choose Service to offer: </label>

                    <select name="service" id="services">
                        <option value="barber">Barber</option>
                        <option value="hairStylist">Hair Stylist</option>
                        <option value="tailor">Tailor</option>
                        <option value="laundry">Laundry Services</option>
                        <option value="mechanic">Mechanic</option>
                        <option value="painter">Painter</option>
                        <option value="plumber">Plumber</option>
                        <option value="gymInstructor">Gym Instructor</option>
                        <option value="chef">Personal Chef</option>
                        <option value="shopper">Personal Shopper</option>
                        <option value="masseuse">Masseuse</option>
                        
                    </select><br><br> -->

                <div class="center-align">
                    <button class="center-align hoverable black waves-effect waves-light btn z-depth-0 white-text">Submit</button>
                </div>
            </div>
        </form>
</div>

<?php include('include/footer.php');?> 