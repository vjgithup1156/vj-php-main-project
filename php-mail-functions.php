<!--Mail Function-->

<?php

if ($_POST['email']) {



  // $msg_c = '';

// echo "ok";
// exit;

  // $from = 'PINKGYM@pinkgym.co.in';



//   $to = 'saiyuvaraj@gmail.com, ramkaashyap@gmail.com, pinkkodambakkam@gmail.com, kodambakkam@pinkfitness.in';





  $from='developer@cwd.co.in';

  $to='ganesan@kathirvelmoopanar.in';




  $headers  = 'MIME-Version: 1.0' . "\r\n";

  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $headers .= 'From:' . $from;



  $subject = "Pink kodambakkam Weightloss Enquiry";



  $message = "<b>Dear Admin, </b>";



  $message = $message . "<div align=justify>You have an enquiry for the weight loss program </div>";

  $message = $message . "<br>Name  : $_REQUEST[name]</b>";
  $message = $message . "<br>email : $_REQUEST[email]</b>";
  $message = $message . "<br>number  : $_REQUEST[number]</b>";
  $message = $message . "<br>message  : $_REQUEST[message]</b>";



  // var_dump($message);die;



  $send = @mail($to, $subject, $message, $headers);

//   var_dump($send);
 

  if ($send) {
    // echo "alryfstuduyhf";

    echo "<script>alert('Thank you for making an enquiry. Our Fitness experts will contact you shortly.');document.location='http://senthil.in.net/kathirvelmooopanar/'</script>";
  } else {
// echo "jhf";
    echo "<script>alert('Your mail not sent.Please try agin');document.location='http://senthil.in.net/kathirvelmooopanar//'</script>";
  }
}
// }else{
//   echo "not in";
// }


?>





<!-- second type php mailers -->


<!--Mail Function-->

<?php

if (isset($_REQUEST['submit_12'])) {



  $msg_c = '';



  $from = 'PINKGYM@pinkgym.co.in';



  $to = 'saiyuvaraj@gmail.com, ramkaashyap@gmail.com, pinkkodambakkam@gmail.com, kodambakkam@pinkfitness.in';





  // $from='devloper@cwd.co.in';

  // $to='design@cwd.co.in';

  $headers  = 'MIME-Version: 1.0' . "\r\n";

  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $headers .= 'From:' . $from;



  $subject = "Pink kodambakkam Weightloss Enquiry";



  $message = "<b>Dear Admin, </b>";



  $message = $message . "<div align=justify>You have an enquiry for the weight loss program </div>";



  $message = $message . "<br>Name  : $_REQUEST[name12]</b>";



  $message = $message . "<br>Mobile Number  : $_REQUEST[mobile_no1]</b>";



  // var_dump($message);die;



  $send = @mail($to, $subject, $message, $headers);

  // var_dump($send);die;

  if ($send) {

    echo "<script>alert('Thank you for making an enquiry. Our Fitness experts will contact you shortly.');document.location='http://senthil.in.net/pinkgym/'</script>";
  } else {

    echo "<script>alert('Your mail not sent.Please try agin');document.location='http://senthil.in.net/pinkgym/'</script>";
  }
}





if (isset($_REQUEST['submit_123'])) {



  // $msg_c='';



  $from = 'PINKGYM@cwd.co.in';



  $to = 'saiyuvaraj@gmail.com, ramkaashyap@gmail.com, pinkkodambakkam@gmail.com, kodambakkam@pinkfitness.in';



  // $from='devloper@cwd.co.in';



  // $to='design@cwd.co.in';

  $headers  = 'MIME-Version: 1.0' . "\r\n";

  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $headers .= 'From:' . $from;



  $subject = "Pink kodambakkam Weightloss Enquiry";



  $message = "<b>Dear Admin, </b>";



  $message = $message . "<div align=justify>You have an enquiry for the weight loss program</div>";



  $message = $message . "<br>Name  : $_REQUEST[name123]</b>";



  $message = $message . "<br>Mobile Number  : $_REQUEST[mobile_no]</b>";



  // var_dump($message);die;



  $send = @mail($to, $subject, $message, $headers);

  // var_dump($send);die;

  if ($send) {

    echo "<script>alert('Thank you for making an enquiry. Our Fitness experts will contact you shortly.');document.location='http://senthil.in.net/pinkgym/'</script>";
  } else {

    echo "<script>alert('Your mail not sent.Please try agin');document.location='http://senthil.in.net/pinkgym/'</script>";
  }
}



?>

<!--Mail Function End-->