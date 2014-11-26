<?php

$sources = array(
	"The New York Times",
	"Twitter",
	"Facebook",
	"Ello",
	"BuzzFeed",
	"Business Insider",
	"Gawker",
	"This American Life",
	"The Toast",
	"The Awl",
	"Fusion",
	"A Marc Andreessen Tweetstorm",
	"The Harvard Lampoon",
	"The PS 84 Third Grade Class Paper",
	"The Washington Post",
	"Fox News",
	"CNN",
	"NPR",
	"The BBC",
	"The Guardian",
	"The National Enquirer",
	"The Onion",
	"Upworthy",
	"Today in Tabs",
	"Mail Kimp",
	"Al Jazeera",
	"Reddit",
	"Re/Code",
	"Racket Teen",
	"Vox",
	"FiveThirtyEight",
	"Frankfurter Allgemeine Zeitung",
	"Le Monde",
	"Russia Today",
	"Bloomberg News",
	"The New Yorker",
	"Tumblr",
	"South China Morning Post"
);

$stories = array(
	"The Decline and Fall of the Roman Empire",
	"The Building of the Egyptian Pyramids",
	"The American Revolution",
	"The Night I Lost My Virginity",
	"The Heat Death of the Universe",
	"The Thirty Years War",
	"Columbus' Discovery of America",
	"World War I",
	"The Industrial Revolution",
	"The Big Bang",
	"That One Time at Band Camp",
	"The Domestication of Animals",
	"The Civil War",
	"The Original Olympic Games",
	"The Battle of Thermopylae",
	"The First Production of King Lear",
	"The Assassination of Julius Caesar",
	"The Asteroid That Killed All the Dinosaurs",
	"Woodstock",
	"The Birth of Jesus",
	"The Parting of the Red Sea",
	"The Great Flood",
	"The Defenestration of Prague",
	"The Premiere of Beethoven's Ninth Symphony",
	"The Concordat of Worms",
	"The War of the Roses",
	"The Fourth Crusade",
	"The Siege of Baghdad",
	"The Destruction of the Death Star",
	"The Black Death",
	"The Reformation",
	"The Battle of Agincourt",
	"Magellan's Circumnavigation of the Earth",
	"The Tang Dynasty",
	"The Meiji Restoration",
	"The Development of Agriculture",
	"The Sepoy Mutiny",
	"The Boer War",
	"The Haitian Revolution",
	"The Great Vowel Shift"
);

if ((isset($_GET['source'])) && (isset($_GET['story']))) {
	if (($_GET['source'] >= count($sources)) || ($_GET['story'] >= count($stories))) {
		header('Location: /journalism/');
	} else {
		$source = $_GET['source'];
		$story = $_GET['story'];
	}
} else {
	$source = rand(0, count($sources) - 1);
	$story = rand(0, count($stories) - 1);
}

?>
<!DOCTYPE html>
<html>
<head>
<title>
	Journalism Generator
</title>
<style>
h1, h2, h3 {
	font-family: trebuchet ms, helvetica, arial;
	line-height: 1.2em;
	text-align: center;
}

h1 {
	font-size: 2em;
}

h2 {
	font-size: 1em;
	font-style: italic;
}

h2 a {
	color: #339;
}

h3 {
	font-size: 1.5em;
}

a {
	text-decoration: none;
	color: #00c;
}

span {
	text-decoration: underline;
}
</style>

</head>

<body>

<h1>If <span><?php echo $sources[$source]; ?></span> Covered <span><?php echo $stories[$story]; ?></span></h1>

<h2><a href="http://lansner.com/journalism/<?php echo $story; ?>by<?php echo $source; ?>">Permalink: http://lansner.com/journalism/<?php echo $story; ?>by<?php echo $source; ?></a></h2>

<h3><a href="/journalism/">Get Another Story</a></h3>

<a class="twitter-share-button"
  href="https://twitter.com/share"
  data-url="http://lansner.com/journalism/<?php echo $story; ?>by<?php echo $source; ?>"
  data-text="If <?php echo $sources[$source]; ?> Covered <?php echo $stories[$story]; ?>"
  >
Tweet
</a>
<script type="text/javascript">
window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
</script>

</body>
</html>
