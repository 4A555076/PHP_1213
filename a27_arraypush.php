<prep>
  <?php
  for ($i = 1; $i <= 42; $i++) {
    $ar[] = $i;
  }
  echo implode(':', $ar);  //陣列內容中間字串串接
  #explode()  //切割字串變成陣列

  $ar2 = range(1, 30);  //取數值範圍當陣列元素
  #$ar2 = range(1,30,2)
  shuffle($ar2); //隨機排序

  echo implode(':', $ar2);  //陣列內容中間字串串接
  ?>
</prep>