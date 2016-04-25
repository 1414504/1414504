<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
         <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>BugTracker</title>
    </head>
    <body>
        
        <div class="container border">

            <header>
                
                
            <div class="row border">
                <div class="col-md-2">
                    <img class ="image-logo" src="image/logo.png" alt="" />

                    
                </div>
                
                <div class="col-md-10">
                        
                        <h2>BugTracker</h2>
                        <h3>Keeping Track all of the Peski little bugs</h3>
                        
                    </div>
    
            </div>
            
           
                
            </header>
           
            <div class="row">
                <div class="col-md-2 min-height">
                  <?php
                   include './navbar.php';
                   ?>
                
                </div>
                    
                
                <div class="col-md-10 border min-height">
                    
                    <?php
                            $con = new mysqli("localhost", "root", "root", "bugtracker");
                            if(mysqli_errno($con))
                            {
                                die(mysqli_error($con)." error connectiion failed.");
                            }
                            
                            $sql = "select * from bug";
                            $result = $con->query($sql);
                            $con->close();
                            if(mysqli_num_rows($result)>0)
                            {                                
                                while($bug = mysqli_fetch_array($result))
                                {
                                    ?>
                                        <div class = "row margin-top">
                        <div class="col-md-6">
                            <input value="<?php echo $bug['bug_name']; ?>" class="form-control">
                        </div>
                        
                    </div>
                    
                      <div class = "row margin-top">
                          <div class="col-md-6">
                            <input value="<?php echo $bug['bug_category']; ?>" class="form-control">
                        </div>
                        
                    </div>
                    
                      <div class = "row margin-top">
                          <div class="col-md-9">
                              <textarea class="form-control"> <?php echo $bug['bug_summary']; ?> </textarea>
                        </div>
                        
                    </div>
                    
                    <hr>
                    
                    
                    <?php
                                }
                            }
                            
                            
                    ?>
                    

                    
                </div>
            </div>
            
            <div class="row">
            
                <div class="col-md-12 border footer">
                    Designed by Shahid Baig
                    
                </div>
                
        </div>

            </div>

    </body>
</html>

