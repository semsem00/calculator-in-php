<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assignment3/bootstrap.min.css" />
    <title>Calculator</title>
</head>
<body>
    <form method="$GET" action="handle-calculate.php" class="container w-75 mt-5 p-5 shadow-lg " >
      <input type="text" placeholder="first number" class="p-1 m-1" name="number1"/>
      <select name="operation" class="btn btn-info m-1 ">
          <option value="add">add</option>
          <option value="sub">sub</option>
          <option value="mul">mul</option>
          <option value="div">div</option>
      </select>
      <input type="text" placeholder="second number" class="p-1 m-1" name="number2"/>
      <button type="submit" name="submit" class="btn btn-outline-info"> submit</button>
    </form> 
</body>
</html>



















