<?php
    session_start();
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Boom University</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <header class="container">
            <div class="row">
                <h1 class="col-sm-6"><a href="index.html">Boom University</a></h1>
                <nav>
                    <div>
                        <form action="login.php" method="POST">
                            <input type="text" name="starid" placeholder="StarID" required>
                            <input type="password" name="pwd" placeholder="Password" required>
                            <button type="submit" class="btn btn-success"> login </button>
                        </form>
                    </div>
                </nav>
            </div>
        </header>
        <section class="jumbotron">
            <div class="container">
                <div class="row text-center">
                    <h2>Computer Science Majors</h2>
                    <h3>Check your classes for the spring semester!</h3>
                    <a class="btn btn-primary" href="#">Click Here</a>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8 border-fancy">
                <h1 class="text-center"><u>Online Advisor</u></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eleifend, odio ac aliquet vulputate, justo orci tempor eros, ut fringilla dolor nisi ut quam. Cras molestie metus eget elit ultricies, quis lobortis massa auctor. Morbi placerat arcu purus, vitae feugiat nisl venenatis ac. Donec tempus non velit non fermentum. Aenean et varius lectus. Nunc accumsan finibus leo nec dapibus.</p>
            </div>
        </section>

        <section class="container marg">
            <h1 class="text-center">Create an account</h1>
            <hr>
            <div align="center">
                <form action="signup.php" method="POST">
                    <input type="text" name="first" placeholder="First Name" focus required><br>
                    <input type="text" name="last" placeholder="Last Name" required><br>
                    <input type="email" name="email" placeholder="E-mail" required><br>
                    <input type="text" name="starid" placeholder="StarID"  max="8" required><br>
                    <input type="password" name="pwd" placeholder="Password" required><br>
                    <small>Passwords are case sensitive</small>
                    <div align="right">
                        <button type="submit" name="submit" class="button-custom" onclick="alert('Signup Success')"> SIGN UP </button><br>
                        <a href="#"> Forgot your password?</a>
                    </div>
                </form>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-left">
                        <p>
                            &copy; Boom University</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eleifend, odio ac aliquet vulputate, justo orci tempor eros, ut fringilla dolor nisi ut quam. Cras molestie metus eget elit ultricies, quis lobortis massa auctor. Morbi placerat arcu purus, vitae feugiat nisl venenatis ac. Morbi non mi condimentum, lobortis eros vitae, elementum sapien.</p>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                        <address class="text-left">
          <h4>Visit Us:</h4>
    Comp Name<br>
    Street<br>
    Building No<br>
    City, St 94043-0801<br>
    USA <br>
    You can contact us @ <a href="http://www.somedomain.com/contact">www.somedomain.com</a><br>
  If you see any bugs, please <a href="mailto:webmaster@somedomain.com">contact webmaster</a><br>
  </address>
                        <ul>
                            <li class="col-sm-1">
                                <a href="https://www.facebook.com/NewHomesofMN/" title="Find Us on Facebook" target="_blank"><img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/facebook.svg"></a>
                            </li>
                            <li class="col-sm-1">
                                <a href="http://linkedin.com/company/better-homes-and-gardens-real-estate-all-seasons" title="Connect with Us on Linkedin" target="_blank"><img src="http://ferrys.es/img/icon-in.png" height="62px" width="62px"></a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>

    </html>
