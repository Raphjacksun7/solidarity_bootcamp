<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Formation Laravel | Solidarity</title>
  </head>
  <body>
    <div class='leaderboard'>
      <header>
        <h1 class="leaderboard__title">
          <span class="leaderboard__title--top">Chapitre</span>
          <span class="leaderboard__title--bottom">Par Journée</span>
        </h1>
      </header>

      <main class="leaderboard__profiles">
      <?php
      $d = dir(".");
      $day = 1;
        while (false !== ($entry = $d->read()))
        {
            if (is_dir($entry) && ($entry != '.') && ($entry != '..'))
                echo "<a href='{$entry}'><article class='leaderboard__profile'><span class='leaderboard__picture'> {$day} </span> <span class='leaderboard__name'>{$entry}</span>  </article></a>";
                $day++;
        }
        $d->close();
        ?>
        
      </main>
    </div>
  </body>
</html>
