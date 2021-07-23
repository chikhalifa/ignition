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
?>
   <!-- banner -->
   <div class="banner_container__1daO-">
      <h1>
        <p class="white">
          <img src="<?=$proj[0]['logo'] ?>" class="banner_bannerLogo__s_yx1" />
        </p>
      </h1>
      <div class="banner_date__3Y6XG">
        <div class="text-light banner_badge__3szEv"><?=strtoupper($proj[0]['mode']) ?> |</div>
        <div>
          <img src="<?= base_url('images/eth-logo-bg.svg')?>" alt="Eth LOGO" width="22" color="white" height="22" />
        </div>
        <div style="padding-left: 5px">
          <p class="text_white__267X5">Ethereum</p>
        </div>
      </div>
      
    <!-- QR code Ui -->
    <div class="pools-container2">
      <div class="pool-hero__info">
        <h3 class="hash" style="color: #fff; word-wrap: break-word">
        0x9d626c01b71BEaC169803c2Fc14c4e1A81028CB6
        </h3>
        <div class="pool-hero__card" style="background-color: #fff; margin: 5px 0 15px 0">
          <img style="max-width: 200px; max-height: 200px"
            src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=0x9d626c01b71BEaC169803c2Fc14c4e1A81028CB6" />
        </div>

        <div class="actions" id="appp">
          <a style="border-radius: 100px; width: 100%"
            class="button button--primary button--icon-left button-secondary-red-filled" 
            data-target="#walletModal" data-toggle="modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 8.5V15H8.5V8.5H15V7.5H8.5V1H7.5V7.5H1V8.5H7.5Z"
                fill="white"></path>
            </svg>
            Join Pool
          </a>
        </div>
        <div class="update">
          <div class="label" data-target="pool-partial.statusProcessing">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
              <title>ripples</title>
              <g class="nc-icon-wrapper" fill="#727480">
                <g class="nc-loop_ripples-16">
                  <circle fill="#727480" cx="8" cy="8" r="8"
                    transform="translate(1.8290500000000067 1.8290500000000067) scale(0.7713687499999992)"
                    style="opacity: 0.9427374999999983"></circle>
                </g>
                <script>
                  !function () {
                    function t(t) {
                      this.element = t, this.circle
                        = this.element.getElementsByTagName("circle")[0],
                      this.animationId, this.start = null, this.init()
                    } if
                      (!window.requestAnimationFrame) {
                        var i = null;
                      window.requestAnimationFrame = function (t, n) {
                        var e =
                          (new Date).getTime(); i || (i = e); var a = Math.max(0, 16 -
                            (e - i)), r = window.setTimeout(function () { t(e + a) },
                              a); return i = e + a, r
                      }
                    } t.prototype.init = function () {
                      var t = this; this.animationId =
                        window.requestAnimationFrame(t.triggerAnimation.bind(t))
                    },
                      t.prototype.reset = function () {
                        var t = this;
                        window.cancelAnimationFrame(t.animationId)
                      },
                      t.prototype.triggerAnimation = function (t) {
                        var i = this;
                        this.start || (this.start = t); var n = t - this.start, e =
                          Math.min(n / 800, 1); 800 > n || (this.start = this.start +
                            800); var a = .3 + 5 * e / 7; if (.3 + e > 1) (a = .8 + 2 *
                              (e - .7) / 3); var r = 8 * (1 - (a = Math.min(a, 1))), o = 8
                                * (1 - a), s = 10 * e / 7; if (.3 + e > 1) (s = Math.max(1 -
                                  10 / 3 * (e - .7), 0));
                        this.circle.setAttribute("transform", "translate(" + r + " "
                          + o + ") scale(" + a + ")"),
                          this.circle.setAttribute("style", "opacity:" + s + ";"); if
                          (document.documentElement.contains(this.element))
                          window.requestAnimationFrame(i.triggerAnimation.bind(i))
                      };
                    var n =
                      document.getElementsByClassName("nc-loop_ripples-16"), e =
                        []; if (n) for (var a = 0; n.length > a; a++)!function (i) {
                          e.push(new t(n[i]))
                        }(a);
                    document.addEventListener("visibilitychange", function () {
                      "hidden" == document.visibilityState ? e.forEach(function
                        (t) { t.reset() }) : e.forEach(function (t) { t.init() })
                    })
                  }();
                </script>
              </g>
            </svg>
          </div>

          <span class="created_at" style="color: #fff">Published 3 hours ago</span>
        </div>
        <span class="warn-wal" style="margin-top: 1.8em; width: 100%; color: #fff">Connect wallet to join pool and
          access your tokens</span>
      </div>
    </div>
    <!-- end of QR code Ui -->

      <div class="banner_buttons__G_tKr">
        <a class="button button-secondary button-secondary-grey-hover styles_button__Ppr5m text-white" data-target="#walletModal" data-toggle="modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 8.5V15H8.5V8.5H15V7.5H8.5V1H7.5V7.5H1V8.5H7.5Z"
                fill="white"></path>
            </svg> <span style="margin-left: 6px;">Join Lottery</span></a>
        <div></div>
      </div>
    </div>
    <!-- end of banner -->

    <!-- detail -->
    <div class="detail_container___ih35">
      <div class="detail_titleContent__3pIpU">
        <div class="detail_title__2uUnN">Project details</div>
        <div class="detail_socialIcons__u6upg">
          <div class="detail_iconContainer__WfFlI">
            <span><a href="#" target="_blank">
            <svg height="22" width="22" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.311128 8.39709L4.71288 10.5908C4.88313 10.6748 5.08413 10.6688 5.24688 10.5736L9.16488 8.29584L6.79338 10.3973C6.67263 10.5046 6.60363 10.6576 6.60363 10.8188V15.9376C6.60363 16.4776 7.29288 16.7048 7.61613 16.2758L9.51888 13.7461L14.2244 16.4258C14.5544 16.6156 14.9774 16.4251 15.0539 16.0478L17.9886 1.42284C18.0764 0.983344 17.6391 0.624844 17.2326 0.788344L0.357628 7.36959C-0.0953718 7.54659 -0.124622 8.18034 0.311128 8.39709ZM16.6836 2.21034L14.1044 15.0631L9.64563 12.5236C9.40263 12.3848 9.08988 12.4463 8.91738 12.6743L7.72863 14.2546V11.0716L14.1419 5.38959C14.6496 4.94034 14.0661 4.14159 13.4864 4.48209L4.94388 9.44859L1.94988 7.95684L16.6836 2.21034Z" fill="#fff"></path></svg>
          </a></span>
          </div>
          <div class="detail_iconContainer__WfFlI">
            <span><a href="#" target="_blank"><svg height="22" width="22" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.354743 14.696C2.02124 15.7535 3.96074 16.3123 5.96324 16.3123C8.89574 16.3123 11.583 15.1858 13.5307 13.1405C15.3945 11.183 16.4197 8.5528 16.3687 5.88355C17.0752 5.27905 17.9062 4.1248 17.9062 2.9998C17.9062 2.56855 17.4382 2.2948 17.0587 2.51455C16.395 2.90455 15.7897 3.00655 15.1672 2.8318C13.896 1.5928 12.0037 1.3318 10.4092 2.1913C9.01574 2.9413 8.24099 4.3138 8.31074 5.8138C5.95649 5.52655 3.78149 4.34605 2.26499 2.51155C2.01599 2.2123 1.54349 2.24755 1.34549 2.58655C0.614993 3.83755 0.622493 5.2873 1.25774 6.45805C0.955493 6.5113 0.768743 6.76555 0.768743 7.0408C0.768743 8.21755 1.29824 9.29905 2.15099 10.037C1.99199 10.19 1.93949 10.4173 2.00699 10.6198C2.38199 11.7463 3.23099 12.6268 4.29224 13.0678C3.13799 13.619 1.86149 13.8028 0.725243 13.6633C0.137243 13.5838 -0.153007 14.3743 0.354743 14.696ZM6.11699 13.2605C6.53774 12.9373 6.31424 12.2638 5.78624 12.2525C4.85624 12.233 4.00949 11.7748 3.48224 11.054C3.73649 11.0375 3.99974 10.9985 4.25024 10.931C4.82099 10.7765 4.79399 9.95305 4.21424 9.8368C3.16199 9.6253 2.33624 8.8588 2.02649 7.8718C2.30924 7.94155 2.59724 7.98055 2.88449 7.9858C3.45374 7.9888 3.66899 7.25905 3.20474 6.9538C2.15849 6.26455 1.71224 5.0473 2.00774 3.9028C3.83474 5.7538 6.31349 6.86905 8.93549 6.99505C9.31124 7.0183 9.59324 6.66505 9.51074 6.3073C9.15449 4.76305 10.017 3.6808 10.9432 3.18205C11.8597 2.68705 13.3312 2.53255 14.4592 3.71605C14.7945 4.0693 15.9255 4.0828 16.5007 3.94855C16.2427 4.43455 15.846 4.8958 15.4747 5.1553C15.3165 5.2663 15.2257 5.4508 15.2355 5.64355C15.3562 8.1073 14.4382 10.5568 12.717 12.3635C10.983 14.1838 8.58524 15.1865 5.96399 15.1865C4.92149 15.1865 3.89924 15.017 2.93324 14.69C4.08824 14.4665 5.18549 13.9775 6.11699 13.2605Z" fill="#fff"></path></svg></a></span>
          </div>
          <div class="detail_iconContainer__WfFlI">
            <span><a href="#" target="_blank"><svg stroke="#fff" fill="#fff" stroke-width="0" viewBox="0 0 512 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg"><path d="M71.5 142.3c.6-5.9-1.7-11.8-6.1-15.8L20.3 72.1V64h140.2l108.4 237.7L364.2 64h133.7v8.1l-38.6 37c-3.3 2.5-5 6.7-4.3 10.8v272c-.7 4.1 1 8.3 4.3 10.8l37.7 37v8.1H307.3v-8.1l39.1-37.9c3.8-3.8 3.8-5 3.8-10.8V171.2L241.5 447.1h-14.7L100.4 171.2v184.9c-1.1 7.8 1.5 15.6 7 21.2l50.8 61.6v8.1h-144v-8L65 377.3c5.4-5.6 7.9-13.5 6.5-21.2V142.3z"></path></svg></a></span>
          </div>
          <div class="detail_iconContainer__WfFlI">
            <span><a href="#" target="_blank"><svg stroke="#fff" fill="#fff" stroke-width="0" viewBox="0 0 512 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linejoin="round" stroke-width="32" d="M416 221.25V416a48 48 0 01-48 48H144a48 48 0 01-48-48V96a48 48 0 0148-48h98.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 56v120a32 32 0 0032 32h120m-232 80h160m-160 80h160"></path></svg></a></span>
          </div>
          <div class="detail_iconContainer__WfFlI">
            <span><a href="https://www.mozik.cc/" target="_blank"><svg stroke="#fff" fill="#fff" stroke-width="0" viewBox="0 0 496 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg"><path d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path></svg></a></span>
          </div>
        </div>
      </div>
      <div class="detail_detail___S9kc">
      <?=$proj[0]['details'] ?>
      </div>
      <div class="detail_properties__1ldWl">
        <div class="row">
          <div class="col-sm-12 col-md text-left detail_firstColumn__3HPae detail_column__32yJ8">
            <div class="detail_propertyTitle__94UZE">Date</div>
            <div class="detail_propertyValue__1BhHf">
            <?=$proj[0]['date'] ?>
            </div>
          </div>
          <div class="col-sm-12 col-md text-left detail_column__32yJ8">
            <div class="detail_propertyTitle__94UZE">
              Token Distribution Date
            </div>
            <div class="detail_propertyValue__1BhHf">TBD</div>
          </div>
          <div class="col-sm-12 col-md text-left detail_column__32yJ8">
            <div class="detail_propertyTitle__94UZE">Total Raise</div>
            <div class="detail_propertyValue__1BhHf">$<?=$proj[0]['total_raise'] ?></div>
          </div>
          <div class="col-sm-12 col-md text-left detail_lastColumn__6EHHN">
            <div class="detail_propertyTitle__94UZE">
              Additional restricted countries
            </div>
            <p class=""><?=$proj[0]['add_rest_count'] ?></p>
          </div>
        </div>
      </div>
      <div class="detail_subTitle__3cIbF detail_subTitleBordered__1P1OD">
        Token Information
      </div>
      <div class="detail_properties__1ldWl">
        <div class="row">
          <div class="col-sm-12 col-md text-left detail_firstColumn__3HPae detail_column__32yJ8">
            <div class="detail_propertyTitle__94UZE">Name</div>
            <div class="detail_propertyValue__1BhHf"><?=$proj[0]['name'] ?></div>
          </div>
          <div class="col-sm-12 col-md text-left detail_column__32yJ8">
            <div class="detail_propertyTitle__94UZE">Token</div>
            <div class="detail_propertyValue__1BhHf"><?=$proj[0]['token'] ?></div>
          </div>
          <div class="col-sm-12 col-md text-left detail_column__32yJ8">
            <div class="detail_propertyTitle__94UZE">Token Price</div>
            <div class="detail_propertyValue__1BhHf">$<?=price($proj[0]['token_price']) ?></div>
          </div>
          <div class="col-sm-12 col-md text-left detail_lastColumn__6EHHN">
            <div class="detail_propertyTitle__94UZE">Token Contract</div>
            <?=$proj[0]['token_contract'] ?>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md text-left mt-3 detail_column__32yJ8">
            <div class="detail_propertyTitle__94UZE">Vesting</div>
            <div class="detail_propertyValue__1BhHf">
            <?=$proj[0]['vesting'] ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of detail -->