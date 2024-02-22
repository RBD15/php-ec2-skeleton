<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main</title>
</head>
<body>
  <main>
    <section>
      <?= $this->fetch('/Components/Header.php',["footerTitle"=>'My Header']) ?> 
    </section>

    
    <section>
      <h4>Main Content</h4>
    </section>

  </main>

  <?= $this->fetch('/Components/Footer.php',["title"=>'My Footer']) ?> 

</body>
</html>