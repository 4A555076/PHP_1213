<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <pre id="info"></pre>

</head>

<body>
  <script>
    const v1 = {
      name: 'David',
      age: 25
    };

    const json1 = `{
      "name": "David",
      "age": 25
    }`;

    info.innerHTML = JSON.stringify(v1, null, 4);

    const v2 = JSON.parse(json1); //JSON  parse字串轉換回原生的類型
    console.log({
      v2
    });
  </script>


</body>

</html>