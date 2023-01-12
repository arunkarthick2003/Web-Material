Repetition Quantifiers
---------------------------
In the previous section we've learnt how to match a single character in a variety of fashions. But what if you want to match on more than one character? For example, let's say you want to find out words containing one or more instances of the letter p, or words containing at least two p's, and so on. This is where quantifiers come into play. With quantifiers you can specify how many times a character in a regular expression should match.

The following table lists the various ways to quantify a particular pattern:

RegExp	    What it Does
p+	        Matches one or more occurrences of the letter p.

p*	        Matches zero or more occurrences of the letter p.

p?	        Matches zero or one occurrences of the letter p.

p{2}	    Matches exactly two occurrences of the letter p.

p{2,3}	    Matches at least two occurrences of the letter p, but
            not more than three occurrences of the letter p.

p{2,}	    Matches two or more occurrences of the letter p.

p{,3}	    Matches at most three occurrences of the letter p