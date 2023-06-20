<!DOCTYPE html>
<html lang="en">
<?php include "./common/header.php" ?>
<body>
  <main>
      
      <body></body>

      <?php include "./common/topnav.php" ?>
      <h1> Wiki </h1>


      <?php
      
// URL of the website you want to fetch
$url = 'https://help.desmos.com/hc/en-us/articles/15316366009997-Getting-Started-Desmos-Geometry-Beta-#h_01GZ9TADN1WKMEKW5VYDA06TW1';

// Use cURL to fetch the rendered HTML
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($ch);
curl_close($ch);

// Create a DOMDocument object and load the HTML content
$dom = new DOMDocument();
$dom->loadHTML($html);

// Create a DOMXPath object to query the document
$xpath = new DOMXPath($dom);

// Find the <article> tag(s) in the document
$articles = $xpath->query('//article');

// Iterate over the <article> tags and output their content
foreach ($articles as $article) {
  $articleContent = $dom->saveHTML($article);
  echo $articleContent;
}
?>





  </main>

<script src="index.js"></script>
</body>
</html>