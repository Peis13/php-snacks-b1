<?php
  // Passare come parametri GET nome, email e l'età e verificare (cercando i metodi che non conosciamo nella documentazione) che:
  // 1. il nome sia più lungo di 3 caratteri,
  // 2. l'email contenga un punto e una chiocciola
  // 3. l'età sia un numero.
  // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
  $nome = $_GET['nome'];
  $eta = $_GET['eta'];
  $email = $_GET['email'];

  if (empty($nome) || empty($eta) || empty($email)) {
    echo 'Accesso negato';
  } elseif (strlen($nome) <= 3) {
    echo 'Accesso negato';
  } elseif (strpos($email, '@') === false || strpos($email, '.') === false) {
    echo 'Accesso negato';
  } elseif (is_numeric($eta) === false) {
    echo 'Accesso negato';
  } else {
    echo 'Accesso riuscito';
  }
?>
