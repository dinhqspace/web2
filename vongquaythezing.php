<?php

include 'TMQ/function.php';

include 'TMQ/head.php';

?>





<div class="c-layout-page">



<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>

<link href="assets/frontend/vongquay/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="assets/frontend/vongquay/css/components.css" id="style_components" rel="stylesheet" type="text/css" />

<link href="assets/frontend/vongquay/css/style.css" rel="stylesheet" type="text/css" />

<style>

    .ui-autocomplete {

            max-height: 500px;

            overflow-y: auto;

            overflow-x: hidden;

        }



        .input-group-addon {

            background-color: #FAFAFA;

        }



        .input-group .input-group-btn > .btn, .input-group .input-group-addon {

            background-color: #FAFAFA;

        }



        .modal {

            text-align: center;

        }



        @media        screen and (min-width: 768px) {

            .modal:before {

                display: inline-block;

                vertical-align: middle;

                content: " ";

                height: 100%;

            }

        }



        @media (min-width: 992px) and (max-width: 1200px) {

            .c-layout-header-fixed.c-layout-header-topbar .c-layout-page {

                margin-top: 245px;

            }

        }



        @media        screen and (max-width: 767px) {

            .modal-dialog:before {

                margin-top: 75px;

                display: inline-block;

                vertical-align: middle;

                content: " ";

                height: 100%;

            }



            .modal-dialog {

                width: 100%;



            }



            .modal-content {

                margin-right: 20px;

            }

        }



        .modal-dialog {

            display: inline-block;

            text-align: left;





        }



        .mfp-wrap {

            z-index: 20000 !important;

        }



        .c-content-overlay .c-overlay-wrapper {

            z-index: 6;

        }



        .z7 {

            z-index: 7 !important;

        }

        

        

        

        

        

    .nickdaquay{position:fixed;

    z-index:9999;

    bottom:170px;

    right:0px;

    max-width: 15%;

    min-width: 120px;

    min-height: 120px;}

    .anhbymanh{position:fixed;

    z-index:9999;

    bottom:80px;

    left:0px;

    max-width: 29%;

    min-height: 20px;}

    .napthebymanh{position:fixed;

    z-index:9999;

    bottom:100px;

    right:0px;

    max-width: 15%;

    min-height: 40px;

    min-width: 100px;

    }

    .flex-list .item {

        width: 50%;

        padding: 0 30px;

    }

        .rotation {

        text-align: center;

    }

    section {

        padding: 30px 0;

    }

        .rotation .play-spin {

        width: 100%;

        position: relative;

        margin: 0 auto;

    }

    .rotation .play-spin .ani-zoom {

        position: absolute;

        display: block;

        width: 110px;

        z-index: 5;

        top: calc(50% - 70px);

        left: calc(50% - 55px);

    }

    .ani-zoom {

        -webkit-transition: all .2s linear;

        -moz-transition: all .2s linear;

        -ms-transition: all .2s linear;

        -o-transition: all .2s linear;

        transition: all .2s linear;

    }

    img {

        max-width: 100%;

    }

    img {

        vertical-align: middle;

    }

    img {

        border: 0;

    }

    .text-center {

        text-align: center;

    }

    li{

        list-style: none;

    }



    .form-notication-bottom {

    position: fixed;

    bottom: 20px;

    left: 10px;

    width: 330px;

    height: auto;

    background-color: #fff;

    border-radius: 40px;

    z-index: 1;

    box-shadow: 2px 2px 10px 2px hsla(0,0%,60%,.2);

    animation: example 8s infinite;

    max-width: calc(90% - 10px);

    overflow: hidden;

}





@keyframes    example{0%{bottom: -100px;}25%{bottom: 20px;} 50%{bottom: 20px;}100%{bottom: -100px;}}



li {

    list-style-type: none

}

.history {

    width: 40% !important;

}

@media    only screen and (max-width: 800px) {

    .c-content-client-logos-slider-1 .item {

        width: 90%;

		margin:auto;

    }

    

    #rotate-play {

        width: 100% !important;

        max-width: 100% !important;

    }

    .rotation .play-spin .ani-zoom img {

        width: 85% !important;

    }

    .history {

        width: 100% !important;

    }

}

.c-content-box.c-size-md{

    padding: 0

}

.pd50{

    padding-top: 50px;

}

.list-roll{

    margin-top: 30px;

    margin-bottom: 30px;

}



