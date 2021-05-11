<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <nav>
      <ul>
        <?php foreach(getNav() as $nav) { ?>
          <li>
            <a href="?p=<?php echo $nav['id'] ?>">
              <?php echo $nav ['price']; ?>
            </a>
          </li>
        <?php } ?>
      </ul>
    </nav>
