<?php
$pageTitle = $pageTitle ?? 'John Smith | For State Representative';
$pageDescription = $pageDescription ?? 'Learn about John Smith, his background, priorities, and campaign.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

  <meta
    name="description"
    content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>"
  >

  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header class="site-header">
    <div class="container nav-container">
      <a class="brand" href="index.php#top" aria-label="John Smith home">
        <span class="brand-mark">JS</span>

        <span class="brand-text">
          <strong>John Smith</strong>
          <small>For State Representative</small>
        </span>
      </a>

      <button
        class="menu-toggle"
        type="button"
        aria-expanded="false"
        aria-controls="site-navigation"
      >
        <span></span>
        <span></span>
        <span></span>
        <span class="sr-only">Toggle navigation</span>
      </button>

      <nav
        id="site-navigation"
        class="site-navigation"
        aria-label="Main navigation"
      >
        <a href="index.php#about">About</a>
        <a href="index.php#priorities">Priorities</a>
        <a href="index.php#involved">Get Involved</a>
        <a class="nav-button" href="index.php#contact">Contact</a>
      </nav>
    </div>
  </header>

  <main id="top">
