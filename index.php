<?php
// Riscrivere questa pagina del sito google: https://policies.google.com/faq
// Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.

$faq = [
  [
    'domanda' => 'testo domanda',
    'risposta' => [
      'paragrafo 1',
      'paragrafo 2',
      'paragrafo 3'
    ],
  ],
  [
    'domanda' => 'testo domanda',
    'risposta' => [
      'paragrafo 1'
    ],
  ],
  [
    'domanda' => 'testo domanda',
    'risposta' => [
      'paragrafo 1',
      'paragrafo 2'
    ],
  ],
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google FAQ</title>
  </head>
  <body>

    <?php foreach ($faq as $indice => $domanda_risposta) { ?>
      <h2><?php echo ($indice + 1) . '.' . $domanda_risposta['domanda']; ?></h2>

      <?php foreach ($domanda_risposta['risposta'] as $paragrafo) { ?>
        <p><?php echo $paragrafo; ?></p>
      <?php } ?>
    <?php } ?>
  </body>
</html>
