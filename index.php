<h3>Vitaj</h3>
<form id="form" action="" method="post">
    <input type="submit" name="submit" value="Spustit preklad slovnika">
</form>
<?php 

require 'bootstrap.php';

$text = read_word(SOURCE_FILE);

if(isset($_POST['submit'])){
    if($text !== false) {		
        $words = array();
        $clean_words = array();
        $words = preg_split('/((^\p{P}+)|(\p{P}*\s+\p{P}*)|(\p{P}+$))/', $text, -1, PREG_SPLIT_NO_EMPTY);
        $word_counts = 0;    
    }
    else {echo "Can't Read that file.";}

    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    $section = $phpWord->addSection();
    $header = array('size' => 16, 'bold' => false);
    $cols = $word_counts;
    $clean_words = array();

    $section->addTextBreak(1);
    $fancyTableStyleName = 'style';
    $fancyTableStyle = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 80, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER, 'cellSpacing' => 50);
    $fancyTableFirstRowStyle = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');
    $fancyTableCellStyle = array('valign' => 'center', 'borderSize' => 0);
    $fancyTableCellBtlrStyle = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
    $fancyTableFontStyle = array('bold' => true);

    $phpWord->addTableStyle($fancyTableStyleName, $fancyTableStyle, $fancyTableFirstRowStyle);

    $table = $section->addTable($fancyTableStyleName);
    $table->addRow(900);
    $table->addCell(2000, $fancyTableCellStyle)->addText('English', $fancyTableFontStyle);
    $table->addCell(2000, $fancyTableCellStyle)->addText('Vyslovnost', $fancyTableFontStyle);
    $table->addCell(2000, $fancyTableCellStyle)->addText('Slovensky', $fancyTableFontStyle);

    foreach ($words as $word) {
        $word = preg_replace("/[^A-Za-z0-9 ]/", '', $word);
        if(strlen($word) > WORD_LENGTH){
            if(!in_array($word, $clean_words)){
                array_push($clean_words, $word);
                $table->addRow();
                $table->addCell(2000)->addText($word);
                $table->addCell(2000)->addText("");
                $table->addCell(2000)->addText(preklad($word));
            }
        }
    }

    echo "Celkovo ".count($clean_words)." slov";

    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save(TARGET_FILE);
}




