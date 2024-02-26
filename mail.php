<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';
//  try{
 if (isset($_POST["send1"])) {
    
         $mail = new PHPMailer(true);
 
         // Server settings
         $mail->isSMTP();
         $mail->Host       = 'smtp.gmail.com';
         $mail->SMTPAuth   = true;
         $mail->Username   = 'svappssoftsolutionspvtltd@gmail.com';
         $mail->Password   = 'rhrj ysft pjzn dtgv';
         $mail->SMTPSecure = 'ssl';
         $mail->Port       = 465;
   // Sanitize user inputs
   $fname = $_POST["firstname"];
$email = $_POST["email"];
$subject=$_POST["subject"];
// $textarea=$_POST["message"];
$mobile = $_POST["mobile"];

         // Recipients and content
         $mail->setFrom($email, $fname);
         $mail->addAddress('swagathgrandhotel09@gmail.com');
         $mail->addReplyTo($email, $fname);
         $mail->isHTML(true);
         $mail->Subject = "Hotel Swagath Grand";
 
       
 
         // Construct email body
         $mail->Body = "<table>
         <tr>
             <td>Name :</td>
             <td>" . $fname . "</td>
         </tr>
         <tr>
             <td>Email Id :</td>
             <td>" . $email . "</td>
         </tr>
         <tr>
             <td>Mobile Number :</td>
             <td>" . $mobile . "</td>
         </tr>
         <tr>
             <td>Subject :</td>
             <td>" . $subject . "</td>
         </tr>
     </table>";
         
     
 
         // Send the email
         $mail->send();
 
         echo
         " 
         <script> 
        //   alert('Message was sent successfully!');
          document.location.href = 'thankyou.html';
         </script>
         ";
 } 








if (isset($_POST["send2"])) {
    
        $mail = new PHPMailer(true);

        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'svappssoftsolutionspvtltd@gmail.com';
        $mail->Password   = 'rhrj ysft pjzn dtgv';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
  // Sanitize user inputs
  $fname = $_POST["fname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$checkindate = $_POST["date"];
$checkoutdate = $_POST["date2"];
$adults = $_POST["adults"];
$room = $_POST["room"];
$child=$_POST["child"];

        // Recipients and content
        $mail->setFrom($email, $fname);
        $mail->addAddress('swagathgrandhotel09@gmail.com');
        $mail->addReplyTo($email, $fname);
        $mail->isHTML(true);
        $mail->Subject = "Hotel Swagath Grand";

      

        // Construct email body
        $mail->Body = "<table>
        <tr>
            <td>Name :</td>
            <td>" . $fname . "</td>
        </tr>
        <tr>
            <td>Email Id :</td>
            <td>" . $email . "</td>
        </tr>
        <tr>
            <td>Mobile Number :</td>
            <td>" . $mobile . "</td>
        </tr>
        <tr>
            <td>Check in date :</td>
            <td>" . $checkindate . "</td>
        </tr>
        <tr>
            <td>Check out date :</td>
            <td>" . $checkoutdate . "</td>
        </tr>
        <tr>
            <td>Adults :</td>
            <td>" . $adults . "</td>
        </tr>
         <tr>
            <td>Children :</td>
            <td>" . $child . "</td>
        </tr>
        <tr>
        <td>Rooms :</td>
        <td>" . $room . "</td>
    </tr>
    </table>";
        
    

        // Send the email
        $mail->send();

        echo
        " 
        <script> 
       //   alert('Message was sent successfully!');
         document.location.href = 'thankyou.html';
        </script>
        ";
} //}
//  catch(Exception $e)
// {
//         echo "";
// }



if (isset($_POST["send3"])) {
    
        $mail = new PHPMailer(true);

        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'svappssoftsolutionspvtltd@gmail.com';
        $mail->Password   = 'rhrj ysft pjzn dtgv';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
  // Sanitize user inputs
//   $fname = $_POST["firstname"];
$email = $_POST["email"];
$checkindate=$_POST["date"];
$checkoutdate=$_POST["date2"];
// $textarea=$_POST["message"];
// $mobile = $_POST["mobile"];
$adults = $_POST["adults"];
$room = $_POST["room"];
$child=$_POST["child"];
        // Recipients and content
        $mail->setFrom($email);
        $mail->addAddress('swagathgrandhotel09@gmail.com');
        $mail->addReplyTo($email);
        $mail->isHTML(true);
        $mail->Subject = "Hotel Swagath Grand";

      

        // Construct email body
        $mail->Body = 
       
        "<table>
      
       
     
        <tr>
            <td>Check in date :</td>
            <td>" . $checkindate . "</td>
        </tr>
        <tr>
            <td>Check out date :</td>
            <td>" . $checkoutdate . "</td>
        </tr>
        <tr>
            <td>Adults :</td>
            <td>" . $adults . "</td>
        </tr>
          <tr>
            <td>Children :</td>
            <td>" . $child . "</td>
        </tr>
        <tr>
        <td>Rooms :</td>
        <td>" . $room . "</td>
    </tr>
    <tr>
    <td>Email Id :</td>
    <td>" . $email . "</td>
</tr>
    </table>";
    

        // Send the email
        $mail->send();

        echo
        " 
        <script> 
       //   alert('Message was sent successfully!');
         document.location.href = 'thankyou.html';
        </script>
        ";
}




 ?>