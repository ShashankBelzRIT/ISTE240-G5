<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Press to Pixel - <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : "From Press to Pixel"; ?></title>
    <link rel="stylesheet" href="assets\final.css">
</head>
<body>
  <header>
    <nav>
      <img id=logo src="assets/images/logo.png" alt="Logo" class="logo"><a href="index.html">""</a>
      <button id="hamburgerBtn">☰</button>
      
      <ul class="nav-menu">
          <li><a href="home.php">Home</a></li>
          
          <li class="dropdown">
            <a href="history.php">History</a>
            <ul class="dropdownMenu">
                <li><a href="press.php">Press</a></li>
                <li><a href="pixel.php">Pixel</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="why.php">Why</a>
            <ul class="dropdownMenu">
                <li><a href="credibility.php">Credibility</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="research.php">Research</a>
            <ul class="dropdownMenu">
                <li><a href="impact.php">Impact</a></li>
            </ul>
          </li>

          <li><a href="accessibility.php">Accessibility</a></li>
          </ul>
      <button class="settings">Settings</button>
  </nav>
  </header>