<!DOCTYPE html>
<html>
<body>
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

  //Email information
  $admin_email = "ahmedslama2013@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];

  //send email
  if(mail($admin_email, "$subject", $comment, "From:" . $email)){
    echo "Thank you for contacting us!";
  }

  //Email response
  }

  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>

<?php
  }
?>
</body>
</html>
