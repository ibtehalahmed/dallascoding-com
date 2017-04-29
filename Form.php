<html>
  <body>

    <?php

		    if($_POST)
		    {
		        $FName=$_POST['FName'];
		        $ClientEmail=$_POST['Email'];
		        $message=$_POST['Message'];

            echo $FName;
            echo "\r\n";
            echo $ClientEmail;
            echo "\r\n";
            echo $message;

		        $to="ahmedslama2013@gmail.com";
		        $subject = $FName;
		        $Headers = $ClientEmail;

            if(mail($to,$subject,$message,"From:" . $Headers)){

		        echo "<h4>Thank you for sending email</h4>";
             }else {
                echo $to
                echo $subject
                echo $message
                echo "From:" . $Headers
                echo "Error";
             }
		    }
		    else {  }

		?>
  </body>
</html>
