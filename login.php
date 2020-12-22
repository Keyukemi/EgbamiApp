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
        <form action="" class="white container" id="loginForm">
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