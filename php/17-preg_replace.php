<?php

/**
 * preg_replace(mixed, mixed, mixed, integer, integer): string|array|null
 * mixed: a pattern you are looking for
 * mixed: if the above pattern is found, replace it with this
 * mixed: this will be the value which you are checking for the pattern
 * integer: amount of times it will be replace, if limit set to 1, any other patterns found will not be replaced
 * integer: this variable will keep up how many replacement have been made
 */

 $pattern = '/[$]/';
 $replacement = '@';
 $subject = 'example$test.nl';
 $limit = 1;
 $count = 0;

 $output = preg_replace($pattern, $replacement, $subject, $limit, $count);

 var_dump($output);

// returns 'example@test.nl'


/**
* The following should be escaped if you are trying to match that character
* 
*           \ ^ . $ | ( ) [ ]
*           * + ? { } ,
* 
* Special Character Definitions
* \ Quote the next metacharacter
* ^ Match the beginning of the line
* . Match any character (except newline)
* $ Match the end of the line (or before newline at the end)
* | Alternation
* () Grouping
* [] Character class
* * Match 0 or more times
* + Match 1 or more times
* ? Match 1 or 0 times
* {n} Match exactly n times
* {n,} Match at least n times
* {n,m} Match at least n but not more than m times
* More Special Character Stuff
* \t tab (HT, TAB)
* \n newline (LF, NL)
* \r return (CR)
* \f form feed (FF)
* \a alarm (bell) (BEL)
* \e escape (think troff) (ESC)
* \033 octal char (think of a PDP-11)
* \x1B hex char
* \c[ control char
* \l lowercase next char (think vi)
* \u uppercase next char (think vi)
* \L lowercase till \E (think vi)
* \U uppercase till \E (think vi)
* \E end case modification (think vi)
* \Q quote (disable) pattern metacharacters till \E
* Even More Special Characters
* \w Match a "word" character (alphanumeric plus "_")
* \W Match a non-word character
* \s Match a whitespace character
* \S Match a non-whitespace character
* \d Match a digit character
* \D Match a non-digit character
* \b Match a word boundary
* \B Match a non-(word boundary)
* \A Match only at beginning of string
* \Z Match only at end of string, or before newline at the end
* \z Match only at end of string
* \G Match only where previous m//g left off (works only with /g)
*/

?>