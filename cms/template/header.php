<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Økitcms</title>
  </head>
  <body>

    <nav>
      <ul>
        <?php foreach(getNav() as $nav) { ?>
          <li>
            <a href="?p=<?php echo $nav['id'] ?>">
              <?php echo $nav ['title']; ?>
            </a>
          </li>
        <?php } ?>
      </ul>
    </nav>
