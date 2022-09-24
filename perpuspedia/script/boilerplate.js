let head = document.querySelector('head');
let boilerplate = `
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name"keywords" content="free, perpustakaan, online, library, indonesia">
<meta name="author" content="Andy Thoriq">

<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- favicon -->
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
`
head.innerHTML = boilerplate;
