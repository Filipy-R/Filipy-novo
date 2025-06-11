<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $cognoms = htmlspecialchars($_POST['cognoms']);
    $genere = htmlspecialchars($_POST['genere']);
    $correu = htmlspecialchars($_POST['correu']);
    $edat = htmlspecialchars($_POST['edat']);
    $ciutat = htmlspecialchars($_POST['ciutat']);
    $aficions = isset($_POST['aficions']) ? $_POST['aficions'] : [];
    $motivacions = htmlspecialchars($_POST['motivacions']);

    $dades_personals = [
        'Nom' => $nom,
        'Cognoms' => $cognoms,
        'Gènere' => $genere,
        'Correu electrònic' => $correu,
        'Edat' => $edat,
        'Ciutat' => $ciutat,
        'Aficions' => implode(", ", $aficions),
        'Motivacions' => $motivacions
    ];

    echo "<h1>Dades Personals</h1>";
    echo "<ul>";
    foreach ($dades_personals as $clau => $valor) {
        echo "<li><strong>$clau:</strong> $valor</li>";
    }
    echo "</ul>";
} else {
    echo "No s'han enviat dades.";
}
?>