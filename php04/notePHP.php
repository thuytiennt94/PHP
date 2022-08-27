<?
    #this is a comment, and
    #this is the second line of the comment

//this is a comment too. each style comments only
print "an example with single line comments";
?>


<?
#first example
print <<<END
this uses the "here document" syntax to output 
multiple the here document terminator must apprear on a 
line with just a semicolon no extra whitespace!
END;

#second example
print "this spans multiple lines the newlines will be output as well"
?>
