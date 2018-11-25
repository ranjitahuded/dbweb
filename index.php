<!DOCTYPE html>
<html>
<head>
    <title>Happymove</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta charset="UTF-8">
    <title>A Home Rental Service</title>
    <link rel="stylesheet" href="css/boorstrap.min.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="#about" class="navbar-brand">HappyMove</a>
                </div>
        
                <div class="collapse navbar-collapse" id="navbar-collapse">

                    <a href="#login" class="btn btn-info navbar-btn navbar-right">Register Here</a>
                    <ul class="nav navbar-nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#inventory">Inventory</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>                               
                    </ul>           
                </div>
            </div>  
        </nav><!--End Nav-->
        <div class="jumbotron">
            <div class="container text-center">
               <h2>HappyMove </h2>
           <img src="img/mv.gif"height="200"width="350">
              </div><!--End container-->
        </div>

        <div class="cover" id="home">
          <div class="container">
                <div class="row main">
                    <div class="col-lg-12">
                    <h1>HappyMove</h1>
                    <h3>A Home Appliance Rental Service</h3>
                    <hr>
                    <button class="btn btn-default btn-lg" type="submit"><i class="fa fa-paw" aria-hidden="true"></i> Get Started!</button>
                    </div>
                </div>
           </div>          
        </div>

        <div class="jumbotron" id="about">
            <div class="container text-center">
                <h1>HappyMove</h1>
                <p>This startup provides a quick and efficient Home-Appliance Rental Service. The people who get trasferred from city to city run short on monetary funds. For their, and many other peoples, convenience this rental service provides a platform to organize and make the process of renting domestic appliances easier and more convenient.
                </p>
                <div class="btn-group">
                    <a href="#login" class="btn btn-lg btn-info">Register</a>
                    <a href="#inventory" class="btn btn-lg btn-default">Inventory</a>
                    <a href="#contact" class="btn btn-lg btn-info">Contact Us</a>
                
                </div>
            </div>  
        </div>

