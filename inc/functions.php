// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
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


// Create the getRandomQuuote function and name it getRandomQuote



// Create the printQuote funtion and name it printQuote