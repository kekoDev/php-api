<?php
if (isset($_GET)) {
    if (isset($_GET["text"]) and !empty($_GET["text"])) {
        $text2 = $_GET["text"];
        $new_text = [];
        ///// 1 
        $text = $text2;
        $text = str_replace('a', 'ᗩ', $text);
        $text = str_replace("b", "ᗷ", $text);
        $text = str_replace("c", "ᑕ", $text);
        $text = str_replace("d", "ᗪ", $text);
        $text = str_replace("e", "E", $text);
        $text = str_replace("E", "E", $text);
        $text = str_replace("g", "G", $text);
        $text = str_replace("h", "ᕼ", $text);
        $text = str_replace("i", "I", $text);
        $text = str_replace("j", "ᒍ", $text);
        $text = str_replace("k", "K", $text);
        $text = str_replace("l", "ᒪ", $text);
        $text = str_replace("m", "ᗰ", $text);
        $text = str_replace("n", "ᑎ", $text);
        $text = str_replace("o", "O", $text);
        $text = str_replace("p", "ᑭ", $text);
        $text = str_replace("q", "ᑫ", $text);
        $text = str_replace("r", "ᖇ", $text);
        $text = str_replace("s", "ᔕ", $text);
        $text = str_replace("t", "T", $text);
        $text = str_replace("u", "ᑌ", $text);
        $text = str_replace("v", "ᐯ", $text);
        $text = str_replace("w", "ᗯ", $text);
        $text = str_replace("x", "᙭", $text);
        $text = str_replace("y", "Y", $text);
        $text = str_replace("z", "ᘔ", $text);
        $text = str_replace('ض', '᎗ᘞ̇', $text);
        $text = str_replace('ص', '᎗ᘗ', $text);
        $text = str_replace('ث', '᎗̇̈ɹ', $text);
        $text = str_replace('ق', 'ᓆ', $text);
        $text = str_replace('ف', 'ᓅ', $text);
        $text = str_replace('غ', '᎗ჺ', $text);
        $text = str_replace('ع', '᎗ϛ', $text);
        $text = str_replace('ه', '᎗බ', $text);
        $text = str_replace('خ', 'ᓘ', $text);
        $text = str_replace('ح', 'ᓗ', $text);
        $text = str_replace('ج', 'ᓗฺ', $text);
        $text = str_replace('ش', '᎗ɹ̇̈ɹɹ', $text);
        $text = str_replace('س', '᎗ɹɹɹ', $text);
        $text = str_replace('ي', '᎗̤ɹ', $text);
        $text = str_replace('ب', '᎗̣ɹ', $text);
        $text = str_replace('ل', '⅃', $text);
        $text = str_replace('ا', 'Ȋ', $text);
        $text = str_replace('ت', '᎗̈ɹ', $text);
        $text = str_replace('ن', '᎗̇ɹ', $text);
        $text = str_replace('ܭ', 'ك', $text);
        $text = str_replace('م', 'ᓄ', $text);
        $text = str_replace('ة', '᎗Ꭷ', $text);
        $text = str_replace('ء', 'ء', $text);
        $text = str_replace('ظ', '᎗̇Ь', $text);
        $text = str_replace('ط', '᎗Ь', $text);
        $text = str_replace('ذ', '̇ↄ', $text);
        $text = str_replace('د', 'ↄ', $text);
        $text = str_replace('ز', 'j', $text);
        $text = str_replace('ر', 'ȷ', $text);
        $text = str_replace('و', 'g', $text);
        $text = str_replace('ى', 'ʟɾʅ', $text);
        $new_text[] = $text;
        /// end 1 
        // 2 
        $text = $text2;
        $text = str_replace('a', 'ᗩ2', $text);
        $text = str_replace("b", "ᗷ2", $text);
        $text = str_replace("c", "ᑕ3", $text);
        $text = str_replace("d", "ᗪ4", $text);
        $text = str_replace("e", "E5", $text);
        $text = str_replace("E", "E6", $text);
        $text = str_replace("g", "G7", $text);
        $text = str_replace("h", "ᕼ", $text);
        $text = str_replace("i", "I", $text);
        $text = str_replace("j", "ᒍ", $text);
        $text = str_replace("k", "K", $text);
        $text = str_replace("l", "ᒪ", $text);
        $text = str_replace("m", "ᗰ", $text);
        $text = str_replace("n", "ᑎ", $text);
        $text = str_replace("o", "O", $text);
        $text = str_replace("p", "ᑭ", $text);
        $text = str_replace("q", "ᑫ", $text);
        $text = str_replace("r", "ᖇ", $text);
        $text = str_replace("s", "ᔕ", $text);
        $text = str_replace("t", "T", $text);
        $text = str_replace("u", "ᑌ", $text);
        $text = str_replace("v", "ᐯ", $text);
        $text = str_replace("w", "ᗯ", $text);
        $text = str_replace("x", "᙭", $text);
        $text = str_replace("y", "Y", $text);
        $text = str_replace("z", "ᘔ", $text);
        $text = str_replace('ض', '᎗ᘞ̇', $text);
        $text = str_replace('ص', '᎗ᘗ', $text);
        $text = str_replace('ث', '᎗̇̈ɹ', $text);
        $text = str_replace('ق', 'ᓆ', $text);
        $text = str_replace('ف', 'ᓅ', $text);
        $text = str_replace('غ', '᎗ჺ', $text);
        $text = str_replace('ع', '᎗ϛ', $text);
        $text = str_replace('ه', '᎗බ', $text);
        $text = str_replace('خ', 'ᓘ', $text);
        $text = str_replace('ح', 'ᓗ', $text);
        $text = str_replace('ج', 'ᓗฺ', $text);
        $text = str_replace('ش', '᎗ɹ̇̈ɹɹ', $text);
        $text = str_replace('س', '᎗ɹɹɹ', $text);
        $text = str_replace('ي', '᎗̤ɹ', $text);
        $text = str_replace('ب', '᎗̣ɹ', $text);
        $text = str_replace('ل', '⅃', $text);
        $text = str_replace('ا', 'Ȋ', $text);
        $text = str_replace('ت', '᎗̈ɹ', $text);
        $text = str_replace('ن', '᎗̇ɹ', $text);
        $text = str_replace('ܭ', 'ك', $text);
        $text = str_replace('م', 'ᓄ', $text);
        $text = str_replace('ة', '᎗Ꭷ', $text);
        $text = str_replace('ء', 'ء', $text);
        $text = str_replace('ظ', '᎗̇Ь', $text);
        $text = str_replace('ط', '᎗Ь', $text);
        $text = str_replace('ذ', '̇ↄ', $text);
        $text = str_replace('د', 'ↄ', $text);
        $text = str_replace('ز', 'j', $text);
        $text = str_replace('ر', 'ȷ', $text);
        $text = str_replace('و', 'g', $text);
        $text = str_replace('ى', 'ʟɾʅ', $text);
        $new_text[] = $text;
        $new_text[] = $text;
        $new_text[] = $text;
        $new_text[] = $text;
        $new_text[] = $text;
        $new_text[] = $text;
        $new_text[] = $text;
        $new_text[] = $text;
        $new_text[] = $text;
        /// end 2 
        echo json_encode([
            "ok"=>true,
            "text" => $_GET["text"],
            "newText" => $new_text,
        ]);
    } else {
        echo json_encode([
            "ok" => false,
            "msg_error" => "Text is empty !",
        ]);
    }
} else {
    echo json_encode([
        "ok" => false,
        "msg_error" => "only GET !",
    ]);
}
