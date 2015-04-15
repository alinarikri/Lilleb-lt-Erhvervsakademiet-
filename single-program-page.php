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
       <img src="images/all-programs.png" />
       <!--<div class="circle"></div>-->
	</header>
<div id="main-content-container">
    <h1>Computer Science</h1>
    <h2>What is it about?</h2>
    	<p>Want to work intensively with design and programming of software systems?
Then this is the study programme for you! With an IT business in constant change, your creativity and ingenuity will be challenged in finding new and innovative programming solutions for simple as well as complex systems. This involves working with design, which is at the core of all assignments and projects you will be dealing with in Computer Science.</p>
    <h2>What you are going to learn?</h2>
    	<p>This is a list of the actual subjects you will encounter during the programme:</p>
       		<ul>
				<li>Year 1:</li>
                <li>Computer Architecture and Operating systems</li>
                <li> Information technology in Organisations</li>
                <li> System Design</li>
                <li>Software Construction</li>
    		</ul>
			<ul>
                <li>Year 2:</li>
                <li>Systems Development Methods</li>
                <li>Software Architecture and Distributed Programs</li>
                <li>Computer Network and Distributed Systems</li>
                <li>Electives</li>
            </ul>

    <h2>What are your job opportunities after?</h2>
    	<p>As a graduate in Computer Science your job opportunities within IT are almost limitless. Students from Lillebaelt Academy have found jobs in both Danish and global companies such as: KMD, Hesehus, Aloc, IBM, Jyske Bank, VESTAS Wind Power, Bankdata, Unik System Design, ADP – Dealer Services and many more.</p>
		<p>Typical jobs could be: System developer, System designer, Programmer, System planner, System administrator, IT supporter, IT consultant, Test Manager, Project manager, IT Security Consultant, System constructor, IT Teacher, Web developer.</p>
    <h2>Want more education?</h2>
    	<p>When you have acquired your AP degree in Computer Science you can continue your studies at one of the 1½ year bachelor top-ups at Lillebaelt Academy:</p>
			<ul>
                <li>Software Development</li>
                <li>E-Concept Development</li>
                <li>Web development</li>
                <li>Product Development and Integrative Technology</li>
                <li>Innovation and Entrepreneurship</li>
            </ul>
            <p>At some universities in Denmark or abroad, you can also continue for a bachelor’s degree within Computer Science. We have agreements regarding transfer of your credits.</p>
    <h2>What do you need to get accepted?</h2>
    <p>You need to meet one of the following requirements:</p>
		<ul>
   			 <li>Upper secondary certificate or diploma from the Nordic countries, the European Union, the Baltic countries or other countries that have signed the European Convention on the Equivalence of Diplomas Leading to Admission to Universities.</li>
    		 <li>The International or the European Baccalaureate.</li>
             <li>High school diplomas from the United States followed by one to two years of University or college studies in relevant subjects. This also applies to applicants with a high school diploma from countries with a similar educational system.</li>
    		 <li>Other countries: upper secondary school plus one to two years' studies in relevant subjects at a University.</li>

	<p>Furthermore, you must have good and well-documented qualifications in:</p>
		<ul>
    		<li>English: TOEFL or IELTS-test, or Oxford placement test or equivalent is required (If you don’t hold one of the tests but have acquired equivalent qualifications please contact the international student counsellor).
    		<li>Math: International students must hold a certificate proving adequate qualifications.</li>
    		<li>For further specific demands please contact the international student counsellor.</li>

	<p>Your qualifications are evaluated on an individual basis by the international student counsellors.</p>
    <a href="">Apply here!</a>
</div>
<aside>
    <h3>Meet the teachers</h3>
    <img src="images/karen" alt="" width="162" height="162" />
    <h4>Name last name</h4>
    <p>Description</p>
    
    <h3>Meet the students</h3>
    <h4>Name last name</h4>
    <p>Description</p>
    
    <h3>Students work</h3>
    

</aside>
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
