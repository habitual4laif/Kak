<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kaku</title>
    <link rel="stylesheet" href="kaku.css">
  </head>
  <body>
    <div class="main">
      <div class="answer"></div>
      <form class="" action="calc.php" method="post">
        <input type="text" name="digitOne" value="">
        <input type="text" name="digitTwo" value="">
        <select class="calc" name="calc">
          <option value="add">Add</option>
          <option value="sub">Subtract</option>
          <option value="mul">Multiply</option>
          <option value="div">Divide</option>
        </select>
        <button type="submit">Calculate</button>
      </form>
    </div>

  </body>
</html>
