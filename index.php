<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Austin Poulson</title>
  <meta name="description" content="Austin Poulson Resume Site">
  <meta name="author" content="Austin Poulson">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Icon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/A.png">

  <!-- PHP dependancies
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php include('email_form_process.php'); ?>

  <!-- ReCAPTCHA v3
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LeJ3NsZAAAAAPIILfmrTyc3ISWu-Gt9Z6rdj7tw"></script>
  <script>
      grecaptcha.ready(function () {
          grecaptcha.execute('6LeJ3NsZAAAAAPIILfmrTyc3ISWu-Gt9Z6rdj7tw', { action: 'contact' }).then(function (token) {
              var recaptchaResponse = document.getElementById('recaptchaResponse');
              recaptchaResponse.value = token;
          });
      });
  </script>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
  <span class="error"><?= $caught_error ?></span>
  <span class="success"><?= $success ?></span>
  	<div class="row">
      <div class="six columns" style="margin-top: 10%">
      	<h1>Austin Poulson</h1>
      </div>
  	</div>

<!-- Cover
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="row">
      <div class="six columns">
        <img src="images/headshot.jpg" alt="headshot" width="100%">
          <p>This is me with one of the wood duck houses I built for my Eagle Scout project. Once a year, I clean and prepare them for a new nest of wood ducks.</p>
      </div>
      <div class="six columns">
      	<a class="button" href="#education">Education</a>
      	<a class="button" href="#experience">Experience</a>
     	<a class="button" href="#skills">Skills</a>
     	<a class="button" href="#interests">Interests</a>
   		<a class="button" href="projects.php">Projects</a>
   		<a class="button" href="#contact">Contact</a>
      	<div class="three columns" width="100%">

      	</div>
      	<div class="three columns" width="100%">
      		
      	</div>
      </div>
    </div>

<!-- Education
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="row" style="margin-top: 10%">
      <a name="education"></a>
      <div class="three columns">
    	<img src="images/graduated.png" alt="graduation" width="30%">
      </div>
    </div>
    <div class="row">
      <div class="nine columns">
      	<h2>University of Wisconsin - Stout</h2>
      	<h3>B.S. Information and Communication Technology</h3>
      	<h5>Minors: Computer Science, Project Management, and Photography</h5>
      	<p><!--My degree is in information and communication technology. Since this isn't a common degree, it can take some explaination to understand what I learned during my time at Stout. As a field of study, ICT encompasses all technology used for transfering information. However, I chose to center my education around programming with a heavy concentration in the soft skills applicable to software development. --></p>
      </div>
    </div>

<!-- Experience
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="row" style="margin-top: 10%">
      <a name="experience"></a>
      <div class="three columns">
    	<img src="images/experience.png" alt="experience" width="30%">
      </div>
    </div>
    <div class="row">
      <div class="nine columns">
      	<h2>Event Technology Crew - Memorial Student Center</h2>
      	<h3>Event Technician - 5 years</h3>
      	<p><!--Add some text here--></p>
      </div>
    </div>
    <div class="row" style="margin-top: 10%">
      <div class="nine columns">
      	<h2>Electro-Voice - Bosch Security Systems</h2>
      	<h3>Engineering Intern - 8 months</h3>
      	<p><!--Add some text here--></p>
      </div>
    </div>

