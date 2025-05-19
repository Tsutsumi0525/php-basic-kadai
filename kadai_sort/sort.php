<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way(array &$array, $order = true) {
          if ($order) {
            sort($array);
          }else {
            rsort($array);
          }
        }
        $nums = [15,4,18,23,10];

        sort_2way($nums);
        echo "昇順にソートします。<br>";
        foreach ($nums as $num) {
          echo $num . "<br>";
        }

        sort_2way($nums,false);
        echo "降順にソートします。<br>";
        foreach ($nums as $num) {
          echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>