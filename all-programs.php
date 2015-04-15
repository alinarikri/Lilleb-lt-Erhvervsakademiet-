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
  <title>What to study</title>
</head>
<body>
<div id="wrapper">
	<header id="main-header">
  	<a href="new-students.php"><img id="logo" src="images/eal-logo-white.svg" width="125" height="114" /></a>
  		<nav>
		  <?php while($row = mysqli_fetch_assoc($result)) { ?>
          <a href="<?php echo $row["link"]?>"><li><?php echo $row["title"]; ?></li></a>
          <?php } ?>
  		</nav>
	</header>
<img src="images/all-programs.png" />
<div id="main-content-container">
    <table>
      <h1>Here is what you can study</h1>
      <h2 class="programes">Start with a 2 year AP program</h2>
      <tr>
          <td>
          <h2>Computer Science</h2>
          <p>The 2-year full time study programme includes a three month internship with the aim of giving you a first-hand impression of the work environment in the IT business. The internship will give you the exact skills needed to land an exciting job after your graduation.</p>
          </td>
          <td class="more-about-program">
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
      <tr>
          <td>
          <h2>Multimedia Design and Communication</h2>
          <p>The Multimedia Designer programme is a 2-year full time higher education programme which enables you to work with both the analytical and practical sides of multimedia production.</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
      <tr>
          <td>
          <h2>IT Technology</h2>
          <p>The IT Technology programme takes two years to complete and is divided into four semesters. You can choose to specialise within either electronics or IT. With an AP degree in IT Technology you can continue your studies at the 1½ year bachelor top-up programme: Bachelor in Product Development and Integrative Technology.</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
      <tr>
          <td>
          <h2>Logistics Management</h2>
          <p>We live in a world, where we are increasingly and constantly challenged by the opportunities of globalisation. Danish companies must be flexible and innovative to cope with this new situation, and although product development and marketing efforts are often initiated in Denmark, actual production is outsourced to suppliers abroad – in and outside Europe.</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
      <tr>
          <td>
          <h2>Marketing Management</h2>
          <p>With a 2-year full time study programme in Marketing Management you will get the skills and competences to carry out planning, organising, and implementation within a wide field of work in Danish and international companies.</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
      <tr>
          <td>
          <h2>Service, Hospitality and Tourism Management</h2>
          <p>If you dream of planning events, developing tourism and experience economy, or securing good customer relations, then an AP degree in Service, Hospitality and Tourism Management is the right choice for you!</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
    </table>
    
    <h2 class="programes">Continue with bachelor top-up programmes</h2>
    
    
    <table>
      <tr>
          <td>
          <h2>E-Concept Development</h2>
          <p>The BA in E-Concept Development takes 1½ years to complete, and is a top-up for the 2-year Multimedia Design programme and similar 2-year programmes. This way you will achieve a bachelor's degree.</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
      <tr>
          <td>
          <h2>Innovation and Entrepreneurship</h2>
          <p>The future depends on the development of new ideas. With a BA top-up in Innovation and Entrepreneurship you will become a highly skilled entrepreneur and change facilitator in just 1½ year. During the study we work with different tools and models, teaching you how to create, conceptualise, and implement your ideas.</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
      <tr>
          <td>
          <h2>International Hospitality Management</h2>
          <p>As a Bachelor of International Hospitality Management you will be qualified to work with hotel, tourism, and experience management. The BA in International Hospitality Management is a 1½ year bachelor's degree building on your academy profession degree in Service, Hospitality and Tourism Management, Marketing Management, or other similar programmes.</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
      <tr>
          <td>
          <h2>International Sales and Marketing</h2>
          <p>If you enjoyed the Marketing Management programme and would like to continue your business studies, then the 1½ year a BA top-up in International Sales and Marketing is an obvious opportunity for you!</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
      <tr>
          <td>
          <h2>Product Development and Technology Integration</h2>
          <p>After finishing your academy profession degree, you can proceed directly with a bachelor’s degree. A BA in Product Development and Technology Integration is a good opportunity to further develop your skills within your area of profession and also to experience interdisciplinary work across other fields of profession.</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
      <tr>
          <td>
          <h2>Web Development</h2>
          <p>If you have completed your Multimedia Designer or Datamatician studies, and would like more time to explore the advanced subjects; especially within web development and media technologies, then the 1½-year BA top-up in Web Development is the obvious choice for you!</p>
          </td>
          <td>
          <div class="circle"><a class="go-circle" href="single-program-page.php">GO</a></div>
          </td>
      </tr>
    </table>
</div><!--End of programs container-->
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
