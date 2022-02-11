<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
            <nav class="navbar">
        
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <?php 
                require_once 'utils/functions.php';
                echo '<a href = "index.php" class = "navbar-brand">
                    Event Management Systems
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php 
                //links to database contents. *if logged in
                if(is_logged_in()){
                    require_once 'utils/functions.php';
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "viewEvents.php">Events</a></li>';
                    echo '<li><a href = "viewLocations.php">Locations</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "logout.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                }  
                //links non database contents. *if logged out
                else {
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "events2.php">Events</a></li>';
                    echo '<li><a href = "locations2.php">Locations</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<button type = "button" class = "btn btn-default navbar-btn" data-toggle = "modal" data-target = "#login">Login <Span class="glyphicon glyphicon-log-in"></span></button>';
                }
                ?>
                
                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--modal for login-->
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"><!--modal header-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Login</h4><!--modal title-->
                            </div>
                            <div class="row">
                                <div class="modal-body"><!--modal content-->
                                    <div class ="col-md-6 col-md-offset-3">
                                        <form action="login.php" method="POST">
                                            <div class = "form-group"><!--username-->
                                                <label for="username">Username:</label>
                                                <input type="text"
                                                       name="username"
                                                       class="form-control"
                                                       value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>"
                                                       />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['username'])) echo $errors['username']; ?>
                                                </span>
                                            </div>
                                            <div class="form-group"><!--password-->
                                                <label for="password">Password:</label>
                                                <input type="password"
                                                       name="password"
                                                       class="form-control"
                                                       value=""
                                                       />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['password'])) echo $errors['password']; ?>
                                                </span>
                                            </div>
                                            <button type="submit" class = "btn btn-default loginbtn">Login</button><!--login button-->
                                            <a class="btn btn-default navbar-btn rgsterbtn" href = "register_form.php">Register</a><!--register button-->
                                        </form>
                                    </div>
                                </div><!--modal body div-->
                            </div><!--row div-->
                            <div class="modal-footer"><!--modal footer-->
                            <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                            </div><!--modal footer div-->
                        </div><!--modal content div-->
                    </div><!--modal dialog div-->
                </div><!--modal div-->
            </ul>
        </div><!--container div-->
    </nav>
        <div class = "container"><!--body content holder-->
            <div class="container-fluid">
          <div class="row">
              <div class="col-sm-8">
                <h1>Fashion</h1>
                  <p>Fashion is a form of self-expression and autonomy at a particular period and place and in a specific context, of clothing, footwear, lifestyle, accessories, makeup, hairstyle, and body posture.[1] The term implies a look defined by the fashion industry as that which is trending. Everything that is considered fashion is available and popularized by the fashion system (industry and media).

                    Due to increased mass-production of commodities and clothing at lower prices and global reach, sustainability has become an urgent issue among politicians, brands, and consumers. </p>

							<p>The most important day in a model's life.
                            Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                            location for your special day.</p>
                            <p>
                                Fashion scholar Susan B. Kaiser states that everyone is "forced to appear", unmediated before others.[4] Everyone is evaluated by their attire, and evaluation includes the consideration of colors, materials, silhouette, and how garments appear on the body. Garments identical in style and material also appear different depending on the wearer's body shape, or whether the garment has been washed, folded, mended, or is new.

Fashion is defined in a number of different ways, and its application can be sometimes unclear. Though the term fashion connotes difference, as in "the new fashions of the season", it can also connote sameness, for example in reference to "the fashions of the 1960s", implying a general uniformity. Fashion can signify the latest trends, but may often reference fashions of a previous era, leading to the understanding of fashions from a different time period re-appearing. While what is fashionable can be defined by a relatively insular, esteemed and often rich aesthetic elite who make a look exclusive, such as fashion houses and haute couturiers, this 'look' is often designed by pulling references from subcultures and social groups who are not considered elite, and are thus excluded from making the distinction of what is fashion themselves.
                            </p>
              </div>
              
					
						
              <div class="col-sm-4">
              	<h3>Fashion</h3>
			<img src="images/fashion.jpg" class="img-responsive">
              </div>
          </div>
      </div>
         </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
