<?php
/* Snack 1:
Creiamo un array 'matches' contenente altri array i quali
rappresentano delle partite di basket di un’ipotetica tappa del
calendario. Ogni array della partita avrà una squadra di casa e una
squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla
squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
 Olimpia Milano - Cantù | 55-60 */

 $matches = [
  [
   'squadra_1' => 'Milano',
   'squadra_2' => 'Bologna',
   'punti_1' => 65,
   'punti_2' => 90
  ],
  [
   'squadra_1' => 'Roma',
   'squadra_2' => 'Pisa',
   'punti_1' => 34,
   'punti_2' => 65
  ],
  [
   'squadra_1' => 'Cagliari',
   'squadra_2' => 'Palermo',
   'punti_1' => 23,
   'punti_2' => 12
  ]
 ];

 /* Snack 2:
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */

 $nome = $_GET['name'];
 $email = $_GET['mail'];
 $eta = $_GET['age'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack</title>
  </head>
  <body>

    <ul>
      <?php for ($i=0; $i < count($matches); $i++) {
        $this_partita = $matches[$i]; ?>

        <li>
          <?php echo $this_partita['squadra_1'] ?> - <?php echo $this_partita['squadra_2'] ?>
          <?php echo $this_partita['punti_1'] ?> | <?php echo $this_partita['punti_2'] ?>
        </li>

      <?php } ?>
    </ul>

    <p>
      <?php if ((strlen($nome) > 3) && (strpos($email, '.') !== false) && (strpos($email, '@') !== false) && (is_numeric($eta))) { ?>
        <?php echo 'Accesso riuscito' ?>
      <?php }
      else { ?>
        <?php echo 'Accesso negato' ?>
      <?php } ?>
    </p>

  </body>
</html>
