<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <link rel="stylesheet" href="dist/app.css">

    <title>Document</title>
</head>
<body>
    <header>
         <div class="header-container">
         <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="logo">
    </div>
    </header>
    <div class="cds-container container"></div>

    <script id="entry-template" type="text/x-handlebars-template">
          <div class="cd">
              <img src="{{poster}}" alt="poster-cd">
              <h3>{{title}}</h3>
              <span class="author">{{author}}</span>
              <span class="year">{{year}}</span>
          </div>
        </script>

    
    <script src="dist/app.js"></script>
</body>
</html>