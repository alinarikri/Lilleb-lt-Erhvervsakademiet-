<?php require 'login/login.php'; ?>
<?php
 // 2. Perform database query
 $query = "SELECT * ";
 $query .= "FROM menu";
 $result = mysqli_query($connection, $query);
 // test if there is a query error
 if (!$result) {
	 die("Database querry failed");
	 }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<title>New students</title>
</head>

<body>
<div id="wrapper">
<header id="main-header">
  <a href="index.php"><img id="logo" src="images/eal-logo-white.svg" width="125" height="114" alt="Lillebælt erhvervsakademiet logo white"/></a>
  <nav>
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <a href="<?php echo $row["link"]?>"><li><?php echo $row["title"]; ?></li></a>
        <?php } ?>
  </nav>
  <?php mysqli_free_result($result); ?>
</header>
<img src="images/landing-page.png" width="1280" height="790" alt="mac keyboard with a mouse"/>
<article id="benefits-columns">
  <h1>Why study at Lillebælt?</h1>
  <section class="column">
  	<h2 class="benefit">Study abroad</h2>
    <p class="benefit">Bacon ipsum dolor amet nisi magna labore adipisicing, consequat kielbasa pork loin pastrami strip steak. Commodo id lorem, in short loin landjaeger short ribs sunt pork cillum meatloaf nostrud t-bone.</p>
     <div class="circle"><a class="go-circle" href="">GO</a></div>
  </section>
  <section class="column">
  	<h2 class="benefit">Exciting career</h2>
    <p class="benefit">Bacon ipsum dolor amet nisi magna labore adipisicing, consequat kielbasa pork loin pastrami strip steak. Commodo id lorem, in short loin landjaeger short ribs sunt pork cillum meatloaf nostrud t-bone. </p>
     <div class="circle"><a class="go-circle" href="">GO</a></div>
  </section>
  <section class="column">
  	<h2 class="benefit">Internships</h2>
    <p class="benefit">Bacon ipsum dolor amet nisi magna labore adipisicing, consequat kielbasa pork loin pastrami strip steak. Commodo id lorem, in short loin landjaeger short ribs sunt pork cillum meatloaf nostrud t-bone.</p>
     <div class="circle"><a class="go-circle" href="">GO</a></div>
  </section>
</article>
<footer>
    <div class="column">
        <h3>Practical information</h3>
         <ul>
            <li><a href="">Studying in Denmark</a></li>
            <li><a href="">Comming to Denmark</a></li>
            <li><a href="">Accomodation</a></li>
            <li><a href="">Living costs</a></li>
         </ul>
    </div>
    <div class="column">
        <h3>Contacts</h3>
         <ul>
            <li><a href="">Nonnebakke 9, Odense</a></li>
            <li><a href="">Ejlskovsgade, Odense</a></li>
            <li><a href="">Munkerisvej 130, Odense</a></li>
            <li><a href="">Munke Mose Alle, Odense</a></li>
            <li><a href="">Munke Mose Alle, Vejle</a></li>
         </ul>
    </div>
    <div class="column">
        <h3>Social media</h3>
         <ul>
            <li><a href="">Twitter</a></li>
            <li><a href="">Facebook</a></li>
            <li><a href="">Linkedin</a></li>
         </ul>
    </div>
</footer>
</div>
</body>
</html>
<?php
 // 5. Close database connection
 mysqli_close($connection);
?>