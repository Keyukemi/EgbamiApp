<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href= "https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="assets/css/fonts_awesome/fa-brands.min.css">
    <link rel="stylesheet" href="assets/css/fonts_awesome/fa-brands.css">
    <link rel="stylesheet" href="assets/css/fonts_awesome/fa-regular.css">
    <link rel="stylesheet" href="assets/css/fonts_awesome/fa-regular.min.css">
    <link rel="stylesheet" href="assets/css/fonts_awesome/fa-solid.css">
    <link rel="stylesheet" href="assets/css/fonts_awesome/fa-solid.min.css">
    <link rel="stylesheet" href="assets/css/fonts_awesome/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/fonts_awesome/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/fonts_awesome/fontawesome.css">
    <link rel="stylesheet" href="assets/css/fonts_awesome/fontawesome.min.css">
    <script src="https://use.fontawesome.com/61b09a571b.js"></script>
</head>
<body>
<header>
        <div>
            <nav class="transparent">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#" class="sidenav-trigger" data-target="links"><i class="material-icons">menu</i></a>
                        <ul class="hide-on-med-and-down right">
                            <li class="active "><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li></li>
                            <li><a href="#vendorForm" class=" blue waves-effect waves-light btn"> Register a service</a></li> 
                            <li><a href="#usersForm" class=" blue waves-effect waves-light btn"> Sign Up as a User </a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="sidenav" id="links">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#reviews">Testimonials</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        
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
         
    <footer class="page-footer">
        <div class="container center-align">
            <ul>
                <li>
                    <a><i class="fa fa-facebook-square"></i></a>
                    <a><i class="fa fa-instagram"></i></a>
                    <a><i class="fa fa-twitter-square"></i></a>
                    <a><i class="fa fa-linkedin-square"></i></a>
                </li>
            </ul>
        </div>
        <div class="container center-align">
            <div class="row">
                    <a class="white-text">About Us    </a>     <a class="white-text">Blog      </a>   <a class="white-text">Contact Us</a>
            </div>
        </div>
        <div class="footer-copyright blue-text">
            <div class="container">
                <div class="container center-align">&copy; 2020 Egbami</div></br>
                <div class="container center-align">Made with <i class="material-icons" id="love icon">favorite</i> by Project10-LAW</div>
                <div class="container center-align">Pearls Africa Foundation</div>  
            </div>
        </div>
            
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.materialboxed').materialbox();
        })
        </script>
</body>
</html>