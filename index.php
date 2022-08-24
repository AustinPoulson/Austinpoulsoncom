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
  <link rel="stylesheet" href="css/stylesheet.css">

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
      import {recaptchaKey} from './keys.js';

      grecaptcha.ready(function () {
          grecaptcha.execute(recaptchaKey, { action: 'contact' }).then(function (token) {
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
  	<div class="row headshotHeader">
      <div class="two columns">
        <img src="images/headshot.jpg" alt="headshot" class="headerImage" width="100%">
      </div>
      <div class="six columns nameHeader">
      	<h1>Austin Poulson</h1>
        <p>Hi! I'm Austin Poulson, a developer and general computer nerd living Plymouth, Minnesota.</p>
      </div>
  	</div>

<!-- Navigation
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="row">
      <div class="twelve columns navButtons">
      	<a class="button" href="#education">Education</a>
      	<a class="button" href="#experience">Experience</a>
     	  <a class="button" href="#projects">Projects</a>
     	  <a class="button" href="#interests">Interests</a>
   		  <a class="button" href="#contact">Contact</a>
      </div>
    </div>

<!-- Education
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="row section">
      <a name="education"></a>
      <div class="three columns">
    	<img src="images/graduated.png" alt="graduation" width="30%">
      </div>
    </div>
    <div class="row subSection">
      <div class="three columns">
      	<h2>Education</h2>
      </div>
    </div>
    <div class="row subSection">
      <div class="nine columns">
      	<h3>University of Wisconsin - Stout</h3>
      	<h4>B.S. Information and Communication Technology</h4>
      	<h5>Minors: Computer Science | Project Management</h5>
      </div>
    </div>

<!-- Experience
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="row  section">
      <a name="experience"></a>
      <div class="three columns">
    	<img src="images/experience.png" alt="experience" width="30%">
      </div>
    </div>
    <div class="row">
      <div class="three columns">
      	<h2>Experience</h2>
      </div>
    </div>
    <div class="row subSection">
      <div class="nine columns">
      	<h3>EtherMedia</h3>
      	<h4>web and Mobile Developer - 2 years</h4>
      </div>
    </div>
    <div class="row subSection" style="margin-top: 5%">
      <div class="nine columns">
      	<h3>Electro-Voice - Bosch Security Systems</h3>
      	<h4>Engineering Intern - 8 months</h4>
      </div>
    </div>
    <div class="row subSection" style="margin-top: 5%">
      <div class="nine columns">
      	<h3>Micro Electronics Inc - Micro Center</h3>
      	<h4>Service Technician I - 1 year</h4>
      </div>
    </div>
    <div class="row subSection" style="margin-top: 5%">
      <div class="nine columns">
      	<h3>Event Technology Crew - Memorial Student Center</h3>
      	<h4>Event Technician - 5 years</h4>
      </div>
    </div>

<!-- Projects
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="row  section">
      <a name="projects"></a>
      <div class="three columns">
    	<img src="images/skills.png" alt="projects" width="30%">
      </div>
    </div>
    <div class="row">
      <div class="three columns">
      	<h2>Projects</h2>
      </div>
    </div>
    <div class="row subSection">
      <div class="nine columns">
      	<h4>EtherMedia</h4>
      	<p>EtherMedia is a multiplatform sales solution for photos and videos. I'm involved in developing the front end using React Native.</p>
        <a class="button" href="https://ethermedia.app/home">EtherMedia</a>
      </div>
    </div>
    <div class="row subSection">
      <div class="nine columns">
      	<h4>Other Projects</h4>
      	<p>For other projects I'm involved with, visit my GitHub profile!</p>
        <a class="button" href="https://github.com/AustinPoulson">GitHub</a>
        <p>I also contribute on Stack Overflow.</p>
        <a class="button" href="https://stackoverflow.com/users/12817213/austin-poulson">Stack Overflow</a>
      </div>
    </div>

<!-- Interests
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="row  section">
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
    <div class="row subSection">
      <div class="nine columns">
      	<h4>Music</h4>
        <a class="button" href="https://youtu.be/sVw1bFMeHG4">Austa</a>
        <a class="button" href="https://youtu.be/hr9C0VJZTFw">Taco House</a>
        <a class="button" href="https://open.spotify.com/track/4bbtjAHYeGb3KZfmTBkrYQ?si=42b7a7b034354239">Correlations</a>
      </div>
    </div>
    <div class="row subSection">
      <div class="nine columns">
      	<h4>Art and Photography</h4>
      	<a class="button" href="https://www.instagram.com/austapasta">Instagram</a>
      </div>
    </div>
    <div class="row subSection">
      <div class="nine columns">
      	<h4>Outdoors</h4>
      	<p>I was raised with an appreciation for the outdoors. Whether I'm camping, rowing, or just spending time at a park, I love being around nature.</p>
      </div>
    </div>

<!-- Contact
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  
    <div class="row section">
      <a name="contact"></a>
      <div class="three columns">
    	<img src="images/contact.png" alt="contact" width="30%">
      </div>
    </div>

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
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
      </div>
    </div>
    <div class="row">
      <div class="three columns">
        <input class="button-primary" type="submit" value="send" name="_send" data-submit="Sending...">
      </div>
    </div>
    </form>
  </div>


<!-- Footnote
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row  section">
      <div class="twelve columns">
        <p class="grayText">This site was designed and developed by myself, Austin Poulson.</p>
      </div>
    </div>


  </div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
