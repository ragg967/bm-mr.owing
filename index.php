<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="output.css">
  <script src="https://unpkg.com/htmx.org@1.9.10"></script>
</head>
<body class="p-8">
  <h1 class="text-2xl font-bold mb-4">Test Page</h1>
  
  <button hx-get="src/api/test.php" hx-target="#result" class="bg-green-500 text-white px-4 py-2 rounded">
    Click Me
  </button>
  
  <div id="result" class="mt-4"></div>
</body>
</html>