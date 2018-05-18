<title>Contact | New Berlin Bowl &amp; Ale House</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php
include 'includes/header.php';
?>


<?php
if (isset($_POST['submitted'])){
    
    require_once('sql/mysql_connect.php');
    
        $firstname = mysqli_real_escape_string($dbc, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($dbc, $_POST['lastname']);
        $email = mysqli_real_escape_string($dbc, $_POST['email']);
        $subject = $_POST['subject'];
        $message = mysqli_real_escape_string($dbc, $_POST['message']);
    
        // form validation
        $errors = array();
    
        if (empty($firstname)) 
            {
                $errors['firstname'] = "First name required";
            }
        elseif (empty($lastname))
             {
                $errors['lastname'] = "Last name required";
            }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors['email'] = "Valid email required";
            }
        elseif (!isset($subject))
            {
                $errors['subject'] = "Subject required";
            }
        elseif (empty($message))
            {
                $errors['message'] = "Message required";
            }
        else
            {
          $sql = "INSERT INTO new_berlin (firstname, lastname, email, subject, message)
                VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";
            
            mysqli_query($dbc, $sql);
            
          $url='thankyou.php';
  
          echo '<script>window.location = "'.$url.'";</script>';
            
            if ($subject == "Banquets") {
                $email_to = "jtfranz90@gmail.com";
            }
            elseif ($subject == 'Bowling') {
                $email_to = "franze23@uwm.edu";
            }
            elseif ($subject == 'Pro Shop') {
                $email_to = "justin.franzen90@gmail.com";
            }
            else  {
                $email_to = "jtfranz90@gmail.com";
            }
        
         $email_from = "mail.jfranzdesigns.com";
         $content = $firstname . " " . $lastname . " is interested in more information about " . $subject . " \nEmail: " . "$email" . "\n \n $message";
         mail($email_to, $subject, $content);
            }  
    
    //end form validation
  
}   


?>


<body>
    
<img src="images/new-berlin-title.jpg" alt="New Berlin Bowl and Ale House" class="title-img"/>
    
<div class="parallax4"></div>
    
<div id="main">
    
       <div id="contact-section">
        
            <p>If you are interested in any additional information about bowling, banquets, volleyball, or our proshop, please fill out the form below.</p>

            <br>

            <p>16000 W. Cleveland Ave New Berlin, WI 53151</p>

            <span class="glyphicon glyphicon-earphone"></span><a href="tel:262-641-0016" class="phone">262-641-0016</a>

        </div>
    
    <div class="content content2">
    
        <div class = "row">
            
            <div class="col-lg-6 col-md-6 col-sm-12">
            
                     <form id="myForm" action="contact.php" method="post" >

                        <label for="fname">First Name * &nbsp;</label><input type="text" name="firstname" size="14" placeholder="First Name" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>">
                            <p class="error"><?php if(isset($errors['firstname'])) echo $errors['firstname']; ?></p>

                          <label for="lname">Last Name * &nbsp;</label><input type="text" name="lastname" size="14" placeholder="Last Name" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>">
                          <p class="error"><?php if(isset($errors['lastname'])) echo $errors['lastname']; ?></p>

                          <label for="email">Email * &nbsp;</label><input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                         <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                         
                          <label for="Subject">Subject * &nbsp;</label>
                             <select name="subject">
                             <option selected disabled hidden style='display: none' value=""></option>    
                             <option value="Bowling" <?php if ($_POST['subject'] == 'Bowling') echo 'selected="selected"';?>>Bowling</option>
                             <option value="Banquets" <?php if ($_POST['subject'] == 'Banquets') echo 'selected="selected"';?>>Banquets</option>
                             <option value="Volleyball" <?php if ($_POST['subject'] == 'Volleyball') echo 'selected="selected"';?>>Volleyball</option>
                             <option value="Pro Shop"<?php if ($_POST['subject'] == 'Pro Shop') echo 'selected="selected"';?>>Pro Shop</option>
                             </select>
                            <p class="error"><?php if(isset($errors['subject'])) echo $errors['subject']; ?></p>
                             
                             <label for="comments">Message *</label>
                             <textarea rows="5" style="width:100%" name="message" placeholder="Message" value="<?php if(isset($_POST['message'])) echo $_POST['message'];?>"></textarea>
                             <p class="error"><?php if(isset($errors['message'])) echo $errors['message']; ?></p>
                            <br />
                         
                            <p align="center"><input type="submit" value="Send" name="Submit" id="submit">
                                <input type="hidden" name="submitted" value="TRUE" /></p>
                            </form> 
            
            </div>
            
                <div class="col-lg-6 col-md-6 col-sm-12">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2918.156266884699!2d-88.11598528452345!3d42.99604397914926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8805089999e384a7%3A0x526925fea86ac4ef!2sNew+Berlin+Ale+House!5e0!3m2!1sen!2sus!4v1506618629473" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
        
        
            </div>
    </div>
</div>
</body>
    
<?php
include 'includes/footer.php';
?>