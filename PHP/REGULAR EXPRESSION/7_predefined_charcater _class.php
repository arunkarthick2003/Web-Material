<!-- Predefined Character Classes
-----------------------------

Some character classes such as digits, letters, and whitespaces are used so frequently that there are shortcut names for them. The following table lists those predefined character classes:

Shortcut	What it Does
.	Matches any single character except newline \n.
\d  	matches any digit character. Same as [0-9]
\D  	Matches any non-digit character. Same as [^0-9]
\s  	Matches any whitespace character (space, tab, newline or 
        carriage return character). Same as [ \t\n\r]
\S	Matches any non-whitespace character. Same as [^ \t\n\r]
\w	Matches any word character (definned as a to z, A to Z,      0 to 9, and 
        the underscore). Same as [a-zA-Z_0-9]
\W	Matches any non-word character. Same as [^a-zA-Z_0-9] -->

<?php
$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around    the    Sun";

echo preg_replace($pattern, $replacement, $text);



?>