@media    screen and (min-width: 800px) {

    .list-roll-inner{

        width: 85%;

        margin-top: 30px;

        max-height: 400px;

        overflow-y: scroll;

        margin:0 auto;

    }

}



@media    screen and (min-width: 1600px) {

    .list-roll-inner{

        width: 85%;

        margin-top: 30px;

        max-height: 600px;

        overflow-y: scroll;

        margin:0 auto;

    }

}

.btn-top{

    display: flex;

    justify-content: center;

    margin-bottom: 30px

}

.btn-top .btn{

    margin-left: 15px;

    margin-right: 15px;

    padding: 6px 20px;

}

.btn-top span{

    font-size: 25px;

}

@media    screen and (max-width: 640px) {

    .btn-top span{

        font-size: 17px;

    }

}

</style>

<meta name="csrf-token" content="9MOtaLcBhwyaRGPJgMjaCZCLGJCIfibfKkEdRP7W">

<div class="c-content-title-1 pd50">

<h3 class="c-center c-font-uppercase c-font-bold">Vòng Quay Thẻ Zing VNG</h3>

<div class="c-line-center c-theme-bg"></div>

</div>

<div class="col-lg-6 col-md-12">

<div class="c-content-box c-size-md c-bg-white">



<div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">

<div class="row row-flex-safari game-list" style="display: flex; flex-wrap: wrap">

<div class="item item-left">

<section class="rotation">

<div class="play-spin">

<a class="ani-zoom" id="start-played1"><img src="https://demo01.thuecodeweb.net/assets/frontend/vongquay/image/IMG_3478.png" alt="Play Center"></a>

<img style="width: 80%;max-width: 80%;opacity: 1;" src="https://demo01.thuecodeweb.net/kimhung/vongquaythezing.jpg" alt="Play" id="rotate-play">

</div>

</section>

</div>

</div>

<div class="table-body scrollbar-inner">

<table class="table table-bordered">

<tbody></tbody>

</table>

</div>

</div>



</div>

</div>

<div class="col-lg-6 col-md-12 list-roll">

<div class="btn-top">

<a href="#" class="thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">

<span>

<i class="la la-cloud-upload"></i>

<span>Thể Lệ</span>

</span>

</a>

<a href="/lich-su-quay-the" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">

<span>

<i class="la la-cloud-upload"></i>

<span>Lịch sử quay</span>

</span>

</a>

</div>

<div class="modal fade" id="theleModal" role="dialog" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-label="Close">

<span aria-hidden="true">×</span>

</button>

<h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ</h4>

</div>

<div class="modal-body" style="font-family: helvetica, arial, sans-serif;">

<p style="text-align:center"><strong>1 Lần Quay = 20k , SỐ TIỀN SẼ TRỪ TIỀN THEO SỐ&nbsp;LẦN QUAY CỦA&nbsp;BẠN&nbsp;</strong></p>

<p style="text-align:center">C&aacute;c phần thưởng như thẻ <strong>Zing&nbsp;ngẫu nhi&ecirc;n</strong> đến thẻ <strong>Zing 500k</strong>&nbsp;<br />

<br />

Ch&uacute;c c&aacute;c bạn c&oacute; những gi&acirc;y ph&uacute;t giải tr&iacute; v&agrave; thư gi&atilde;n c&ugrave;ng v&ograve;ng quay may mắn&nbsp;</p>

</div>

 <div class="modal-footer">

<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

</div>

</div>

</div>

</div>

<script type="text/javascript">

    $(document).ready(function(){

        $(".thele").on("click", function(){

            $("#theleModal").modal('show');

        })

        $(".uytin").on("click", function(){

            $("#uytinModal").modal('show');

        })

    });

</script>

<div class="modal fade" id="uytinModal" role="dialog" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-label="Close">

<span aria-hidden="true">×</span>

</button>

<h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Uy Tín</h4>

</div>

<div class="modal-body" style="font-family: helvetica, arial, sans-serif;">

</div>

<div class="modal-footer">

<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

</div>

</div>

</div>

</div>

<div class="c-content-title-1" style="margin: 0 auto">

<h3 class="c-center c-font-uppercase c-font-bold">LƯỢT QUAY GẦN ĐÂY</h3>

</div>

<div class="list-roll-inner">

<table cellpadding="10" class="table table-striped">

<tbody>

<tr>

<th>Tài khoản</th>

