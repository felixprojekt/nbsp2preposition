<?
// sending $originalText with GET method
$addNbsp = Array(
	//one-letter prepositions
    ' a '=>' a&nbsp;',
    '&nbsp;a '=>'&nbsp;a&nbsp;ahoj',
    ' A '=>' A&nbsp;',
    ' o '=>' o&nbsp;',
    ' O '=>' O&nbsp;',
    ' u '=>' u&nbsp;',
    ' U '=>' U&nbsp;',
    ' s '=>' s&nbsp;',
    ' S '=>' S&nbsp;',
    ' z '=>' z&nbsp;',
    ' Z '=>' Z&nbsp;',
    ' k '=>' k&nbsp;',
    ' K '=>' K&nbsp;',
    ' v '=>' v&nbsp;',
    '&nbsp;v '=>'&nbsp;v&nbsp;', //two prepositions can happen here
    ' V '=>' V&nbsp;',

);

// printing to frontend
echo $finalText = strtr($_GET["originalText"], $addNbsp);

/* for usage in only-PHP projects, you can remove the echo statement above
and use only variable decralation such as: */

// $finalText = strtr($_GET["originalText"], $addNbsp);

/* If you are processing for example blog post, you will maybe use $_POST.
The $finalText value will be available for next steps, for example for inserting to DB. */

?>