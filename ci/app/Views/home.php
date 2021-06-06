<?php
function price(int $pri)
{
    $len =  mb_strlen($pri);
    if ($len == 4) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 1);
        return $first . ',' . $end;
    } elseif ($len == 3) {
        return $pri;
    } elseif ($len == 2) {
        return $pri;
    } elseif ($len == 1) {
        return $pri;
    } elseif ($len == 5) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 2);
        return $first . ',' . $end;
    } elseif ($len == 6) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 3);
        return $first . ',' . $end;
    } elseif ($len == 7) {
        $end = substr($pri, -3);
        $mid = substr($pri, -6, 3);
        $first = substr($pri, 0, 1);
        return $first . ',' . $mid . ',' . $end;
    } elseif ($len == 8) {
        $end = substr($pri, -3);
        $mid = substr($pri, -6, 3);
        $first = substr($pri, 0, 2);
        return $first . ',' . $mid . ',' . $end;
    }
}

function percent ($dt){
    $tr = abs(strtotime($dt));
    if ($tr > 99999999){
        echo round(abs(($tr/9000000) - 120 - 24));
        $tr =- 100000;
    }if ($tr > 9999999){
        echo ($tr/100000) - 20;
        $tr =- 10000;
    }if ($tr > 999999){
        echo ($tr/10000) - 20;
        $tr =- 10000;
    }if ($tr > 99999){
        echo ($tr/1000) - 20;
        $tr =- 10000;
    }if ($tr > 9999){
        echo ($tr/100) - 20;
        $tr =- 1000;
    }if ($tr > 999){
        echo ($tr/10) - 20;
        $tr =- 100;
    }if ($tr > 99){
        echo abs(($tr/1) - 10);
        $tr =- 10;
    }if ($tr > 9){
        echo abs(($tr/1));
        $tr =- 1;
    }
}
// function tdiff ($date){
//     $tr = time();
//     $diff = (strtotime($date)-$tr) + $tr;
//     // echo date('d',$diff)." ago";
//     echo date('c',$diff);
// }

function plural($num)
{
    if($num != 1){
        return 's';
    }
}

function tdiff($date)
{
    $diff = time() - strtotime($date);
    // echo abs($diff)/24;
    if ($diff < 60){
        echo $diff."second".plural($diff)." ";
        $diff = round($diff/60);
    }if ($diff < 60){
        echo $diff."minute".plural($diff)." ";
        $diff = round($diff/60);
    }if ($diff < 24){
        echo $diff."hour".plural($diff)." ";
        $diff = round($diff/24);
    }if ($diff < 7){
        echo $diff."day".plural($diff)." ";
        $diff = round($diff/7);
    }if ($diff < 4){
        echo "on ".date("F j, Y",strtotime($date));
    }
}

?>
    <!-- banner -->
    <div class="banner">
      <h1 class="orange">Ignition Launchpad</h1>
      <h3 class="banner-slogan">
        <p class="light-grey">
          The most exclusive offerings for the PAID community
        </p>
      </h3>
    </div>
    <!-- end of banner -->
    <!-- pool1 -->
    <div class="pools-container">
      <div class="pools-title">Upcoming</div>
      <div class="pools-pools">
      <?php foreach ($proj_upcoming as $proj):?>
        <div>
          <div class="pool-card-1">
            <div class="d-flex align-items-center flex-column flex-lg-row">
              <div class="py-3" style="flex: 1 1 0%">
                <a href="project/<?=strtolower($proj['name']) ?>">
                  <img src="<?=$proj['logo']?>" alt="logo" class="pool-logo" />
                </a>
              </div>
              <div class="px-3 text-center py-3" style="min-width: 200px">
                <p class="pools-subTitle pools-showTitle">Launching</p>
                <p class="pools-propertyText"><?=$proj['date']?></p>
              </div>
              <div class="px-3 text-center py-3">
                <p class="pools-subTitle pools-showTitle">Total Raise</p>
                <p class="pools-propertyText">$<?=price($proj['total_raise'])?></p>
              </div>
              <div class="px-3 text-center py-3">
                <a href="project/<?=strtolower($proj['name']) ?>" class="button button-secondary button-secondary-red-filled">Detail</a>
              </div>
            </div>
          </div>
        </div>
       <?php endforeach; ?>
      </div>
    </div>
    <!-- end of pool1 -->
    <!-- pool2 -->
    <div class="pools-container">
      <div class="pools-title">Ended</div>
      <div class="pools-pools">
      <?php foreach ($proj_ended as $proj):?>
        <div>
          <div class="pool-card-1">
            <div class="d-flex align-items-center flex-column flex-lg-row">
              <div class="py-3" style="flex: 1 1 0%">
                <a href="project/<?=strtolower($proj['name'])?>">
                  <img src="<?=$proj['logo']?>" alt="logo" class="pool-logo" />
                </a>
              </div>
              <div class="px-3 text-center py-3" style="min-width: 200px">
                <p class="pools-subTitle pools-showTitle pools-titleProgress">
                  Progress
                </p>
                <div class="progress-progressContainer">
                  <!-- <div class="progress-rocketContent"></div> -->
                  <div class="progress-progressContent">
                    <div class="progress-progress">
                      <div class="progress-bar" style="width: 80%"></div>
                      <div class="progress-fireball" style="width: 80%">
                        <div class="progress-percent">80%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-3 text-center py-3" style="min-width: 200px">
                <p class="pools-subTitle pools-showTitle">Launching</p>
                <p class="pools-propertyText"><?=$proj['date']?></p>
              </div>
              <div class="px-3 text-center py-3">
                <p class="pools-subTitle pools-showTitle">Total Raise</p>
                <p class="pools-propertyText">$<?=price($proj['total_raise'])?></p>
              </div>
              <div class="px-3 text-center py-3">
                <a href="project/<?=strtolower($proj['name'])?>" class="button button-secondary button-secondary-red-filled">Detail</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
      <a href="#" class="button button-primary pools-moreButton">View all Projects</a>
    </div>
    <!-- end ofpool2 -->