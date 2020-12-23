<!DOCTYPE html>
<?php include('include/header.php');?> 
    
<section>
<div class="container">
        <h3 class="center-align">Place Your Order</h3><br>
        <form action="#" method="post"><br>
            <input type="text" name="name" placeholder="Full name" required/><br>
            <input type="text" name="number" placeholder="Phone Number" required/><br>
            <input type="text" name="email" placeholder="Email" required/><br>
           
            <!-- <label for="services">Choose Service to offer: </label>
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
                <option value="photography">Photographer</option>
                <option value="makeup">Makeup Artiste</option>
                   
            </select> -->
            <input type="text" name="name" placeholder="What's the problem?"required/><br>
            <input type="text" name="number" placeholder="How much is your budget?"required/><br>
            <input type="text" name="email" placeholder="current address"required/><br>
            <input type="text" name="number" placeholder="City"required/><br>
            <input type="text" name="email" placeholder="State"required/><br>
         
            <div class="center-align">
                <button class="center-align hoverable black waves-effect waves-light btn z-depth-0 white-text">Submit</button>
            </div>
        </form> 
        </div>
    </div>
</section>

<?php include('include/footer.php');?> 