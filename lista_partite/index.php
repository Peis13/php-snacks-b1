<?php
  // Creiamo un array 'partite' contenente altri array i quali rappresentano delle partite di calcio di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  // Stampiamo a schermo tutte le partite con questo schema:
  // Squadra di casa - Squadra ospite | Punteggio sq. casa - Punteggio sq. ospite

  $partite =
  [
    [
      'squadra_casa' => 'Juventus',
      'squadra_ospite' => 'Atalanta',
      'punteggio_casa' => 2,
      'punteggio_ospite' => 2
    ],
    [
      'squadra_casa' => 'Napoli',
      'squadra_ospite' => 'Milan',
      'punteggio_casa' => 2,
      'punteggio_ospite' => 2
    ],
    [
      'squadra_casa' => 'Inter',
      'squadra_ospite' => 'Torino',
      'punteggio_casa' => 3,
      'punteggio_ospite' => 1
    ]
  ];
?>

<ul>
  <?php for ($i=0; $i < count($partite); $i++) { ?>

    <?php
    $singola_partita = $partite[$i];
    $squadra_casa = $singola_partita['squadra_casa'];
    $squadra_ospite = $singola_partita['squadra_ospite'];
    $punteggio_casa = $singola_partita['punteggio_casa'];
    $punteggio_ospite = $singola_partita['punteggio_ospite'];
    ?>

    <li>
      <?php
        echo $squadra_casa . ' - ' . $squadra_ospite . ' | ' . $punteggio_casa . ' - ' . $punteggio_ospite;
      ?>
    </li>

  <?php } ?>
</ul>
