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
<title>Apply</title>
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
<?php
  // 4. Release returned data
  mysqli_free_result($result);
?>
</header>
<img src="images/all-programs.png" width="1280" height="790" alt="mac keyboard with a mouse"/>
<div id="main-content-container">
    <h1>How to apply</h1>
    <p class="long-paragraph">Bacon ipsum dolor amet pork belly tail landjaeger brisket short loin. Short loin filet mignon beef ribs, swine sirloin ribeye venison. Biltong pancetta short ribs cow. Prosciutto spare ribs tail, tongue landjaeger tenderloin capicola andouille shoulder turducken shankle shank frankfurter pig short loin.</p>
    
    <p class="long-paragraph">Capicola bresaola beef ribs turducken pork belly pork strip steak pork chop corned beef pig venison, pastrami frankfurter. Hamburger short ribs porchetta, short loin tri-tip frankfurter bresaola ground round strip steak. Kielbasa hamburger t-bone meatball, leberkas prosciutto turkey ground round flank. Pork frankfurter porchetta, kielbasa sirloin shank spare ribs beef venison salami tri-tip. Pork chop beef corned beef, pork belly jowl t-bone venison short ribs.</p>
    
    <h1>Application deadlines</h1>
 
    <p class="long-paragraph">Bacon ipsum dolor amet pork belly tail landjaeger brisket short loin. Short loin filet mignon beef ribs, swine sirloin ribeye venison. Biltong pancetta short ribs cow. Prosciutto spare ribs tail, tongue landjaeger tenderloin capicola andouille shoulder turducken shankle shank frankfurter pig short loin.</p>
    <p class="long-paragraph">Capicola bresaola beef ribs turducken pork belly pork strip steak pork chop corned beef pig venison, pastrami frankfurter. Hamburger short ribs porchetta, short loin tri-tip frankfurter bresaola ground round strip steak. Kielbasa hamburger t-bone meatball, leberkas prosciutto turkey ground round flank. Pork frankfurter porchetta, kielbasa sirloin shank spare ribs beef venison salami tri-tip. Pork chop beef corned beef, pork belly jowl t-bone venison short ribs.</p>
    <h1>Application requirements</h1>
    <h2></h2>
    <p class="long-paragraph">Bacon ipsum dolor amet pork belly tail landjaeger brisket short loin. Short loin filet mignon beef ribs, swine sirloin ribeye venison. Biltong pancetta short ribs cow. Prosciutto spare ribs tail, tongue landjaeger tenderloin capicola andouille shoulder turducken shankle shank frankfurter pig short loin.</p>
    
    <p class="long-paragraph">Capicola bresaola beef ribs turducken pork belly pork strip steak pork chop corned beef pig venison, pastrami frankfurter. Hamburger short ribs porchetta, short loin tri-tip frankfurter bresaola ground round strip steak. Kielbasa hamburger t-bone meatball, leberkas prosciutto turkey ground round flank. Pork frankfurter porchetta, kielbasa sirloin shank spare ribs beef venison salami tri-tip. Pork chop beef corned beef, pork belly jowl t-bone venison short ribs.</p>
</div>
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