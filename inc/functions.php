<?php
// PHP - Random Quote Generator
$previous_quote;
$current_quote;

$tags = ['inspirational','book quote','speach','life advice','light at the end of the tunnel','love'];

$quotes = [
  [
   'quote' =>
   'Most people overestimate what
    they can do in one year and
    underestimate what they can do
    in ten years',
   'source' => 'Unknown',
   'citation' => 'Libraries of the Future by J. C. R. Licklider',
   'year' => 1965,
   'tag' => ["$tags[0]","$tags[1]","$tags[3]"]],
  [
    'quote' =>
    '...the world isn\'t split into good people and Death Eaters',
    'source' => 'Sirius Black',
    'citation' => 'Harry Potter and the Order of the Phoenix by J.K. Rowling',
    'year' => 2003,
    'tag' => ["$tags[1]"]],
  [
    'quote' =>
    'We choose to go to the moon
     in this decade and do the other
     things, not because they are easy,
     but because they are hard,',
     'source' => 'John F. Kennedy',
     'citation' => 'Rice University Speach',
     'year' => 1962,
     'tag' => ["$tags[2]","$tags[0]"]],
  [
    'quote' => 'Nothing is permanent in this wicked world not even our troubles',
    'source' => 'Charlie Chaplin',
    'citation' => 'Monsieur Verdoux',
    'year' => 1947,
    'tag' => ["$tags[4]"]],
  [
    'quote' =>
    'Don’t try to be young. Just
    open your mind. Stay interested
    in stuff. There are so many
    things I won’t live long enough
    to find out about, but I’m still
    curious about them.',
    'source' => 'Betty White',
    'citation' => '',
    'year' => '',
    'tag' => ["$tags[3]"]],
  [
    'quote' => 'For small creatures such as we the vastness is bearable only through love',
    'source' => 'Carl Sagan',
    'citation' => 'Contact by Carl Sagan',
    'year' => 1997,
    'tag' => ["$tags[1]","$tags[5]"]]
];

function getRandomQuote() {
  global $quotes, $current_quote, $previous_quote;
  // this loop gets a differnt nummber every time
  do {
    $previous_quote = ($_GET["quote"]);
    // get a random number that is in range of the inexes in $quotes
    $current_quote = rand(0,(count($quotes)-1));
  } while ($current_quote == $previous_quote);
  // return the random quote
  return $quotes[$current_quote];
}

function printQuote()
{
  // call getRandomQuote and store the quote in $quote
  $quote = getRandomQuote();
  // display the quote
  echo "<p class='quote'>" . $quote['quote'] . "</p>";
  // display the source
  echo "<p class='source'>" . $quote['source'];
  if ($quote['citation'] != ''){
    echo "<span class='citation'> " . $quote['citation'] . "</span>";
  }
  // display the year if it is not empty
  if ($quote['year'] != 0){
    echo "<span class='year'> " . $quote['year'] . "</span>";
  }
  // display all tags
  foreach ($quote['tag'] as $tag) {
    echo "<span class='tag'> " . $tag . "</span>";
  }
  echo "</p>";
}

?>