<!-- Skills
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="row" style="margin-top: 10%">
      <a name="skills"></a>
      <div class="three columns">
    	<img src="images/skills.png" alt="skills" width="30%">
      </div>
    </div>
    <div class="row">
      <div class="three columns">
      	<h2>Skills</h2>
      </div>
    </div>
    <div class="row">
      <div class="four columns">
      	<ul>
      	  <h5>Development</h5>
      	  <li>
      		Web Technologies & Frameworks
      		<ul>
      	      <li>HTML/CSS</li>
      	      <li>Skeleton CSS</li>
      	      <li>PHP</li>
      		</ul>
      	  </li>
      	  <li>
      	  	Programming Languages
      	  	<ul>
      	  	  <li>Python</li>
      	  	  <li>C++</li>
      	  	  <li>Java</li>
      	  	</ul>
      	  </li>
      	  <li>
      	  	Computer Engineering
      	  	<ul>
      	  	  <li>Arduino</li>
      	  	  <li>Raspberry Pi</li>
      	  	  <li>Soldering</li>
      	  	</ul>
      	  </li>
      	</ul>
      </div>
      <div class="four columns">
      	<ul>
      	  <h5>Design</h5>
      	  <li>
      	  	Adobe
      	  	<ul>
      	      <li>Photoshop</li>
      	      <li>Premiere</li>
      	      <li>lightroom</li>
      	      <li>indesign</li>
      	  	</ul>
      	  </li>
      	  <li>
      	  	Audio
      	  	<ul>
      	  	  <li>Music production</li>
      	  	  <li>Sound effects</li>
      	  	</ul>
      	  </li>
      	  <li>
      	  	Photography
      	  	<ul>
      	  	  <li>Product</li>
      	  	  <li>Advertising</li>
      	  	  <li>Art</li>
      	  	</ul>
      	  </li>
      	</ul>
      </div>
      <div class="four columns">
      	<ul>
      	  <h5>Life</h5>
      	  <li>Desire to learn</li>
      	  <li>Attention to detail</li>
      	  <li>Drive to succeed</li>
      	  <li>Creativity</li>
      	  <li>Commitment</li>
      	  <li>Customer service</li>
      	  <li>Problem solving</li>
      	</ul>
      </div>
    </div>

<!-- Interests
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="row" style="margin-top: 10%">
      <a name="interests"></a>
      <div class="three columns">
    	<img src="images/interests.png" alt="interests" width="30%">
      </div>
    </div>
    <div class="row">
      <div class="nine columns">
      	<h2>Interests</h2>
      </div>
    </div>
    <div class="row" style="margin-top: 5%">
      <div class="nine columns">
      	<h4>Music</h4>
      	<p>Music has always been a huge interest of mine. In fact, it's one of the reasons I became interested in programming. I've wanted to develop recording plugins ever since I started recording. Although that type of development is still outside of my understanding, It remains as one of my ultimate goals. </p>
      </div>
    </div>
    <div class="row" style="margin-top: 5%">
      <div class="nine columns">
      	<h4>Photography</h4>
      	<p>Photography is another of my major interests. I learned the skill as a part of an academic minor in school. My favorite types of photography are studio art and nature. On top of allowing me to have original images for development, I feel that photography helps me to maintain an eye for detail and visual literacy.</p>
      </div>
    </div>
    <div class="row" style="margin-top: 5%">
      <div class="nine columns">
      	<h4>Outdoors</h4>
      	<p>I was raised with an appreciation for the outdoors. Whether I'm camping, canoeing, or just spending time at a park, I love being around nature.</p>
      </div>
    </div>

    <div class="row" style="margin-top: 10%">
      <a name="contact"></a>
      <div class="three columns">
    	<img src="images/contact.png" alt="contact" width="30%">
      </div>
    </div>
    
<!-- Contact
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="row">
      <div class="three columns">
        <h2>Contact</h2>
      </div>
    </div>
    <div class="row">
      <div class="four columns">
      	<label for="name">Name</label>
      	<input class="u-full-width" type="text" id="name" name="_name" value="<?= $name ?>">
      	<span class="error"><?= $name_error ?></span>
      </div>
    </div>
    <div class="row">
      <div class="four columns">
      	<label for="email">Email</label>
      	<input class="u-full-width" type="text" id="email" name="_email" value="<?= $email ?>">
      	<span class="error"><?= $email_error ?></span>
      </div>
    </div>
    <div class="row">
      <div class="four columns">
      	<label for="subject">Subject</label>
      	<input class="u-full-width" type="text" id="subject" name="_subject" value="<?= $subject ?>">
      	<span class="error"><?= $subject_error ?></span>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
      	<label for="message">Message</label>
      	<textarea class="u-full-width" type="text" id="message" name="_message" value="<?= $message ?>"></textarea>
      	<span class="error"><?= $message_error ?></span>
      </div>
    </div>
    <div class="row">
      <div class="three columns">
        <div class="g-recaptcha" name="recaptcha_response" data-sitekey="6LeC2dsZAAAAAHWGKvYvqBJBOSk4d4CFASoR0G30"></div>
      </div>
    </div>
    <div class="row">
      <div class="three columns">
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
      </div>
    </div>
    </form>
  </div>


<!-- Footnote
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row" style="margin-top: 5%">
      <div class="twelve columns">
        <p class="grayText">This site was designed and programmed by Austin Poulson.</p>
      </div>
    </div>


  </div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