<th>Giải thưởng</th>

<th>Thời gian</th>

</tr>

</tbody>

<tbody>



<?php

$get = $db->query("SELECT * FROM `DL_quaythezing` WHERE `menhgia` != '0' ORDER BY id DESC LIMIT 0,20");

if($get != null){

foreach($get as $ls){

?>			<tr>

<td><?= str_replace( substr(($ls['nguoiquay']), -3), '***', ($ls['nguoiquay']) );?></td>

<td>Thẻ Zing Mệnh Giá <?=number_format($ls['menhgia']);?><sup>VNĐ</sup></td>

<td><?=$ls['date'];?></td></tr>

<?php }

 }else{?>

     <tr>

     <td>Không có lượt quay nào gần đây.</td>

<td>Không có lượt quay nào gần đây.</td>

<td>Không có lượt quay nào gần đây.</td></tr>

<?

 } ?>



</tbody>

</table>

</div>

</div>

<div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-label="Close">

<span aria-hidden="true">×</span>

</button>

<h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>

</div>

<div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;">

àdsafdsafdsaf

</div>

<div class="modal-footer" id="kimhung">

<!--a href="/user/withdrawruby/2?withdraw_type=1" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">Rút quà</a>-->

<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

</div>

</div>

</div>

</div>

<style type="text/css">

        #start-played1{

            cursor: pointer;

        }

        .c-content-client-logos-slider-1 .item{

            width: 85%;

        }

    </style>

<input type="hidden" id="numgift" value="8">

