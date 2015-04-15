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
<title>About Lillebælt</title>
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
	<h1>About Lillebælt</h1>
		<p class="long-paragraph">Lillebaelt Academy is the largest business academy in the Region of Southern Denmark and offers 30 higher educational programmes aimed at employment in the world of business. We offer both full-time and part-time programmes all of which are based on a solid foundation of knowledge and close collaboration with companies.</p>

		<p class="long-paragraph">We are a business and practice oriented educational institution in close collaboration with local, national and international companies.</p>

		<p class="long-paragraph">The number of students has more than doubled since becoming established in 2009 and we have campuses in Odense and in Vejle. </p>
		<p class="long-paragraph">The Academy has 3,200 students, 300 employees and collaborates with 2,300 companies.</p>

		<p class="long-paragraph">Currently, Lillebaelt Academy can offer 18 2-2½-year academy programmes, 11 3½-4-year bachelor programmes and 13 AP and diploma degree programmes.</p>

		<p class="long-paragraph">Lillebaelt Academy of Professional Higher Education was established 1 January 2009 by the merging of branches of higher education formerly under the auspices of Tietgen Business College, SDE College, Kold College and Vejle Business College.</p>

		<p class="long-paragraph">This merging has provided a new and strong institution with a very large and diverse pool of competence and development potential. This is both in relation to the development of new educational programmes and in relation to cooperation with industry and commerce in Region South Denmark and research institutions in Denmark and abroad, which in future will play an even greater role in professionally directed higher education.</p>

		<p class="long-paragraph">The increased cooperation with industry and research institutions is helping to increase the level and degree of timeliness in higher education. Additionally, it has allowed Lillebaelt Academy the possibility to expand its offering of higher education – most notably at the BA level.</p>

		<p class="long-paragraph">Lillebaelt Academy of Professional Higher Education has programmes at many different locations in Odense and Vejle, which means that both students and local business have better chances for participating in local activities. This is a great advantage both for students, who do not have to travel far to attend a programme, and for local business in the region that does not have to compete with businesses in the big university cities for the best minds. </p>

	<h1>Our values</h1>
		<h2></h2>
		<p class="long-paragraph">Bacon ipsum dolor amet pork belly tail landjaeger brisket short loin. Short loin filet mignon beef ribs, swine sirloin ribeye venison. Biltong pancetta short ribs cow. Prosciutto spare ribs tail, tongue landjaeger tenderloin capicola andouille shoulder turducken shankle shank frankfurter pig short loin.</p>

		<h2></h2>
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