<?php
echo "<h1>Working</h1>";
if(isset($_POST['submit1']))
{
    $first=$_POST['first'];
    $last=$_POST['last'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    echo "<h1>Working</h1>";
    echo $phone;


    if(!empty($first))
    {
        if(!empty($email))
        {
            if (!empty($password)) 
            {
                $host="localhost";
                $dbusername="root";
                $dbpassword="root";
                $dbname="projectdb";

                $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                if(mysqli_connect_error())
                {
                    die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
                }
                else
                {
                    $sql="INSERT INTO customer values (0,'$first','$last','$email','$password','$phone')";
                    if($conn->query($sql))
                    {
                        //echo "Insertion successful!";
                    }
                    else
                    {
                        echo "Error:".$sql."<br>".$conn->error;
                    }
                    $conn->close();
                }
            }
            else
            {
                echo "Password cannot be empty!";
                die();
            }
        }    
        else
        {
            echo "Email cannot be empty!";
            die();
        }
    }
    else
    {
        echo "First name cannot be empty!";
        die();
    }
}
?>

<?php
if(isset($_POST['submit2']))
{
    $message=$_POST['user[email]'];
    echo 'message will come here';
    echo $message;
}
?>


        <div class="container logmain" id="login">
            <div class="col-md-6">
                <div id="logbox">
                    <form id="signup" method="post" action="">
                        <h1>Create an Account</h1>
                        <input name="first" type="text" placeholder="First Name" autofocus="autofocus" required="required" class="input pass"/>
                        <input name="last" type="text" placeholder="Last Name" class="input pass"/>
                        <input name="email" type="email" placeholder="Email address" required="required" class="input pass">
                        <input name="password" type="password" placeholder="Password" required="required" class="input pass">
                        <input name="phone" type="text" placeholder="Phone no." class="input pass"/>
                        <input type="submit" name="submit1" value="Sign me up!" class="inputButton">
                    </form>
                </div>
            </div>

   
            <div class="col-md-6">
                <div id="logbox">
                    <form id="signup" method="post" action="">
                        <h1>Account Login</h1>
                        <?php echo $message; ?>
                        <input name="user[email]" type="email" placeholder="Email Address" class="input pass"/>
                        <input name="user[password]" type="password" placeholder="Password" required="required" class="input pass"/>
                        <input type="submit" name="submit2" value="Sign me in!" class="inputButton"/>
                    </form>
                </div>
            </div>
        </div>
        
        <div class ="container" id="inventory">
        <section>
            <div class="page-header">
                <h2>Inventory</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                                          <h4>Home Appliances</h4>
                      <form method="post"><input type="image" name="send1" src="img/happ5.jpg"></form>
<?php
if(isset($_POST['send1_x'], $_POST['send1_y']))
{
    echo "<br><br><h1>Inventory Working</h1>";
}
?>
                </div>

                                <div class="col-lg-4">
                                          <h4>Kitchen Appliances<b></h4>
                      <form method="post"><input type="image" name="send2" src="img/happ5.jpg"></form>
<?php
if(isset($_POST['send2_x'], $_POST['send2_y']))
{
    echo "<br><br><h1>Inventory Working</h1>";
}
?>
                      
                </div>
                
                                <div class="col-lg-4">
                                          <h4>Electonics</h4>
                      <form method="post"><input type="image" name="send3" src="img/happ5.jpg"></form>
<?php
if(isset($_POST['send3_x'], $_POST['send3_y']))
{
    echo "<br><br><h1>Inventory Working</h1>";
}
?>
                </div>
                <br><br>
                                <div class="col-lg-4">
                                          <h4>Furniture</h4>
                      <form method="post"><input type="image" name="send4" src="img/happ5.jpg"></form>
<?php
if(isset($_POST['send4_x'], $_POST['send4_y']))
{
    echo "<br><br><h1>Inventory Working</h1>";
}
?>
                                </div>
                
                                <div class="col-lg-4">
                                          <h4>Bikes</h4>
                      <form method="post"><input type="image" name="send5" src="img/happ5.jpg"></form>
<?php
if(isset($_POST['send5_x'], $_POST['send5_y']))
{
    echo "<br><br><h1>Inventory Working</h1>";
}
?>            
                  </div><!--end row-->
        </section>
    </div><!--end container-->

        <div class="container">
    <section>
        <div class="page-header" id="gallery">
                <h2>Gallery.<small>Check out our collections</small></h2>
        </div>

        <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-targer="#screenshot-carousel" data-slide-to="0" class="active"></li>
                <li data-targer="#screenshot-carousel" data-slide-to="1"></li>
                <li data-targer="#screenshot-carousel" data-slide-to="2"></li>
                <li data-targer="#screenshot-carousel" data-slide-to="3"></li>
                <li data-targer="#screenshot-carousel" data-slide-to="4"></li>
                <li data-targer="#screenshot-carousel" data-slide-to="5"></li>
                <li data-targer="#screenshot-carousel" data-slide-to="6"></li>
                <li data-targer="#screenshot-carousel" data-slide-to="7"></li>
                <li data-targer="#screenshot-carousel" data-slide-to="8"></li>
                <li data-targer="#screenshot-carousel" data-slide-to="9"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/cbb.jpg" alt="Text of image">
                    </div>
                <div class="item">
                    <img src="img/cff.jpg" alt="Text of image">
                </div>
                <div class="item">
                    <img src="img/ft.jpg" alt="Text of image">
                </div>
                <div class="item">
                    <img src="img/cf.jpg" alt="Text of image">
                </div>
                <div class="item">
                    <img src="img/ccee.jpg" alt="Text of image">
                </div>
                <div class="item">
                    <img src="img/cha.jpeg" alt="Text of image">
                </div>
                <div class="item">
                    <img src="img/cehn.jpg" alt="Text of image">
                </div>
                <div class="item">
                    <img src="img/hn.jpg" alt="Text of image">
                </div>
                <div class="item">
                    <img src="img/cft.jpg" alt="Text of image">
                </div>
                
            </div><!--end carousel inner-->
            <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!--end carousel-->
    </section>
</div>
                 <div class="container">

<section>
        <div class="page-header" id="contact">
            <h2>ContactUS.<small>Info given below.</small></h2>
        </div><!--end page header-->

        <div class="row">
            <div class="col-lg-4">
                <p>Send us a message or contact us from the address below</p>
                <address>
                    <strong>Wiki pvt ltd</strong></br>
                    #112,makdi nagar</br>
                    New Mysuru</br>
                    p: 0903223442
                </address>
            </div>
            <div class="col-lg-8">
                    <form action="" class="form-horizontal">
                        <div class="form-group">
                            <label for="user-name" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="user-name" placeholder="enter your name">
                            </div>
                        </div><!--end form group-->

                        <div class="form-group">
                            <label for="user-email" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="user-email" placeholder="enter your mail-id">
                            </div>
                        </div><!--end form group-->

                        <div class="form-group">
                            <label for="user-url" class="col-lg-2 control-label">Your Website</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="user-name" placeholder="enter your website">
                            </div>
                        </div><!--end form group-->

                        <div class="form-group">
                            <label for="user-msg" class="col-lg-2 control-label">Message</label>
                            <div class="col-lg-10">
                                <textarea name="user-message" id="user-message" class="form-control" cols="20" rows="10" placeholder="Enter your message"></textarea> 
                        <hr>
                        </div><!--end form group-->

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
            </div><!--col-lg-4 ends-->
        </div><!--end row-->
</section>

</div><!--end container-->        

        <br><br>


        <script type="text/javascript" src="js/jquery.js"></script>   
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <script type="text/javascript">
$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event){
    if(location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')&&location.hostname == this.hostname){
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top},1000,function(){var $target = $(target);$target.focus();
          if($target.is(":focus")){return false;}else{$target.attr('tabindex','-1');$target.focus();};});}}});
        </script>

</body>
</html>