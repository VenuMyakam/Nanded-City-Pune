
<?php

$servername = "localhost";
$username = "nandedc2_nandedcitypune";
$password = "ipz^aRDiHenc";
$dbname = "nandedc2_nandedcitypune";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$userName=$_POST['userNamed'];
$userEmail=$_POST['userEmaild'];
$countryCoded=$_POST['countryCoded'];
$userTel=$_POST['userTeld'];
$Messages=$_POST['Messaged'];



$utm_source=$_POST['utm_source'];
$utm_medium=$_POST['utm_medium'];
$utm_campaign=$_POST['utm_campaign'];
$utm_term=$_POST['utm_term'];
$utm_content=$_POST['utm_content'];

 if($utm_source=='')
{
  $utm_source='-';  
}
else{
$utm_source=$utm_source;    
}

if($utm_medium=='')
{
  $utm_medium='-';  
}
else{
$utm_medium=$utm_medium;    
} 

if($utm_campaign=='')
{
  $utm_campaign='-';  
}
else{
$utm_campaign=$utm_campaign;    
} 

if($utm_term=='')
{
  $utm_term='-';  
}
else{
$utm_term=$utm_term;    
}  

if($utm_content=='')
{
  $utm_content='-';  
}
else{
$utm_content=$utm_content;    
} 






$date=date('Y-m-d');
$type='download';

$sqsl = "select id from rhythmenquiries where userTel='".$userTel."' and type='".$type."' ";
$re=mysqli_query($conn,$sqsl);
$rowcount=mysqli_num_rows($re);

if($rowcount==0)
{


  $sql = "insert into rhythmenquiries(userName,userEmail,Pcode,userTel,userMessage,type,utm,utm_medium,utm_campaign,utm_term,utm_content,date)value('".addslashes($userName)."','".$userEmail."','".$countryCoded."','".$userTel."','".addslashes($Messages)."','".$type."','".$utm_source."','".$utm_medium."','".$utm_campaign."','".$utm_term."','".$utm_content."','".$date."')";
  $result = mysqli_query($conn,$sql);

/*
    require_once('mailin.php');

    $mailin = new Mailin("https://api.sendinblue.com/v2.0","aq4BpxCQ2b6GWdXL");



        $data = array( "to" => array('info@nandedcitypune.com'=>'rhythm'),


            "from" => array($userEmail,$userName),

            "replyto" => array($userEmail,$userName),

            "subject" => "New Enquire",

            "text" => "New Enquire",

            "html" =>'<table cellpadding="0" cellspacing="0" style="border:solid 10px #F8F8F8;width:800px;">
  <tr>
    <td><table cellpadding="0" cellspacing="0" style="border:solid 10px #FFFFFF;width:780px;font:normal 12px tahoma,geneva,sans-serif;color:#5F5F5F;">
       
        <tr>
          <td style="height:15px;"></td>
        </tr>
        <tr>
          <td style="width:780px;height:54px;line-height:54px;"><div style="float:left;width:380px;height:54px;line-height:54px;text-align:left;"><a href="https://nandedcitypune.com/rhythm/" target="_blank" style="text-decoration:none;color:#5F5F5F;cursor:pointer;width:152px;height:54px;" title="Madhuvan"><img src="https://nandedcitypune.com/rhythm/assets/img/logo-rhythm.png" style="border:0px;width:152px;height:54px;"/></a></div>
            <div style="float:left;width:380px;height:54px;line-height:54px;text-align:right;font-size:16px;color:#a82a27;"><i>&nbsp;</i></div></td>
        </tr>
        <tr>
          <td style="height:15px;"></td>
        </tr>
        <tr>
          <td style="width:780px;line-height:22px;color:#5F5F5F;"><div style="width:740px;margin-left:auto;margin-right:auto;"><b>Dear Admin </b></div>
            <div style="width:740px;margin-left:auto;margin-right:auto;height:20px;"></div>
            <div style="width:740px;margin-left:auto;margin-right:auto;">Name: '.$userName.'</div>
			
			
			
			<div style="width:740px;margin-left:auto;margin-right:auto;height:20px;"></div>
            <div style="width:740px;margin-left:auto;margin-right:auto;">Email:'.$userEmail.'</div>
			<div style="width:740px;margin-left:auto;margin-right:auto;height:20px;"></div>
            <div style="width:740px;margin-left:auto;margin-right:auto;">Mobile: '.$userTel.'</div>
			
			
			
			<div style="width:740px;margin-left:auto;margin-right:auto;height:20px;"></div>
            <div style="width:740px;margin-left:auto;margin-right:auto;">Message: '.$Messages.'</div>
			
			<div style="width:740px;margin-left:auto;margin-right:auto;height:20px;"></div>
            <div style="width:740px;margin-left:auto;margin-right:auto;font-size:15px;"><b></b></div>
            <div style="width:740px;margin-left:auto;margin-right:auto;height:20px;"></div>
            <div style="width:740px;margin-left:auto;margin-right:auto;font-size:15px;"><b>Regards,</b></div>
            <div style="width:740px;margin-left:auto;margin-right:auto;height:20px;"></div>
            <div style="width:740px;margin-left:auto;margin-right:auto;font-size:15px;"><b>Rhythm</b></div>
        </tr>
        <tr>
          <td style="height:15px;"></td>
        </tr>
      </table></td>
  </tr>
</table>'

         

        );



$mailin->send_email($data);

*/
  
 echo "<div class='success'>Thank you for your message. It has been sent
  <a href='https://nandedcitypune.com/luxury-bungalow-plots-pune/rhythm-e-brochure.pdf' id='mydownload' download></div>"; 
 print "<script>  
      $(document).ready(function () {
  setTimeout(function () {
     window.open(
  'https://nandedcitypune.com/thank-you',
  '_blank');
  }, 4000);
});
    </script>";
    
  
 
?>



<script>
 var downloadStartTime = setTimeout(function () {
       document.getElementById('mydownload').click();
    }, 5);


$('#frmDownload')[0].reset();
</script>
<?php  
 } else{
   echo "<div class='unsuccess'>Mobile number alredy exist!</div>";
    
}



