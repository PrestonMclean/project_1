/* Random Quote Generator Styles */
<?php
// I leared this from http://www.barelyfitz.com/projects/csscolor/
header("Content-Type: text/css");

$colors = ['#ED9405', '#038A99', '#36b55c', '#1F0480', '#948976'];
$color = rand(0,(count($colors)-1));
?>

body {
  color: white;
  font-family: 'Playfair Display', serif;
}

#loadQuote, body {
  background-color: <?php echo "$colors[$color]";?>;
}

#quote-box {
  position: absolute;
  top: 20%;
  left: 10%;
  right: 10%;
  width: 80%;
  line-height: .5;
  animation-name: fade;
  animation-duration: 5s;
}


@keyframes fade {
  from {
    color: #fff1;
  }
  to {
    color: #ffff;
  }
}

.quote {
  font-size: 4rem;
  font-weight: 400;
  line-height: 1.1;
  position: relative;
  margin: 0;
}

.quote:before, .quote:after {
  font-size: 6rem;
  line-height: 2.5rem;
  position: absolute;
}

.quote:before {
  content: "“";
  top: .25em;
  left: -.5em;
}

.quote:after {
  content: "”";
  bottom: -.1em;
  margin-left: .1em;
  position: absolute;
}

.source {
  font-size: 1.25rem;;
  letter-spacing: 0.05em;
  line-height: 1.1;
  text-align: right;
  margin-right: 4em;
}

.tag {
  border-radius: 6px;
  padding: 4px;
  margin: 5px;
  background-color: #0008;
}

.source:before {
  content: "—";
}

.citation {
  font-style: italic;
}

.citation:before {
  content: ", ";
  font-style: normal;
}

.year:before {
  content: ", ";
  font-style: normal;
}

#loadQuote {
  position: fixed;
  width: 12em;
  display: inline-block;
  left: 50%;
  margin-left: -6em;
  bottom: 50px;
  border-radius: 4px;
  border: 2px solid #fff;
  color: #fff;
  padding: 15px 0;
  transition: .5s ;
  text-decoration: none;
}

#loadQuote:hover {
  background-color: rgba(255,255,255,.25);
}

#loadQuote:focus {
  outline: none;
}

@media (max-width: 420px) {
  .quote {
    font-size: 2.5rem;
  }
  .quote:before, .quote:after {
    font-size: 3rem;
  }
  .source {
    font-size: 1rem;
  }
}
