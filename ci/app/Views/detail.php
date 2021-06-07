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
          <img src="https://ignition.paidnetwork.com/images/eth-logo-bg.svg" alt="Eth LOGO" width="22" color="white" height="22" />
        </div>
        <div style="padding-left: 5px">
          <p class="text_white__267X5">Ethereum</p>
        </div>
      </div>
      
    <!-- QR code Ui -->
    <div class="pools-container2">
      <div class="pool-hero__info">
        <!-- <div class="image">
          <img style="max-width: 54px; max-height: 54px"
            src="https://polkastarter.app/assets/packs/images/logo/1621317017Pexc1Bln_400x400.jpeg" />
        </div> -->
        <!-- <h2 class="name" style="color: #fff">NiiFi</h2> -->
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
        <a class="button button-secondary button-secondary-grey-hover styles_button__Ppr5m text-white" data-target="#walletModal" data-toggle="modal"><img src="https://ignition.paidnetwork.com/images/join.svg" class="icon" />Join
          Lottery</a>
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
            <span><a href="https://t.me/MozikENOfficial" target="_blank"><img src="https://ignition.paidnetwork.com/images/telegram.svg" /></a></span>
          </div>
          <div class="detail_iconContainer__WfFlI">
            <span><a href="https://twitter.com/MozikMoz" target="_blank"><img src="https://ignition.paidnetwork.com/images/twitter.svg" /></a></span>
          </div>
          <div class="detail_iconContainer__WfFlI">
            <span><a href="https://mozik.medium.com/" target="_blank"><img src="https://ignition.paidnetwork.com/images/medium.svg" /></a></span>
          </div>
          <div class="detail_iconContainer__WfFlI">
            <span><a href="https://www.mozik.cc/file/whitepaper.pdf" target="_blank"><img
                  src="https://ignition.paidnetwork.com/images/document.svg" /></a></span>
          </div>
          <div class="detail_iconContainer__WfFlI">
            <span><a href="https://www.mozik.cc/" target="_blank"><img src="https://ignition.paidnetwork.com/images/website.svg" /></a></span>
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