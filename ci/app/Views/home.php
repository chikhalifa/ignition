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
    <!-- <div class="banner">
      <h1 class="orange">Ignition Launchpad</h1>
      <h3 class="banner-slogan">
        <p class="light-grey">
          The most exclusive offerings for the PAID community
        </p>
      </h3>
    </div> -->
    <section id="launch_section" class=" pt-5 pb-5 px-3 px-lg-6 mt-5">
    <div class="bg satellite"></div>
            <div class="bg big_moon"></div>
            <div class="bg red_moon"></div>
            <div class="bg small_moon"></div>
                <div class="row">
                    <div class="col-12 px-lg-4 mt-3">
                        <div class="box_container1 text-center">
                            <h2 class=" colored pb-4 pt-3 mb-md-0 lh-sm">Ignition Launchpad</h2>

                            <p >
                                The most exclusive offerings for the PAID community
                            </p>

                            <div class="button-launch">
                                <a class="hoverAsLink css-1p1sa10" target="_blank" rel="noopener noreferrer"
                                    href="#">
                                    <button
                                        type="button" role="button" class="css-196xe2l"
                                        ><svg stroke="currentColor" fill="currentColor"
                                            stroke-width="0" viewBox="0 0 512 512" class="icon-left css-utowi" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M477.64 38.26a4.75 4.75 0 00-3.55-3.66c-58.57-14.32-193.9 36.71-267.22 110a317 317 0 00-35.63 42.1c-22.61-2-45.22-.33-64.49 8.07C52.38 218.7 36.55 281.14 32.14 308a9.64 9.64 0 0010.55 11.2l87.31-9.63a194.1 194.1 0 001.19 19.7 19.53 19.53 0 005.7 12L170.7 375a19.59 19.59 0 0012 5.7 193.53 193.53 0 0019.59 1.19l-9.58 87.2a9.65 9.65 0 0011.2 10.55c26.81-4.3 89.36-20.13 113.15-74.5 8.4-19.27 10.12-41.77 8.18-64.27a317.66 317.66 0 0042.21-35.64C441 232.05 491.74 99.74 477.64 38.26zM294.07 217.93a48 48 0 1167.86 0 47.95 47.95 0 01-67.86 0z">
                                            </path>
                                            <path
                                                d="M168.4 399.43c-5.48 5.49-14.27 7.63-24.85 9.46-23.77 4.05-44.76-16.49-40.49-40.52 1.63-9.11 6.45-21.88 9.45-24.88a4.37 4.37 0 00-3.65-7.45 60 60 0 00-35.13 17.12C50.22 376.69 48 464 48 464s87.36-2.22 110.87-25.75A59.69 59.69 0 00176 403.09c.37-4.18-4.72-6.67-7.6-3.66z">
                                            </path>
                                        </svg>
                                        Launch your project
                                    </button>
                                </a>
                            </div>

                                        <div class="button-launch mt-3"><a class="hoverAsLink css-1p1sa10" target="_blank" rel="noopener noreferrer"
                                                href="#"><button type="button" role="button" class="css-196xe2l"><svg stroke="currentColor"
                                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="icon-left css-utowi" height="1em"
                                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 22c3.976 0 8-1.374 8-4V6c0-2.626-4.024-4-8-4S4 3.374 4 6v12c0 2.626 4.024 4 8 4zm0-2c-3.722 0-6-1.295-6-2v-1.268C7.541 17.57 9.777 18 12 18s4.459-.43 6-1.268V18c0 .705-2.278 2-6 2zm0-16c3.722 0 6 1.295 6 2s-2.278 2-6 2-6-1.295-6-2 2.278-2 6-2zM6 8.732C7.541 9.57 9.777 10 12 10s4.459-.43 6-1.268V10c0 .705-2.278 2-6 2s-6-1.295-6-2V8.732zm0 4C7.541 13.57 9.777 14 12 14s4.459-.43 6-1.268V14c0 .705-2.278 2-6 2s-6-1.295-6-2v-1.268z">
                                                        </path>
                                                    </svg>Stake your PAID</button></a></div>
                        </div>
                    </div>
                </div>
            </section>
    <!-- end of banner -->
    <!-- pool1 -->
    

            <section id="second_section" class="container pt-2 pb-2 px-3 px-lg-6 mt-6">
                    <div class="row">
                        <div class="col-12 px-lg-6">
                            <div class="intro">
                                <h3 class="text_labels active">UPCOMING</h3>
                                <p class="text_labels"></p>
                                <p class="text_labels">Lottery status</p>
                                <p class="text_labels">Launching</p>
                                <p class="text_labels">Total raise</p>
                            </div>
                            <?php foreach ($proj_upcoming as $proj):?>
                            <div class="mb-3 box_container">
                                <div class="pool_items">
                                 <div class="title_container">
                                        <div class="title">
                                        <a href="project/<?=strtolower($proj['name']) ?>" >
                                            <img src="<?=$proj['logo']?>" alt="PathDAO"></a>
                                        </div>
                                    </div>
                                    <div class="column text-lg-center">
                                        <!-- <p class="column_title">Launching</p>
                                                        <p class="column_desc">a day ago</p> -->
                                    </div>
                                    <div class="column text-lg-center">
                                        <p class="column_title">Lottery Status</p>
                                        <p class="column_desc">Closed</p>
                                    </div>
                
                
                                    <div class="column text-lg-center">
                                        <p class="column_title">Launching</p>
                                        <p class="column_desc"><?=$proj['date']?></p>
                                    </div>
                                    <div class="column text-lg-center">
                                        <p class="column_title">Total raise</p>
                                        <p class="column_desc">$<?=price($proj['total_raise'])?></p>
                                    </div>
                
                                </div>
                
                            </div>
                            <?php endforeach; ?>
                            

                            
                        </div>
                    </div>
            </section>
    
    <!-- end of pool1 -->
    <!-- pool2 -->
   
    
    <!-- end ofpool2 -->

    <section id="second_section" class="container pt-3 pb-3 px-3 px-lg-6 mt-6">
                <div class="row">
                    <div class="col-12 px-lg-6">
                        <div class="intro">
                            <h3 class="text_labels active">ENDED</h3>
                            <p class="text_labels"></p>
                            <p class="text_labels">Progress</p>
                            <p class="text_labels">Launching</p>
                            <p class="text_labels">Total raise</p>
                        </div>

                        <?php foreach ($proj_ended as $proj):?>

                        <div class="mb-3 box_container">
                            <div class="pool_items">
                                <div class="title_container">
                                    <div class="title">
                                    <a href="project/<?=strtolower($proj['name'])?>">
                  <img src="<?=$proj['logo']?>" alt="PathDAO"  />
                </a>
                                    </div>
                                </div>
                                <div class="column text-lg-center">
                                    <!-- <p class="column_title">Launching</p>
                                    <p class="column_desc">a day ago</p> -->
                                </div>
                                <div class="column text-lg-center">
                                    <p class="column_title">Progress</p>
                                     <div class="container">
                                    <p class="percent">100%</p>
                                   
                                    <div class="progress" id="progress_0">
                                        <div class="progress-bar">
                                            
                                            <div class="progressing"></div>
                                            <span class="circle"></span>
                                            
                                            
                                        </div>
                                        <span class="circle" style="position: absolute; top: 75px; right: 190px; transform: translateY(-24px) translateX(-10px);"> 
                                            <svg width="25%" viewBox="0 0 58 52" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-12">
                                                <g  filter="url(#filter0_f)">
                                                    <circle cx="26.2086" cy="26.0735" r="8.5" transform="rotate(-94 26.2086 26.0735)" fill="#DA453D">
                                                    </circle>
                                                </g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M35.3707 13.7772C41.5019 13.3485 46.8386 18.0578 47.2742 24.2861C47.7097 30.5144 43.0803 35.9205 36.949 36.3493C32.0761 36.69 27.6878 33.9229 23.4057 34.2078C24.5025 32.8772 25.7708 31.6979 27.1776 30.7007C22.533 29.0902 20.8248 26.0477 16.0408 24.0267C19.5461 21.2986 23.6963 19.5214 28.0897 18.8671C28.0897 18.8671 24.6671 18.0479 23.3056 15.2105C28.0979 15.4881 31.895 14.0203 35.3707 13.7772V13.7772Z"
                                                    fill="url(#flame_paint0_linear)"></path>
                                                
                                                
                                            </svg>
                                        </span>
                                        
                                    </div>
                                    </div> 
                                </div>
                                

                               
                                <div class="column text-lg-center">
                                    <p class="column_title">Launching</p>
                                    <p class="column_desc"><?=$proj['date']?></p>
                                </div>
                                <div class="column text-lg-center">
                                    <p class="column_title">Total raise</p>
                                    <p class="column_desc">$<?=price($proj['total_raise'])?></p>
                                </div>
                                
                            </div> 
     
                        </div>

                        <?php endforeach; ?>
                        

                        

                    </div>
                </div>
                <div class="offset-md-7 col-sm-4 offset-sm-7 col-lg-2 offset-lg-6">
    <a href="#" class="button button-primary pools-moreButton">View all Projects</a>
    </div>
            </section>