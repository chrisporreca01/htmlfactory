<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="600">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="slate.b.css">
    <link rel="stylesheet" href="slate.b.min.css">
    <title>[html Factory]</title>
    <style>
.dot1 {
  height: 25px;
  width: 25px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
}
.dot2 {
  height: 25px;
  width: 25px;
  background-color: orange;
  border-radius: 50%;
  display: inline-block;
}
.dot3 {
  height: 25px;
  width: 25px;
  background-color: yellow;
  border-radius: 50%;
  display: inline-block;
}
.dot4 {
  height: 25px;
  width: 25px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;
}
.dot5 {
  height: 25px;
  width: 25px;
  background-color: blue;
  border-radius: 50%;
  display: inline-block;
}
.dot6 {
  height: 25px;
  width: 25px;
  background-color: purple;
  border-radius: 50%;
  display: inline-block;
}
.dot7 {
  height: 25px;
  width: 25px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
}
.dot8 {
  height: 25px;
  width: 25px;
  background-color: black;
  border-radius: 50%;
  display: inline-block;
}
a:link { text-decoration: none; }
a:visited { text-decoration: none; }
a:hover { text-decoration: underline; color: #ffd800}
a:active { text-decoration: none; }
</style>
  </head>
  <body>
    <?php
        /*
        $htmlalert = "success";
        $htmlstatus = "online";
        echo "
        <div class=\"alert alert-success\" role=\"alert\">
          SYSTEM STATUS: ONLINE
        </div>
        ";

        $htmlalert = "warning";
        $htmlstatus = "warning";
        echo "
        <div class=\"alert alert-warning\" role=\"alert\">
          SYSTEM STATUS: WARNING
        </div>
        "; */

        $htmlalert = "info";
        $htmlstatus = "maint";
        echo "
        <div class=\"alert alert-info\" role=\"alert\">
          SYSTEM STATUS: MAINTENANCE MODE
        </div>
        ";

        /*
        $htmlalert = "danger";
        $htmlstatus = "offline";
        echo "
        <div class=\"alert alert-danger\" role=\"alert\">
          SYSTEM STATUS: OFFLINE
        </div>
        "; */

    ?>
    <hr>
    <table width=100% bgcolor=ffd800>
      <tr>
        <td>
          <table bgcolor=103050 bordercolor=ffd800 border=4 cellspacing=5 cellpadding=10 width=100%>
            <tr>
              <td>
                <img src=factoryfull.png height=100>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <hr>
    <div class="container-fluid" id="cp01">
      <div class="sticky-top">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#htmlfactory">html<font color=ffd800>:</font>factory</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Account Management</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#create">Create Account</a></li>
              <li><a class="dropdown-item" href="#login">Login</a></li>
              <li><a class="dropdown-item" href="#dashboard">Account Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#logout">Logout</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Hosting Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="mailto:support@htmlfactory.online" tabindex="-1" aria-disabled="true">support@htmlfactory.online</a>
          </li>
        </ul>
      </div>
      Services I offer:
        <li>Domains
        <li>E-Mail
        <li>SSL Certificates
        <li>Website Design
        <li>E-Commerce
        <li>Website Hosting
        <li>Programming/Databases
        <li>Graphic Design
        <li>VPN
        <li>Website Malware/Antiviral Scanning
        <li>Cloud Storage
        <li>Virtual and Dedicated Servers
      <hr>
      <code>Created 2021 Planet Earth</code>
    </div>
    <hr width=75%>
    <div align=right><a href=mailto:support@htmlfactory.online>support@htmlfactory.online</a>&nbsp;&nbsp;&nbsp;</div>
    <hr>
    <table>
     <tr>
      <td>&nbsp;&nbsp;</td><td><span class="dot1"></span></td><td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td><td><span class="dot2"></span></td><td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td><td><span class="dot3"></span></td><td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td><td><span class="dot4"></span></td><td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td><td><span class="dot5"></span></td><td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td><td><span class="dot6"></span></td><td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td><td><span class="dot7"></span></td><td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td><td><span class="dot8"></span></td><td>&nbsp;&nbsp;</td>
     </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
