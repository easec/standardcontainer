<html>

<head>

<title>Välkomstsida -kurs från .easec</title>
<style>

.container {
   position: relative;
   text-align: center;
   color: white;
   font-family: Verdana, Geneva, sans-serif;
   font-size: 2.0rem;
}
.centered {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
}
.information {
   font-size: 1.0rem;
}
.reklamtext {
   font-size: 0.9rem;
}

</style>

</head>
<body>
<div class="container">
  <img src="easec.png" alt=".easec" style="width:70%;">
    <div class="centered">
     Exempelcontainer för kurser från .easec<br>
     <br>
     <div class="information">
        IP-adress för container: <?php echo $_SERVER['SERVER_ADDR'];
        ?><br>
        Värdnamn: <?php echo $_SERVER['SERVER_NAME'];
        ?><br>
        <br><br>
        <div class="reklamtext">
           .easec levererar kurser i Docker, containerteknik, DevOps, Kubernetes och OpenShift
           <br><br>
           Portal: https://portal.easec.se/moodle  </br>
        </div>
     </div>
  </div>
</div>
</body>

</html>
