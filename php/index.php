<?php
$username = $_POST['username'];
$email = $_POST['email'];
$no_hp = $_POST['no-hp'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css" />
  </head>

  <body>
    <header>
      <nav>
        <div>
          <img src="../Images/Logo.png" alt="The King" class="logo" />
          <h1>The <span class="king">King</span></h1>
        </div>
        <ul>
          <li><a href="../index.html">Home</a></li>
          <li><a href="../index.html#about">About</a></li>
          <li><a href="../index.html#contact">Contact</a></li>
          <!-- <li class="hamburger">
            <a href="">
              <div class="bar"></div>
            </a>
          </li> -->
        </ul>
      </nav>
    </header>
    <section id="data">
      <div class="box">
        <div class="models">
          <div class="text-up">
            <h2>Konfirmasi Data Anda</h2>
          </div>
          <div>
            <table>
              <tr>
                <td class="title"><h4>Nama:</h4></td>
                <td>
                  <?php
                  echo "<h4>$username</h4>"
                    ?>
                </td>
              </tr>
              <tr>
                <td class="title"><h4>Email:</h4></td>
                <td><?php
                echo "<h4>$email</h4>"
                  ?></td>
              </tr>
              <tr>
                <td class="title"><h4>No HP (Whatsapp):</h4></td>
                <td><?php
                echo "<h4>$no_hp</h4>"
                  ?></td>
              </tr>
              <tr>
                <td class="title"><h4>Pesan:</h4></td>
                <td><?php
                echo "<h4>$message</h4>"
                  ?></td>
              </tr>
            </table>
          </div>
        </div>
        <button class="text-down"><a href="../index.html">Kirim</button>
      </div>
    </section>
  </body>
</html>
