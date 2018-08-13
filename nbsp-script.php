<?php

/**
 * @param $input_text
 * @return string
 */
function nbsp2preposition($input_text) {

    $nbspStrings = [
        //one-letter prepositions
        ' a '=>' a&nbsp;',
        '(a '=>'(a&nbsp;',
        ' A '=>' A&nbsp;',
        'A '=>'A&nbsp;',
        '(A '=>'(A&nbsp;',
        ' i '=>' i&nbsp;',
        '(i '=>'(i&nbsp;',
        ' I '=>' I&nbsp;',
        'I '=>'I&nbsp;',
        '(I '=>'(I&nbsp;',
        ' o '=>' o&nbsp;',
        '(o '=>'(o&nbsp;',
        ' O '=>' O&nbsp;',
        'O '=>'O&nbsp;',
        '(O '=>'(O&nbsp;',
        ' u '=>' u&nbsp;',
        '(u '=>'(u&nbsp;',
        ' U '=>' U&nbsp;',
        'U '=>'U&nbsp;',
        '(U '=>'(U&nbsp;',
        ' s '=>' s&nbsp;',
        '(s '=>'(s&nbsp;',
        ' S '=>' S&nbsp;',
        'S '=>'S&nbsp;',
        '(S '=>'(S&nbsp;',
        ' z '=>' z&nbsp;',
        '(z '=>'(z&nbsp;',
        ' Z '=>' Z&nbsp;',
        'Z '=>'Z&nbsp;',
        '(Z '=>'(Z&nbsp;',
        ' k '=>' k&nbsp;',
        '(k '=>'(k&nbsp;',
        ' K '=>' K&nbsp;',
        'K '=>'K&nbsp;',
        '(K '=>'(K&nbsp;',
        ' v '=>' v&nbsp;',
        '(v '=>'(v&nbsp;',
        '&nbsp;v '=>'&nbsp;v&nbsp;', //two prepositions can happen here
        ' V '=>' V&nbsp;',
        'V '=>'V&nbsp;',
        '(V '=>'(V&nbsp;',
        //shortenings
        ' str. '=>' str.&nbsp;',
        ' hod.'=>'&nbsp;hod.',
        ' obr. '=>' obr.&nbsp;',
        ' tab. '=>' tab.&nbsp;',
        ' s. '=>' s.&nbsp;',
        ' č. '=>' č.&nbsp;',
        '§ '=>'§&nbsp;',
        '# '=>'#&nbsp;',
        ' * '=>' *&nbsp;',
        ' † '=>' †&nbsp;',
        //units
        ' m²'=>'&nbsp;m²',
        ' cm²'=>'&nbsp;cm²',
        ' dm²'=>'&nbsp;dm²',
        ' mm²'=>'&nbsp;dm²',
        ' m³'=>'&nbsp;m³',
        ' cm³'=>'&nbsp;cm³',
        ' dm³'=>'&nbsp;dm³',
        ' mm³'=>'&nbsp;dm³',
        ' kg'=>'&nbsp;kg',
        ' h'=>'&nbsp;h',
        ' %'=>'&nbsp;%',
        ' °C'=>'&nbsp;°C',
        ' Kč'=>'&nbsp;Kč',
        ' €'=>'&nbsp;€',
        //abbreviations
        /* needs script revision
        'a. s.'=>'a.&nbsp;s.',
        's. r. o.'=>'s.&nbsp;r.&nbsp;o.',
        'mn. č.'=>'mn.&nbsp;č.',
        'př. n. l.'=>'př.&nbsp;n.&nbsp;l.',
        */
        'tj. '=>'tj.&nbsp;',
        'tzv. '=>'tzv.&nbsp;',
        'tzn. '=>'tzn.&nbsp;',
        //degrees
        ' Bc. '=>' Bc.&nbsp;',
        ' BcA. '=>' BcA.&nbsp;',
        ' Ing. '=>' Ing.&nbsp;',
        ' Ing. arch. '=>' Ing.&nbsp;arch.&nbsp;',
        ' ICDr. '=>' ICDr.&nbsp;',
        ' JUDr. '=>' JUDr.&nbsp;',
        ' MDDr. '=>' MDDr.&nbsp;',
        ' Mgr. '=>' Mgr.&nbsp;',
        ' MgA. '=>' MgA.&nbsp;',
        ' MSDr. '=>' MSDr.&nbsp;',
        ' MUDr. '=>' MUDr.&nbsp;',
        ' MVDr. '=>' MVDr.&nbsp;',
        ' PaedDr. '=>' PaedDr.&nbsp;',
        ' PhDr. '=>' PhDr.&nbsp;',
        ' PhMr. '=>' PhMr.&nbsp;',
        ' RCDr. '=>' RCDr.&nbsp;',
        ' RNDr. '=>' RNDr.&nbsp;',
        ' RSDr. '=>' RSDr.&nbsp;',
        ' RTDr. '=>' RTDr.&nbsp;',
        ' ThDr. '=>' ThDr.&nbsp;',
        ' ThLic. '=>' ThLic.&nbsp;',
        ' ThMgr. '=>' ThMgr.&nbsp;',
        ' akad. '=>' akad.&nbsp;',
        ' ArtD. '=>' ArtD.&nbsp;',
        ' CSc. '=>' CSc.&nbsp;',
        ' Dr. '=>' Dr.&nbsp;',
        ' DrSc. '=>' DrSc.&nbsp;',
        ' DSc. '=>' DSc.&nbsp;',
        ' Ph.Dd. '=>' Ph.D.&nbsp;',
        ' Th.Dd. '=>' Th.D.&nbsp;',
        ' as. '=>' as.&nbsp;',
        ' odb. as. '=>' odb.&nbsp;as.&nbsp;',
        ' doc. '=>' doc.&nbsp;',
        ' prof. '=>' prof.&nbsp;',
    ];

    return strtr($input_text, $nbspStrings);
}

// This can take any text, be it $_GET or $_POST value from PHP form or any other text
echo nbsp2preposition($_GET["originalText"]);

?>