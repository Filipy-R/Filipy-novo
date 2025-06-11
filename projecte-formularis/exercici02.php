<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = trim($_POST['text']);
    $word = trim($_POST['word']);

    // Validación de campos
    if (empty($text) || empty($word)) {
        echo "Error: Ambos campos son obligatorios.";
    } else {
        $length = strlen($text);
        $count = substr_count($text, $word);

        echo "La longitud del texto es: " . $length . "<br>";
        echo "La palabra '$word' aparece $count veces en el texto.";
    }
} else {
    echo "Error: Método de solicitud no válido.";
}
?>