<script type="text/javascript">

        var _0xfb6b=["","\x76\x61\x6C","\x23\x6E\x75\x6D\x67\x69\x66\x74","\x23\x73\x74\x61\x72\x74\x2D\x70\x6C\x61\x79\x65\x64\x31","\x63\x6C\x69\x63\x6B","\x70\x6F\x73\x74","\x2F\x61\x6A\x61\x78\x2F\x76\x6F\x6E\x67\x71\x75\x61\x79\x74\x68\x65\x7A\x69\x6E\x67\x2E\x70\x68\x70","\x4A\x53\x4F\x4E","\x73\x6F\x32\x30\x6B","\x73\x74\x61\x74\x75\x73","\x45\x52\x52\x4F\x52","\x72\x6F\x74\x61\x74\x65\x28\x30\x64\x65\x67\x29","\x63\x73\x73","\x23\x72\x6F\x74\x61\x74\x65\x2D\x70\x6C\x61\x79","\x6D\x73\x67","\x74\x65\x78\x74","\x2E\x63\x6F\x6E\x74\x65\x6E\x74\x2D\x70\x6F\x70\x75\x70","\x73\x68\x6F\x77","\x6D\x6F\x64\x61\x6C","\x23\x6E\x6F\x74\x69\x63\x65\x4D\x6F\x64\x61\x6C","\x4C\x4F\x47\x49\x4E","\x68\x72\x65\x66","\x2F\x6C\x6F\x67\x69\x6E","\x6E\x75\x6D\x72\x6F\x6C\x6C\x62\x79\x6F\x72\x64\x65\x72","\x6E\x75\x6D\x5F\x72\x6F\x6C\x6C\x5F\x72\x65\x6D\x61\x69\x6E","\x70\x6F\x73","\x43\xF3\x20\x6C\u1ED7\x69\x20\x78\u1EA3\x79\x20\x72\x61\x2E\x20\x56\x75\x69\x20\x6C\xF2\x6E\x67\x20\x74\x68\u1EED\x20\x6C\u1EA1\x69\x21","\x61\x6A\x61\x78","\x64\x65\x6C\x65\x67\x61\x74\x65","\x62\x6F\x64\x79","\x72\x6F\x74\x61\x74\x65\x28","\x64\x65\x67\x29","\x4B\u1EBF\x74\x20\x71\x75\u1EA3\x3A\x20","\x6E\x61\x6D\x65","\x2E\x6E\x75\x6D\x2D\x70\x6C\x61\x79\x20\x73\x70\x61\x6E","\x2E\x64\x65\x70\x6F\x73\x69\x74\x2D\x62\x74\x6E","\x68\x69\x64\x65","\x72\x65\x61\x64\x79"];$(document)[_0xfb6b[37]](function(_0x4557x1){var _0x4557x2=0;var _0x4557x3=true;var _0x4557x4=4;var _0x4557x5=_0xfb6b[0];var _0x4557x6=$(_0xfb6b[2])[_0xfb6b[1]]();var _0x4557x7=_0xfb6b[0];var _0x4557x8=0;var _0x4557x9=0;$(_0xfb6b[29])[_0xfb6b[28]](_0xfb6b[3],_0xfb6b[4],function(){if(_0x4557x3){_0x4557x3= false;$[_0xfb6b[27]]({type:_0xfb6b[5],url:_0xfb6b[6],dataType:_0xfb6b[7],data:{type:_0xfb6b[8]},success:function(_0x4557xa){if(_0x4557xa[_0xfb6b[9]]== _0xfb6b[10]){_0x4557x3= true;$(_0xfb6b[13])[_0xfb6b[12]]({"\x74\x72\x61\x6E\x73\x66\x6F\x72\x6D":_0xfb6b[11]});$(_0xfb6b[16])[_0xfb6b[15]](_0x4557xa[_0xfb6b[14]]);$(_0xfb6b[19])[_0xfb6b[18]](_0xfb6b[17]);return};if(_0x4557xa[_0xfb6b[9]]== _0xfb6b[20]){location[_0xfb6b[21]]= _0xfb6b[22];return};_0x4557x2= parseInt(_0x4557xa[_0xfb6b[23]])+ 1;_0x4557x7= _0x4557xa[_0xfb6b[14]];_0x4557x8= _0x4557x7[_0xfb6b[24]];$(_0xfb6b[13])[_0xfb6b[12]]({"\x74\x72\x61\x6E\x73\x66\x6F\x72\x6D":_0xfb6b[11]});_0x4557x9= 0;_0x4557x5= _0x4557x7[_0xfb6b[25]]* (360/ _0x4557x6);_0x4557xb()},error:function(){$(_0xfb6b[16])[_0xfb6b[15]](_0xfb6b[26]);$(_0xfb6b[19])[_0xfb6b[18]](_0xfb6b[17])}})}});function _0x4557xb(){$(_0xfb6b[13])[_0xfb6b[12]]({"\x74\x72\x61\x6E\x73\x66\x6F\x72\x6D":_0xfb6b[30]+ _0x4557x9+ _0xfb6b[31]});if((parseInt(_0x4557x9)- 10)<=  -(((_0x4557x4* 360)+ _0x4557x5))){_0x4557x9= parseInt(_0x4557x9)- 2}else {_0x4557x9= parseInt(_0x4557x9)- 10};if(_0x4557x9>=  -((_0x4557x4* 360)+ _0x4557x5)){requestAnimationFrame(_0x4557xb)}else {_0x4557x3= true;$(_0xfb6b[16])[_0xfb6b[15]](_0xfb6b[32]+ _0x4557x7[_0xfb6b[33]]);$(_0xfb6b[19])[_0xfb6b[18]](_0xfb6b[17]);$(_0xfb6b[34])[_0xfb6b[15]](_0x4557x8);if(_0x4557x8== 0){$(_0xfb6b[35])[_0xfb6b[17]]()}else {$(_0xfb6b[35])[_0xfb6b[36]]()}}}})

    </script>





</div>

<div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>

<div class="modal-content">

&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;https://shopmeowdgame.vn/upload/userfiles/images/meowww/hot.gif&quot; /&gt;CH&amp;Agrave;O MỪNG BẠN ĐẾN VỚI SHOP B&amp;Aacute;N NICK&amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;https://shopmeowdgame.vn/upload/userfiles/images/meowww/hot.gif&quot; /&gt;&lt;/p&gt;

&lt;p style=&quot;text-align:center&quot;&gt;&lt;strong&gt;Cập nhật Tự Động C&amp;aacute;c Dịch Vụ của NPH Garena: &lt;a href=&quot;/mo-ruong-may-man&quot;&gt;Click Xem Ngay&lt;/a&gt;&lt;/strong&gt;&lt;/p&gt;

&lt;p style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;

</div>

</div>

</div>

</div>

<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>

<div class="modal-content">

</div>

</div>

</div>

<script>

    $(document).ready(function () {

        $('.load-modal').each(function (index, elem) {

            $(elem).unbind().click(function (e) {

                e.preventDefault();

                e.preventDefault();

                var curModal = $('#LoadModal');

                curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");

                curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));

            });

        });

    });

</script>

<?php

include 'TMQ/end.php';

?>