@extends('show.mainnew')

@section('title')
    <title>{{$title}}</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
    <meta name="description" content="石家庄淘车乐是河北省最大的二手车交易平台,二手车源信息最真实,最值得信赖的网上二手车交易市场,提供二手车评估,二手车报价,二手车交易等相关服务,买卖二手车就上淘车乐">
@endsection

@section('head_content')
    <!-- 首页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/content.css')}}">
    <!-- 轮播图样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/swipeslider.css')}}">
    <!-- 首页脚本  -->
    <!-- <script type="text/javascript" src="../js/index.js"></script> -->
    <!-- <script type="text/javascript" src="{{URL::asset('js/tcl/home/index.js')}}"></script> -->


@endsection


@section('current_city_name')
    {{$show_city_name}}
@endsection

@section('content')
<div class="index-area">

    <!--banner显示 s-->
    <div class="sel-op clearfix">
    <div class="sel-area fl">
        <div class="buy-tit">免费卖车<span><em class="orgtext">平均7天卖出</em>已有<em class="clue_num">6841277</em>人提交了申请</span></div>
        <div class="sell-car-box" data-value-domain="sjz">
            <form action="" class="clearfix" data-role="sell_form">
                <input type="text" class="sell-phone-input" data-role="sellPhone" placeholder="请输入手机号码">
                <button class="sell-phone-submit" data-clue-entry="03" data-gzlog="tracking_type=click&eventid=0210050000000013" >我要卖车</button>
                <input type="hidden" name="source_type" value="">
            </form>
            <p class="sell-phone-error"></p>
            <div class="submit-suc" style="display: none">
                <i></i>
                提交成功！
                <a href="javascript:void(0)" data-role="go_back">返回</a>
            </div>
        </div>
        <div class="buy-tit">我要买车<span>1年2万公里质保</span></div>
        <div class="sx">
            <div class="sx-pinpai js_brands_index">
                <div class="dt">品牌</div>
                <div class="dd" id="baidu_alog">
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                <a href="/sjz/dazhong/" class="i-dazhong" title="大众二手车">大众</a>
                </div>
            </div>

            <div class="sx-price">
                <div class="dt">价格</div>
                <div class="dd">
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                    <a href="/sjz/buy/p3/" title='5万以下二手车'>5万以下</a>
                </div>
            </div>
            <div class="sx-chexing">
                <div class="dt">车型</div>
                <div class="dd">
                    <a href="/sjz/buy/h1/" class="x-sanxiang" title="二手SUV">轿车</a>
                    <a href="/sjz/buy/h2/" class="x-suv" title="二手SUV">SUV</a>
                    <a href="/sjz/buy/h3/" class="x-mpv" title="二手SUV">MPV</a>
                    <a href="/sjz/buy/h4/" class="x-paoche" title="二手SUV">跑车</a>
                </div>
            </div>
        </div>
    </div>
    <div class="op-area fr">
        <!--banner -->
        <div class="op-slide" data-widget="app/ms_v2/widget/slide.js" data-slide-fn="app/ms_v2/self_service/page/promotion_index.js#slideFn" data-interval="3000">
            <!-- <div data-role="list"> -->
                <div class="slide-li" data-role="item">
                    <figure id="full_feature" class="swipslider" style="width:860px;height:305px;margin: 0px;padding:0px;">
                        <ul class="sw-slides">
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/banner1.png')}}" alt="Summer beach concept">
                            </li>
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/banner2.png')}}" alt="Lang from Yie Ar Kung Fu">
                            </li>
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/banner3.png')}}" alt="Tiny Tina">
                            </li>
                            <li class="sw-slide">
                                <img src="{{URL::asset('newShow/images/banner4.png')}}" alt="Tiny Tina from Borderlands 2">
                            </li>
                        </ul>
                    </figure>
                </div>
                <!-- <div class="slide-li" data-role="item" style="background: url('{{URL::asset('css/tcl/show/images/banner2.jpg')}}') center center no-repeat;" >
                    <a  href="http://www.guazi.com/zq_article/4248/" class="ban_a"></a>
                </div>
                <div class="slide-li" data-role="item" style="background: url('{{URL::asset('css/tcl/show/images/banner3.png')}}') center center no-repeat;" >
                    <a  href="http://www.guazi.com/zq_article/4248/" class="ban_a"></a>
                </div>
                <div class="slide-li" data-role="item" style="background: url('{{URL::asset('css/tcl/show/images/banner4.jpg')}}') center center no-repeat;" >
                    <a  href="http://www.guazi.com/zq_article/4248/" class="ban_a"></a>
                </div> -->
            <!-- </div> -->

            <!-- <div class="slide-ctrl">
                <span class="on active" data-role="point" data-slide-to="0"></span>
                <span class="on " data-role="point" data-slide-to="1"></span>
                <span class="on " data-role="point" data-slide-to="2"></span>
                <span class="on " data-role="point" data-slide-to="3"></span>
            </div> -->
        </div>

        <!--三个运营位 -->
        <div class="op-img">
            <ul class="clearfix">
                                    <li>
                                                    <a data-gzlog="tracking_type=click&eventid=0140130000000029&url=jr" class="" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub1_fenqi_c' href="https://jr.guazi.com/sjz/">
                                <img src="picture/62c09f0e69174554b69073529a2c7115.png@base@tag=imgscale&w=284&h=98&q=88" alt="瓜子分期">
                            </a>
                                            </li>
                                <li>
                                            <a baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub2_c' data-gzlog="tracking_type=click&eventid=0140130000000029&url=t3" href="https://www.guazi.com/zq_article/t1/">
                            <img src="picture/c032a02080c56a972515543396d825fd.png@base@tag=imgscale&w=284&h=98&q=88" alt="">
                        </a>
                                    </li>
                <li>
                                            <a baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub3_c' data-gzlog="tracking_type=click&eventid=0140130000000029&url=t1" href="https://www.guazi.com/zq_article/t3/">
                            <img src="picture/b393d738df428ef5d6f1827af039f101.png@base@tag=imgscale&w=284&h=98&q=88" alt="">
                        </a>
                                    </li>
            </ul>
        </div>
    </div>
</div>
    <!--banner显示 e -->

    <!--服务介绍 s-->
    <ul class="ser-gua clearfix">
    <li><i class="ser-1"></i>100%个人二手车</li>
    <li><i class="ser-2"></i>259项全面检测</li>
    <li><i class="ser-3"></i>14天可退</li>
    <li><i class="ser-4"></i>1年2万公里质保</li>
</ul>    <!--服务介绍 e -->

    <!--今日超值 s-->
        <!--今日超值 e -->

    <!--首页帖子列表 s-->
    <div class="w
     indexTab">
    <div class="title clearfix">
        <a rel="nofollow" baidu_alog="index_tabselect&click&pc_index_tabSelect_right_morecar_c" class="all-car" href="/sjz/buy/" gjalog="100000000051000100000010">查看全部&gt;&gt;</a>
          <span class="ti-left">
            <span>热门好车</span>
                                <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_guesslike_h  "
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000564000100000001" eventid="0080310000000030" >猜您喜欢</a>
                                              <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_new_sale_h "
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000967000100000010" eventid="0080140000000032" >最新上架</a>
                                              <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_jishou_h"
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000968000100000010" eventid="0080150000000156" >降价急售</a>
                                              <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_zhunxin_h"
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000970000100000010" eventid="0080320000000036" >准新车</a>
                                              <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_lianshou_h"
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000969000100000010" eventid="0080330000000038" >练手车</a>
                                              <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_suv_h"
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000971000100000010" eventid="0080340000000040">SUV</a>
                        </span>
    </div>

    <!--帖子列表 -->
    <div data-role="showList">
                    <div class="list" style="
    display:block;">
    <ul class="list-bigimg clearfix">
                                    <li clue_id="7357501">

                    <div class="list-infoBox">
                        <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=7357501@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="青年莲花莲花L5 2011款 三厢 1.6L 自动风尚版" target="_blank" class="imgtype" href="/sjz/2c0b2fbc38ed997cx.htm" gjalog="100000000050000100000010">
                            <img width="290" height="194" src="picture/c39dd29eb64ce3fbe5a95149c690cc7b.jpg@base@tag=imgscale&w=290&h=194&c=1&m=2&q=88" alt="青年莲花莲花L5 2011款 三厢 1.6L 自动风尚版">
                                                                                                                </a>
                                                <p class="infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=7357501@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="青年莲花莲花L5 2011款 三厢 1.6L 自动风尚版" href="/sjz/2c0b2fbc38ed997cx.htm" target="_blank" class="info-title" gjalog="100000000050000100000010">青年莲花莲花L5 2011款 三厢 1.6L 自动风尚版</a>
                        </p>
                        <p class="fc-gray">
                                                        <span class="">2014年1月上牌</span>                            <em class="shuxian">|</em>                            行驶4.9万公里                        </p>
                        <p class="priType-s">
                                                                                                      <span>
                    <i class="fc-org priType">
                        4.20万
                    </i>
                  </span>
                                                            <s>11.92万</s>
                                                    </p>
                    </div>
                </li>
                            <li clue_id="8149861">

                    <div class="list-infoBox">
                        <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=8149861@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="大众捷达 2013款 1.6L 手动舒适型" target="_blank" class="imgtype" href="/sjz/86e48143ad5de4fex.htm" gjalog="100000000050000100000010">
                            <img width="290" height="194" src="picture/71af56eaa202cafd8823f100b3ffa33c.jpg@base@tag=imgscale&w=290&h=194&c=1&m=2&q=88" alt="大众捷达 2013款 1.6L 手动舒适型">
                                                                                                                </a>
                                                <p class="infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=8149861@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="大众捷达 2013款 1.6L 手动舒适型" href="/sjz/86e48143ad5de4fex.htm" target="_blank" class="info-title" gjalog="100000000050000100000010">大众捷达 2013款 1.6L 手动舒适型</a>
                        </p>
                        <p class="fc-gray">
                                                        <span class="">2014年8月上牌</span>                            <em class="shuxian">|</em>                            行驶2.7万公里                        </p>
                        <p class="priType-s">
                                                                                                      <span>
                    <i class="fc-org priType">
                        6.08万
                    </i>
                  </span>
                                                            <s>10.67万</s>
                                                    </p>
                    </div>
                </li>
                            <li clue_id="6671510">

                    <div class="list-infoBox">
                        <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=6671510@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="大众途观 2010款 1.8TSI 自动四驱菁英版" target="_blank" class="imgtype" href="/sjz/315e4e431d51989ax.htm" gjalog="100000000050000100000010">
                            <img width="290" height="194" src="picture/qn16113017205914766fca1d34f4958d44ddcff589765a.jpg" alt="大众途观 2010款 1.8TSI 自动四驱菁英版">
                                                                                                                </a>
                                                <p class="infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=6671510@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="大众途观 2010款 1.8TSI 自动四驱菁英版" href="/sjz/315e4e431d51989ax.htm" target="_blank" class="info-title" gjalog="100000000050000100000010">大众途观 2010款 1.8TSI 自动四驱菁英版</a>
                        </p>
                        <p class="fc-gray">
                                                        <span class="">2011年10月上牌</span>                            <em class="shuxian">|</em>                            行驶9.3万公里                        </p>
                        <p class="priType-s">
                                                                                                      <span>
                    <i class="fc-org priType">
                        14.49万
                    </i>
                  </span>
                                                            <s>28.96万</s>
                                                    </p>
                    </div>
                </li>
                            <li clue_id="7844791">

                    <div class="list-infoBox">
                        <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=7844791@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="思铭 2012款 1.8L 自动" target="_blank" class="imgtype" href="/sjz/35053ecb8dce8296x.htm" gjalog="100000000050000100000010">
                            <img width="290" height="194" src="picture/qn1701141130376533ec220b677ba10da9d5e61bb602a8.jpg" alt="思铭 2012款 1.8L 自动">
                                                                                                                </a>
                                                <p class="infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=7844791@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="思铭 2012款 1.8L 自动" href="/sjz/35053ecb8dce8296x.htm" target="_blank" class="info-title" gjalog="100000000050000100000010">思铭 2012款 1.8L 自动</a>
                        </p>
                        <p class="fc-gray">
                                                        <span class="">2014年12月上牌</span>                            <em class="shuxian">|</em>                            行驶4万公里                        </p>
                        <p class="priType-s">
                                                                                                      <span>
                    <i class="fc-org priType">
                        7.00万
                    </i>
                  </span>
                                                            <s>13.00万</s>
                                                    </p>
                    </div>
                </li>
                            <li clue_id="6370615">

                    <div class="list-infoBox">
                        <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=6370615@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="铃木天语 SX4 2010款 两厢 1.6L 手动冠军限量版" target="_blank" class="imgtype" href="/sjz/f48033b4cc592995x.htm" gjalog="100000000050000100000010">
                            <img width="290" height="194" src="picture/qn161119090241d51610c90dd262faeac2c3be112ba6f9.jpg" alt="铃木天语 SX4 2010款 两厢 1.6L 手动冠军限量版">
                                                                                                                </a>
                                                <p class="infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=6370615@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="铃木天语 SX4 2010款 两厢 1.6L 手动冠军限量版" href="/sjz/f48033b4cc592995x.htm" target="_blank" class="info-title" gjalog="100000000050000100000010">铃木天语 SX4 2010款 两厢 1.6L 手动冠军限量版</a>
                        </p>
                        <p class="fc-gray">
                                                        <span class="">2010年5月上牌</span>                            <em class="shuxian">|</em>                            行驶8.1万公里                        </p>
                        <p class="priType-s">
                                                                                                      <span>
                    <i class="fc-org priType">
                        4.20万
                    </i>
                  </span>
                                                            <s>12.03万</s>
                                                    </p>
                    </div>
                </li>
                            <li clue_id="114798">

                    <div class="list-infoBox">
                        <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=114798@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="大众宝来 2011款 1.6L 自动时尚型" target="_blank" class="imgtype" href="/sjz/c80e0eb880be0de6x.htm" gjalog="100000000050000100000010">
                            <img width="290" height="194" src="picture/cgehofvvuda9fx4caad12qxlb50649_290-194c_8-1.jpg" alt="大众宝来 2011款 1.6L 自动时尚型">
                                                                                                                </a>
                                                <p class="infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=114798@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="大众宝来 2011款 1.6L 自动时尚型" href="/sjz/c80e0eb880be0de6x.htm" target="_blank" class="info-title" gjalog="100000000050000100000010">大众宝来 2011款 1.6L 自动时尚型</a>
                        </p>
                        <p class="fc-gray">
                                                        <span class="">2011年1月上牌</span>                            <em class="shuxian">|</em>                            行驶6.2万公里                        </p>
                        <p class="priType-s">
                                                                                                      <span>
                    <i class="fc-org priType">
                        6.50万
                    </i>
                  </span>
                                                            <s>13.00万</s>
                                                    </p>
                    </div>
                </li>
                            <li clue_id="8031335">

                    <div class="list-infoBox">
                        <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=8031335@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="长城M2 2010款 1.5L 手动豪华型" target="_blank" class="imgtype" href="/sjz/c18a9b2e91ce314cx.htm" gjalog="100000000050000100000010">
                            <img width="290" height="194" src="picture/c32177f6252680516e3518020832b863.jpg@base@tag=imgscale&w=290&h=194&c=1&m=2&q=88" alt="长城M2 2010款 1.5L 手动豪华型">
                                                                                                                </a>
                                                <p class="infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=8031335@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="长城M2 2010款 1.5L 手动豪华型" href="/sjz/c18a9b2e91ce314cx.htm" target="_blank" class="info-title" gjalog="100000000050000100000010">长城M2 2010款 1.5L 手动豪华型</a>
                        </p>
                        <p class="fc-gray">
                                                        <span class="">2010年9月上牌</span>                            <em class="shuxian">|</em>                            行驶5万公里                        </p>
                        <p class="priType-s">
                                                                                                      <span>
                    <i class="fc-org priType">
                        2.59万
                    </i>
                  </span>
                                                            <s>7.15万</s>
                                                    </p>
                    </div>
                </li>
                            <li clue_id="6971380">

                    <div class="list-infoBox">
                        <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=6971380@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="福特福克斯 2012款 两厢 2.0L 自动豪华运动型" target="_blank" class="imgtype" href="/sjz/980cd0b7a8fc2bc6x.htm" gjalog="100000000050000100000010">
                            <img width="290" height="194" src="picture/qn1612131148492269335aef71cd00078484f4c9c960b9.jpg" alt="福特福克斯 2012款 两厢 2.0L 自动豪华运动型">
                                                                                                                </a>
                                                <p class="infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080310000000030&carid=6971380@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_post_c' title="福特福克斯 2012款 两厢 2.0L 自动豪华运动型" href="/sjz/980cd0b7a8fc2bc6x.htm" target="_blank" class="info-title" gjalog="100000000050000100000010">福特福克斯 2012款 两厢 2.0L 自动豪华运动型</a>
                        </p>
                        <p class="fc-gray">
                                                        <span class="">2013年9月上牌</span>                            <em class="shuxian">|</em>                            行驶4万公里                        </p>
                        <p class="priType-s">
                                                                                                      <span>
                    <i class="fc-org priType">
                        9.00万
                    </i>
                  </span>
                                                            <s>17.68万</s>
                                                    </p>
                    </div>
                </li>
                        </ul>
    <div class="all-car-link">
        <a data-gzlog='tracking_type=click&eventid=0080310000000031'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_guesslike_more_c' href="/sjz/buy">更多猜你喜欢</a>
    </div>
</div>
                    <div class="list" style="
    display:block;        ">
        <ul class="list-bigimg clearfix">
                                                <li clue_id="8217032">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8217032@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="丰田汉兰达 2009款 3.5L 四驱7座豪华版" target="_blank" class="imgtype" href="/sjz/f1ee9b5459121a46x.htm" >
                                <img width="290" height="194" src="picture/7e41a7f44ca63a418b80321d94c6802d.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="丰田汉兰达 2009款 3.5L 四驱7座豪华版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8217032@0" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8217032@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="丰田汉兰达 2009款 3.5L 四驱7座豪华版" href="/sjz/f1ee9b5459121a46x.htm" target="_blank" class="info-title" >丰田汉兰达 2009款 3.5L 四驱7座豪华版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2009年12月上牌</span>                                <em class="shuxian">|</em>                                行驶19.1万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    16.50万
                                </i>
                              </span>
                                                                    <s>41.23万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8226433">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8226433@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="比亚迪S6 2013款 劲悦版 2.0L 手动尊贵型 5座" target="_blank" class="imgtype" href="/sjz/6c38d713d7c61debx.htm" >
                                <img width="290" height="194" src="picture/8b49343c85202da2b504db7e5d89a527.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="比亚迪S6 2013款 劲悦版 2.0L 手动尊贵型 5座">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8226433@1" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8226433@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="比亚迪S6 2013款 劲悦版 2.0L 手动尊贵型 5座" href="/sjz/6c38d713d7c61debx.htm" target="_blank" class="info-title" >比亚迪S6 2013款 劲悦版 2.0L 手动尊贵型 5座</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年9月上牌</span>                                <em class="shuxian">|</em>                                行驶4.4万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    5.60万
                                </i>
                              </span>
                                                                    <s>10.84万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8239814">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8239814@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="奥迪Q7 2013款 35 TFSI 进取型(进口)" target="_blank" class="imgtype" href="/sjz/90acd7634692688bx.htm" >
                                <img width="290" height="194" src="picture/6d60f72c68514d592c3b547a86b63916.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奥迪Q7 2013款 35 TFSI 进取型(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8239814@2" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8239814@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="奥迪Q7 2013款 35 TFSI 进取型(进口)" href="/sjz/90acd7634692688bx.htm" target="_blank" class="info-title" >奥迪Q7 2013款 35 TFSI 进取型(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年8月上牌</span>                                <em class="shuxian">|</em>                                行驶9.1万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    43.88万
                                </i>
                              </span>
                                                                    <s>89.12万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8234101">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8234101@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="雪佛兰科鲁兹 2015款 1.5L 经典 SL MT" target="_blank" class="imgtype" href="/sjz/de4966c1380a3b21x.htm" >
                                <img width="290" height="194" src="picture/74f62a267fdbf0fb0055910dc01872c4.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="雪佛兰科鲁兹 2015款 1.5L 经典 SL MT">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8234101@3" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8234101@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="雪佛兰科鲁兹 2015款 1.5L 经典 SL MT" href="/sjz/de4966c1380a3b21x.htm" target="_blank" class="info-title" >雪佛兰科鲁兹 2015款 1.5L 经典 SL MT</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年12月上牌</span>                                <em class="shuxian">|</em>                                行驶2.3万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    7.50万
                                </i>
                              </span>
                                                                    <s>9.76万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8235389">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8235389@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="奇瑞风云2 2013款 两厢 1.5L 手动锐意版" target="_blank" class="imgtype" href="/sjz/823c78108c4f343cx.htm" >
                                <img width="290" height="194" src="picture/9f362d5b4f09fad336f84fd9def5270c.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奇瑞风云2 2013款 两厢 1.5L 手动锐意版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8235389@4" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8235389@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="奇瑞风云2 2013款 两厢 1.5L 手动锐意版" href="/sjz/823c78108c4f343cx.htm" target="_blank" class="info-title" >奇瑞风云2 2013款 两厢 1.5L 手动锐意版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年2月上牌</span>                                <em class="shuxian">|</em>                                行驶2.2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    3.70万
                                </i>
                              </span>
                                                                    <s>5.59万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8178859">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8178859@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="大众帕萨特 2009款 1.8T 自动尊品型" target="_blank" class="imgtype" href="/sjz/47bde5beef9a9205x.htm" >
                                <img width="290" height="194" src="picture/e4e6b5710bf2dfde483f968c112bd50c.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众帕萨特 2009款 1.8T 自动尊品型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8178859@5" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8178859@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="大众帕萨特 2009款 1.8T 自动尊品型" href="/sjz/47bde5beef9a9205x.htm" target="_blank" class="info-title" >大众帕萨特 2009款 1.8T 自动尊品型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年2月上牌</span>                                <em class="shuxian">|</em>                                行驶18.3万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    8.60万
                                </i>
                              </span>
                                                                    <s>23.42万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8045447">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8045447@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="斯柯达Yeti 2016款 1.4TSI DSG前行版" target="_blank" class="imgtype" href="/sjz/6d469cea1f58ca49x.htm" >
                                <img width="290" height="194" src="picture/c0ecf79f08c2ee453ceace43be126604.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="斯柯达Yeti 2016款 1.4TSI DSG前行版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8045447@6" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8045447@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="斯柯达Yeti 2016款 1.4TSI DSG前行版" href="/sjz/6d469cea1f58ca49x.htm" target="_blank" class="info-title" >斯柯达Yeti 2016款 1.4TSI DSG前行版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年2月上牌</span>                                <em class="shuxian">|</em>                                行驶1.8万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    11.97万
                                </i>
                              </span>
                                                                    <s>16.26万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8180003">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8180003@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="比亚迪F0 2012款 1.0L 悦酷型" target="_blank" class="imgtype" href="/sjz/cac3f016c92ce157x.htm" >
                                <img width="290" height="194" src="picture/8d90dc9349ee1f283c78d6f319d9b58a.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="比亚迪F0 2012款 1.0L 悦酷型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8180003@7" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8180003@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="比亚迪F0 2012款 1.0L 悦酷型" href="/sjz/cac3f016c92ce157x.htm" target="_blank" class="info-title" >比亚迪F0 2012款 1.0L 悦酷型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年4月上牌</span>                                <em class="shuxian">|</em>                                行驶3.2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    1.96万
                                </i>
                              </span>
                                                                    <s>4.44万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8133198">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8133198@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="福特蒙迪欧 2010款 2.3L 豪华型" target="_blank" class="imgtype" href="/sjz/3029e7d70166943ax.htm" >
                                <img width="290" height="194" src="picture/fe2a1e317df512b07107798a93464fc0.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="福特蒙迪欧 2010款 2.3L 豪华型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8133198@8" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8133198@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="福特蒙迪欧 2010款 2.3L 豪华型" href="/sjz/3029e7d70166943ax.htm" target="_blank" class="info-title" >福特蒙迪欧 2010款 2.3L 豪华型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2011年1月上牌</span>                                <em class="shuxian">|</em>                                行驶10.7万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    7.70万
                                </i>
                              </span>
                                                                    <s>21.69万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8234249">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8234249@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="大众速腾 2014款 1.6L 自动舒适型" target="_blank" class="imgtype" href="/sjz/a72bb58e5cb3d39fx.htm" >
                                <img width="290" height="194" src="picture/bcbb4bd3f09001e566fbf6aaf99560e7.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众速腾 2014款 1.6L 自动舒适型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8234249@9" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8234249@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="大众速腾 2014款 1.6L 自动舒适型" href="/sjz/a72bb58e5cb3d39fx.htm" target="_blank" class="info-title" >大众速腾 2014款 1.6L 自动舒适型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年10月上牌</span>                                <em class="shuxian">|</em>                                行驶4.7万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    10.18万
                                </i>
                              </span>
                                                                    <s>16.37万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8227521">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8227521@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="日产骐达 2011款 1.6L 手动舒适型" target="_blank" class="imgtype" href="/sjz/628c80b399c87541x.htm" >
                                <img width="290" height="194" src="picture/6b43a56b982032a0b919278c6d21d62a.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="日产骐达 2011款 1.6L 手动舒适型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8227521@10" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8227521@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="日产骐达 2011款 1.6L 手动舒适型" href="/sjz/628c80b399c87541x.htm" target="_blank" class="info-title" >日产骐达 2011款 1.6L 手动舒适型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年3月上牌</span>                                <em class="shuxian">|</em>                                行驶5万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    6.80万
                                </i>
                              </span>
                                                                    <s>11.43万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8233905">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8233905@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="五菱之光 2010款 1.0L立业版" target="_blank" class="imgtype" href="/sjz/e596a9cac3d33062x.htm" >
                                <img width="290" height="194" src="picture/3e687c4807b36c1e6d09068c3d396a0f.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="五菱之光 2010款 1.0L立业版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8233905@11" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8233905@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="五菱之光 2010款 1.0L立业版" href="/sjz/e596a9cac3d33062x.htm" target="_blank" class="info-title" >五菱之光 2010款 1.0L立业版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2011年10月上牌</span>                                <em class="shuxian">|</em>                                行驶5.8万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    1.80万
                                </i>
                              </span>
                                                                    <s>3.23万</s>
                                                            </p>
                        </div>
                    </li>
                                    </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080140000000033'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_more_c' href="/sjz/buy">更多最新上架</a>
        </div>
    </div>
            <div class="list" style="
    display:block;        ">
        <ul class="list-bigimg clearfix">
                                                <li clue_id="8217907">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8217907@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="长安商用长安星光4500 长安星光4500   1.3L手动五座" target="_blank" class="imgtype" href="/sjz/237b96efd5d9c942x.htm" >
                                <img width="290" height="194" src="picture/475d88e965303fa95b0c8a0b89e5e55d.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安商用长安星光4500 长安星光4500   1.3L手动五座">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>3000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8217907@0" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8217907@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="长安商用长安星光4500 长安星光4500   1.3L手动五座" href="/sjz/237b96efd5d9c942x.htm" target="_blank" class="info-title" >长安商用长安星光4500 长安星光4500   1.3L手动五座</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年7月上牌</span>                                <em class="shuxian">|</em>                                行驶3万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    2.00万
                                </i>
                              </span>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8000507">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8000507@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="长安商用欧力威 2014款 1.4L 自动豪华型" target="_blank" class="imgtype" href="/sjz/9c2960336225c689x.htm" >
                                <img width="290" height="194" src="picture/66865a16cd8c264a6da2c7418ef41547.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安商用欧力威 2014款 1.4L 自动豪华型">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>1000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8000507@1" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8000507@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="长安商用欧力威 2014款 1.4L 自动豪华型" href="/sjz/9c2960336225c689x.htm" target="_blank" class="info-title" >长安商用欧力威 2014款 1.4L 自动豪华型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年8月上牌</span>                                <em class="shuxian">|</em>                                行驶1.5万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.50万
                                </i>
                              </span>
                                                                    <s>6.61万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8032194">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8032194@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="大众POLO 2014款 1.6L 自动舒适版" target="_blank" class="imgtype" href="/sjz/324077eb217e48ccx.htm" >
                                <img width="290" height="194" src="picture/5616486b8b0f4e17a9a6a04b31e10c39.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众POLO 2014款 1.6L 自动舒适版">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>800元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8032194@2" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8032194@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="大众POLO 2014款 1.6L 自动舒适版" href="/sjz/324077eb217e48ccx.htm" target="_blank" class="info-title" >大众POLO 2014款 1.6L 自动舒适版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年3月上牌</span>                                <em class="shuxian">|</em>                                行驶2.2万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    8.40万
                                </i>
                              </span>
                                                                    <s>11.28万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8086786">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8086786@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="吉利帝豪 2014款 三厢 1.5L 手动时尚型" target="_blank" class="imgtype" href="/sjz/b2bd7ef57a3fe583x.htm" >
                                <img width="290" height="194" src="picture/003040d95b95a76178cca0e623a42718.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="吉利帝豪 2014款 三厢 1.5L 手动时尚型">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>1100元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8086786@3" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8086786@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="吉利帝豪 2014款 三厢 1.5L 手动时尚型" href="/sjz/b2bd7ef57a3fe583x.htm" target="_blank" class="info-title" >吉利帝豪 2014款 三厢 1.5L 手动时尚型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年5月上牌</span>                                <em class="shuxian">|</em>                                行驶2万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.88万
                                </i>
                              </span>
                                                                    <s>7.58万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8070359">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8070359@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="沃尔沃S40 2011款 2.0L 自动智尚版" target="_blank" class="imgtype" href="/sjz/fb22f9a3482e1ec4x.htm" >
                                <img width="290" height="194" src="picture/1c403d92e0fefd26f17655daa73e871a.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="沃尔沃S40 2011款 2.0L 自动智尚版">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>1000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8070359@4" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8070359@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="沃尔沃S40 2011款 2.0L 自动智尚版" href="/sjz/fb22f9a3482e1ec4x.htm" target="_blank" class="info-title" >沃尔沃S40 2011款 2.0L 自动智尚版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2011年5月上牌</span>                                <em class="shuxian">|</em>                                行驶5.1万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    9.89万
                                </i>
                              </span>
                                                                    <s>29.09万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8080221">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8080221@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="长安商用长安星光4500   手动 1.5。CNG版" target="_blank" class="imgtype" href="/sjz/6a9e9f6639011051x.htm" >
                                <img width="290" height="194" src="picture/99f883554516f1c819dddb2a93102adc.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安商用长安星光4500   手动 1.5。CNG版">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>2400元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8080221@5" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8080221@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="长安商用长安星光4500   手动 1.5。CNG版" href="/sjz/6a9e9f6639011051x.htm" target="_blank" class="info-title" >长安商用长安星光4500   手动 1.5。CNG版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年12月上牌</span>                                <em class="shuxian">|</em>                                行驶1.4万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.55万
                                </i>
                              </span>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8066399">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8066399@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="吉利远景 2015款 1.5L 手动精英型" target="_blank" class="imgtype" href="/sjz/651fc6d27196bed9x.htm" >
                                <img width="290" height="194" src="picture/b11905fadc1ef11b53824305fad0def8.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="吉利远景 2015款 1.5L 手动精英型">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>2000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8066399@6" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8066399@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="吉利远景 2015款 1.5L 手动精英型" href="/sjz/651fc6d27196bed9x.htm" target="_blank" class="info-title" >吉利远景 2015款 1.5L 手动精英型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年2月上牌</span>                                <em class="shuxian">|</em>                                行驶2.7万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.30万
                                </i>
                              </span>
                                                                    <s>6.28万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="7902846">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7902846@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="中华V3 2015款 1.5L 手动智能型" target="_blank" class="imgtype" href="/sjz/b62c1cbc22101238x.htm" >
                                <img width="290" height="194" src="picture/c8a32620d879d3f17a6434ab6079b728.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="中华V3 2015款 1.5L 手动智能型">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>1500元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7902846@7" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7902846@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="中华V3 2015款 1.5L 手动智能型" href="/sjz/b62c1cbc22101238x.htm" target="_blank" class="info-title" >中华V3 2015款 1.5L 手动智能型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年11月上牌</span>                                <em class="shuxian">|</em>                                行驶0.8万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    6.35万
                                </i>
                              </span>
                                                                    <s>8.43万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="7938433">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7938433@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="日产ZN厢式车 2013款 2.4L两驱标准型5座" target="_blank" class="imgtype" href="/sjz/bc2261ed90d68f50x.htm" >
                                <img width="290" height="194" src="picture/56483b7e32492896c1cde234aee106a2.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="日产ZN厢式车 2013款 2.4L两驱标准型5座">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>5100元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7938433@8" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7938433@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="日产ZN厢式车 2013款 2.4L两驱标准型5座" href="/sjz/bc2261ed90d68f50x.htm" target="_blank" class="info-title" >日产ZN厢式车 2013款 2.4L两驱标准型5座</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年6月上牌</span>                                                                行驶0万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    8.99万
                                </i>
                              </span>
                                                                    <s>16.48万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="7900097">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7900097@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="别克凯越 2013款 1.5L 手动经典型" target="_blank" class="imgtype" href="/sjz/14783e4c2e9b28c5x.htm" >
                                <img width="290" height="194" src="picture/5b8ee77344009910f79e47261b5cde85.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="别克凯越 2013款 1.5L 手动经典型">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>2100元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7900097@9" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7900097@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="别克凯越 2013款 1.5L 手动经典型" href="/sjz/14783e4c2e9b28c5x.htm" target="_blank" class="info-title" >别克凯越 2013款 1.5L 手动经典型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年5月上牌</span>                                <em class="shuxian">|</em>                                行驶2.6万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    5.78万
                                </i>
                              </span>
                                                                    <s>10.52万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="7899743">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7899743@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="现代瑞纳 2014款 1.4L 手动智能型GLS" target="_blank" class="imgtype" href="/sjz/cc73bfbdaff184ecx.htm" >
                                <img width="290" height="194" src="picture/qn170117103936eb1b9fd96fecbde517830c81cc771594.jpg" alt="现代瑞纳 2014款 1.4L 手动智能型GLS">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>500元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7899743@10" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7899743@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="现代瑞纳 2014款 1.4L 手动智能型GLS" href="/sjz/cc73bfbdaff184ecx.htm" target="_blank" class="info-title" >现代瑞纳 2014款 1.4L 手动智能型GLS</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年4月上牌</span>                                <em class="shuxian">|</em>                                行驶3.2万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    5.55万
                                </i>
                              </span>
                                                                    <s>8.56万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="7847520">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7847520@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="道奇酷威 2013款 2.4L 两驱尊尚版(进口)" target="_blank" class="imgtype" href="/sjz/f526108fb6ebff46x.htm" >
                                <img width="290" height="194" src="picture/qn170114154235d1ed49e5731f5f56c813dadee546093b.jpg" alt="道奇酷威 2013款 2.4L 两驱尊尚版(进口)">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>2000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7847520@11" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=7847520@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="道奇酷威 2013款 2.4L 两驱尊尚版(进口)" href="/sjz/f526108fb6ebff46x.htm" target="_blank" class="info-title" >道奇酷威 2013款 2.4L 两驱尊尚版(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年7月上牌</span>                                <em class="shuxian">|</em>                                行驶0.6万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    24.30万
                                </i>
                              </span>
                                                                    <s>31.68万</s>
                                                            </p>
                        </div>
                    </li>
                                    </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080150000000035'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_more_c' href="/sjz/buy/a3/">更多降价急售</a>
        </div>
    </div>
            <div class="list" style="
    display:none;        ">
        <ul class="list-bigimg clearfix">
                                                <li clue_id="8045447">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8045447@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="斯柯达Yeti 2016款 1.4TSI DSG前行版" target="_blank" class="imgtype" href="/sjz/6d469cea1f58ca49x.htm" >
                                <img width="290" height="194" src="picture/c0ecf79f08c2ee453ceace43be126604.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="斯柯达Yeti 2016款 1.4TSI DSG前行版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8045447@0" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8045447@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="斯柯达Yeti 2016款 1.4TSI DSG前行版" href="/sjz/6d469cea1f58ca49x.htm" target="_blank" class="info-title" >斯柯达Yeti 2016款 1.4TSI DSG前行版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年2月上牌</span>                                <em class="shuxian">|</em>                                行驶1.8万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    11.97万
                                </i>
                              </span>
                                                                    <s>16.26万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8231398">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8231398@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="大众途观 2015款 1.8TSI 自动两驱风尚版" target="_blank" class="imgtype" href="/sjz/b7f7897b662329afx.htm" >
                                <img width="290" height="194" src="picture/ee9536834d5e509d3b8e87103483ccbf.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众途观 2015款 1.8TSI 自动两驱风尚版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8231398@1" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8231398@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="大众途观 2015款 1.8TSI 自动两驱风尚版" href="/sjz/b7f7897b662329afx.htm" target="_blank" class="info-title" >大众途观 2015款 1.8TSI 自动两驱风尚版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年1月上牌</span>                                <em class="shuxian">|</em>                                行驶1.1万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    17.98万
                                </i>
                              </span>
                                                                    <s>22.99万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8209385">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8209385@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="现代领动 2016款 1.6L 自动智炫·精英型" target="_blank" class="imgtype" href="/sjz/3f321a47d6c948c8x.htm" >
                                <img width="290" height="194" src="picture/8d7b961b679c51cb72764a1b6bdb3369.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="现代领动 2016款 1.6L 自动智炫·精英型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8209385@2" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8209385@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="现代领动 2016款 1.6L 自动智炫·精英型" href="/sjz/3f321a47d6c948c8x.htm" target="_blank" class="info-title" >现代领动 2016款 1.6L 自动智炫·精英型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年8月上牌</span>                                <em class="shuxian">|</em>                                行驶0.5万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    11.20万
                                </i>
                              </span>
                                                                    <s>13.00万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8180478">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8180478@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="大众帕萨特 2016款 330TSI DSG尊荣版" target="_blank" class="imgtype" href="/sjz/0c006070c0efc2c9x.htm" >
                                <img width="290" height="194" src="picture/68396d2179111a5b7424fae9986fdc80.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众帕萨特 2016款 330TSI DSG尊荣版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8180478@3" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8180478@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="大众帕萨特 2016款 330TSI DSG尊荣版" href="/sjz/0c006070c0efc2c9x.htm" target="_blank" class="info-title" >大众帕萨特 2016款 330TSI DSG尊荣版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年6月上牌</span>                                <em class="shuxian">|</em>                                行驶2.9万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    20.28万
                                </i>
                              </span>
                                                                    <s>24.20万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8186460">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8186460@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="日产轩逸 2016款 1.6XL  CVT尊享版" target="_blank" class="imgtype" href="/sjz/731aaca1298b4391x.htm" >
                                <img width="290" height="194" src="picture/17a2e486b09e4a790889ae48f1d94740.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="日产轩逸 2016款 1.6XL  CVT尊享版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8186460@4" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8186460@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="日产轩逸 2016款 1.6XL  CVT尊享版" href="/sjz/731aaca1298b4391x.htm" target="_blank" class="info-title" >日产轩逸 2016款 1.6XL  CVT尊享版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年9月上牌</span>                                <em class="shuxian">|</em>                                行驶2.3万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    10.95万
                                </i>
                              </span>
                                                                    <s>14.96万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8200989">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8200989@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="大众捷达 2015款 质惠版 1.6L 手动时尚型" target="_blank" class="imgtype" href="/sjz/9c50c8ea45649ccdx.htm" >
                                <img width="290" height="194" src="picture/3fea421a6a1054154f13713a7d09286e.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众捷达 2015款 质惠版 1.6L 手动时尚型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8200989@5" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8200989@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="大众捷达 2015款 质惠版 1.6L 手动时尚型" href="/sjz/9c50c8ea45649ccdx.htm" target="_blank" class="info-title" >大众捷达 2015款 质惠版 1.6L 手动时尚型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年1月上牌</span>                                <em class="shuxian">|</em>                                行驶1.5万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    6.40万
                                </i>
                              </span>
                                                                    <s>9.29万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8159032">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8159032@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="丰田卡罗拉 2016款 1.6L CVT GL-i炫酷版" target="_blank" class="imgtype" href="/sjz/d065387a23a3799cx.htm" >
                                <img width="290" height="194" src="picture/f6a1a696fca603633d99d0240af5d9b3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="丰田卡罗拉 2016款 1.6L CVT GL-i炫酷版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8159032@6" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8159032@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="丰田卡罗拉 2016款 1.6L CVT GL-i炫酷版" href="/sjz/d065387a23a3799cx.htm" target="_blank" class="info-title" >丰田卡罗拉 2016款 1.6L CVT GL-i炫酷版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年4月上牌</span>                                <em class="shuxian">|</em>                                行驶0.5万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    12.50万
                                </i>
                              </span>
                                                                    <s>14.63万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8153805">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8153805@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="雪佛兰科鲁兹 2015款 1.5L 经典 SE MT" target="_blank" class="imgtype" href="/sjz/534d39e17639b679x.htm" >
                                <img width="290" height="194" src="picture/aa4a0b85a36e8fb14af0fc92f64750aa.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="雪佛兰科鲁兹 2015款 1.5L 经典 SE MT">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8153805@7" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8153805@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="雪佛兰科鲁兹 2015款 1.5L 经典 SE MT" href="/sjz/534d39e17639b679x.htm" target="_blank" class="info-title" >雪佛兰科鲁兹 2015款 1.5L 经典 SE MT</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年9月上牌</span>                                <em class="shuxian">|</em>                                行驶0.4万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    8.00万
                                </i>
                              </span>
                                                                    <s>10.84万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8148943">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8148943@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="哈弗H6 2015款 运动版 1.5T 自动两驱豪华型" target="_blank" class="imgtype" href="/sjz/8def3faae29b9425x.htm" >
                                <img width="290" height="194" src="picture/29f5e4751c331453707be32b7b3c118e.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="哈弗H6 2015款 运动版 1.5T 自动两驱豪华型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8148943@8" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8148943@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="哈弗H6 2015款 运动版 1.5T 自动两驱豪华型" href="/sjz/8def3faae29b9425x.htm" target="_blank" class="info-title" >哈弗H6 2015款 运动版 1.5T 自动两驱豪华型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年3月上牌</span>                                <em class="shuxian">|</em>                                行驶1.3万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    10.80万
                                </i>
                              </span>
                                                                    <s>14.85万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8138004">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8138004@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="大众POLO 2014款 1.4L 手动舒适版" target="_blank" class="imgtype" href="/sjz/4e328fa1294a5f4ex.htm" >
                                <img width="290" height="194" src="picture/91a73b5c4c83a2baaa774061108edb3e.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众POLO 2014款 1.4L 手动舒适版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8138004@9" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8138004@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="大众POLO 2014款 1.4L 手动舒适版" href="/sjz/4e328fa1294a5f4ex.htm" target="_blank" class="info-title" >大众POLO 2014款 1.4L 手动舒适版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年1月上牌</span>                                <em class="shuxian">|</em>                                行驶0.9万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    6.95万
                                </i>
                              </span>
                                                                    <s>9.43万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8099544">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8099544@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="大众迈腾 2017款 330TSI DSG 豪华型" target="_blank" class="imgtype" href="/sjz/28ed3da150be2e45x.htm" >
                                <img width="290" height="194" src="picture/3ad614b154d27f2b0c906265178b1435.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众迈腾 2017款 330TSI DSG 豪华型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8099544@10" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8099544@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="大众迈腾 2017款 330TSI DSG 豪华型" href="/sjz/28ed3da150be2e45x.htm" target="_blank" class="info-title" >大众迈腾 2017款 330TSI DSG 豪华型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年11月上牌</span>                                <em class="shuxian">|</em>                                行驶0.6万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    22.99万
                                </i>
                              </span>
                                                                    <s>25.50万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="7944310">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=7944310@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="长安CX20 2014款1.4LAMT导航版" target="_blank" class="imgtype" href="/sjz/e75196736cdd47ffx.htm" >
                                <img width="290" height="194" src="picture/2a8c01d57ee6bdec0f16c85ceebcb0d8.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安CX20 2014款1.4LAMT导航版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=7944310@11" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=7944310@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="长安CX20 2014款1.4LAMT导航版" href="/sjz/e75196736cdd47ffx.htm" target="_blank" class="info-title" >长安CX20 2014款1.4LAMT导航版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年12月上牌</span>                                <em class="shuxian">|</em>                                行驶0.3万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    5.10万
                                </i>
                              </span>
                                                            </p>
                        </div>
                    </li>
                                    </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080320000000037'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_more_c' href="/sjz/buy/c4/">更多准新车</a>
        </div>
    </div>
            <div class="list" style="
    display:none;        ">
        <ul class="list-bigimg clearfix">
                                                <li clue_id="8096832">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8096832@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="雪铁龙C2 2012款 1.6L 自动运动型" target="_blank" class="imgtype" href="/sjz/779030ed55b44f48x.htm" >
                                <img width="290" height="194" src="picture/8202090f1cd42053707a2ff38c1aca68.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="雪铁龙C2 2012款 1.6L 自动运动型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8096832@0" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8096832@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="雪铁龙C2 2012款 1.6L 自动运动型" href="/sjz/779030ed55b44f48x.htm" target="_blank" class="info-title" >雪铁龙C2 2012款 1.6L 自动运动型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年8月上牌</span>                                <em class="shuxian">|</em>                                行驶6.6万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.70万
                                </i>
                              </span>
                                                                    <s>9.75万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8235389">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8235389@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="奇瑞风云2 2013款 两厢 1.5L 手动锐意版" target="_blank" class="imgtype" href="/sjz/823c78108c4f343cx.htm" >
                                <img width="290" height="194" src="picture/9f362d5b4f09fad336f84fd9def5270c.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奇瑞风云2 2013款 两厢 1.5L 手动锐意版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8235389@1" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8235389@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="奇瑞风云2 2013款 两厢 1.5L 手动锐意版" href="/sjz/823c78108c4f343cx.htm" target="_blank" class="info-title" >奇瑞风云2 2013款 两厢 1.5L 手动锐意版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年2月上牌</span>                                <em class="shuxian">|</em>                                行驶2.2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    3.70万
                                </i>
                              </span>
                                                                    <s>5.59万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8180003">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8180003@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="比亚迪F0 2012款 1.0L 悦酷型" target="_blank" class="imgtype" href="/sjz/cac3f016c92ce157x.htm" >
                                <img width="290" height="194" src="picture/8d90dc9349ee1f283c78d6f319d9b58a.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="比亚迪F0 2012款 1.0L 悦酷型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8180003@2" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8180003@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="比亚迪F0 2012款 1.0L 悦酷型" href="/sjz/cac3f016c92ce157x.htm" target="_blank" class="info-title" >比亚迪F0 2012款 1.0L 悦酷型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年4月上牌</span>                                <em class="shuxian">|</em>                                行驶3.2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    1.96万
                                </i>
                              </span>
                                                                    <s>4.44万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8233905">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8233905@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="五菱之光 2010款 1.0L立业版" target="_blank" class="imgtype" href="/sjz/e596a9cac3d33062x.htm" >
                                <img width="290" height="194" src="picture/3e687c4807b36c1e6d09068c3d396a0f.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="五菱之光 2010款 1.0L立业版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8233905@3" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8233905@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="五菱之光 2010款 1.0L立业版" href="/sjz/e596a9cac3d33062x.htm" target="_blank" class="info-title" >五菱之光 2010款 1.0L立业版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2011年10月上牌</span>                                <em class="shuxian">|</em>                                行驶5.8万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    1.80万
                                </i>
                              </span>
                                                                    <s>3.23万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8236239">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8236239@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="大众POLO 2009款 Sporty 1.6L 手动版" target="_blank" class="imgtype" href="/sjz/f08a6183e5c50ccbx.htm" >
                                <img width="290" height="194" src="picture/e8831ebefe86b10f0770c992b36f7af3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众POLO 2009款 Sporty 1.6L 手动版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8236239@4" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8236239@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="大众POLO 2009款 Sporty 1.6L 手动版" href="/sjz/f08a6183e5c50ccbx.htm" target="_blank" class="info-title" >大众POLO 2009款 Sporty 1.6L 手动版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年4月上牌</span>                                <em class="shuxian">|</em>                                行驶6万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.50万
                                </i>
                              </span>
                                                                    <s>10.42万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8213689">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8213689@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="五菱荣光V 2015款 1.2L基本型" target="_blank" class="imgtype" href="/sjz/7e6440d5f495f895x.htm" >
                                <img width="290" height="194" src="picture/be81fabbd3d06ed2ab99400fb98780ff.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="五菱荣光V 2015款 1.2L基本型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8213689@5" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8213689@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="五菱荣光V 2015款 1.2L基本型" href="/sjz/7e6440d5f495f895x.htm" target="_blank" class="info-title" >五菱荣光V 2015款 1.2L基本型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年10月上牌</span>                                <em class="shuxian">|</em>                                行驶1万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    3.30万
                                </i>
                              </span>
                                                                    <s>4.97万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8231817">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8231817@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="铃木北斗星 2012款 创业版 1.0L 手动超越型" target="_blank" class="imgtype" href="/sjz/ec0d6a0f8467e3b9x.htm" >
                                <img width="290" height="194" src="picture/f3948a7ec3d6f88cc0c66fa2ca27eb2a.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="铃木北斗星 2012款 创业版 1.0L 手动超越型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8231817@6" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8231817@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="铃木北斗星 2012款 创业版 1.0L 手动超越型" href="/sjz/ec0d6a0f8467e3b9x.htm" target="_blank" class="info-title" >铃木北斗星 2012款 创业版 1.0L 手动超越型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2012年6月上牌</span>                                <em class="shuxian">|</em>                                行驶10万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    1.80万
                                </i>
                              </span>
                                                                    <s>4.02万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8217907">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8217907@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="长安商用长安星光4500 长安星光4500   1.3L手动五座" target="_blank" class="imgtype" href="/sjz/237b96efd5d9c942x.htm" >
                                <img width="290" height="194" src="picture/475d88e965303fa95b0c8a0b89e5e55d.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安商用长安星光4500 长安星光4500   1.3L手动五座">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>3000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8217907@7" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8217907@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="长安商用长安星光4500 长安星光4500   1.3L手动五座" href="/sjz/237b96efd5d9c942x.htm" target="_blank" class="info-title" >长安商用长安星光4500 长安星光4500   1.3L手动五座</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年7月上牌</span>                                <em class="shuxian">|</em>                                行驶3万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    2.00万
                                </i>
                              </span>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8224611">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8224611@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="比亚迪F0 2011款 尚酷版 1.0L 悦酷型" target="_blank" class="imgtype" href="/sjz/e99e5599a7f01affx.htm" >
                                <img width="290" height="194" src="picture/661d7443e45ca86261e9d4d9b5878045.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="比亚迪F0 2011款 尚酷版 1.0L 悦酷型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8224611@8" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8224611@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="比亚迪F0 2011款 尚酷版 1.0L 悦酷型" href="/sjz/e99e5599a7f01affx.htm" target="_blank" class="info-title" >比亚迪F0 2011款 尚酷版 1.0L 悦酷型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2011年4月上牌</span>                                <em class="shuxian">|</em>                                行驶5万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    1.50万
                                </i>
                              </span>
                                                                    <s>4.44万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="7729024">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=7729024@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="荣威550 2010款 550S 1.8L 手动启逸版" target="_blank" class="imgtype" href="/sjz/51b7b294a4a68510x.htm" >
                                <img width="290" height="194" src="picture/cb31230380258cf5f91152077449efcb.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="荣威550 2010款 550S 1.8L 手动启逸版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=7729024@9" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=7729024@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="荣威550 2010款 550S 1.8L 手动启逸版" href="/sjz/51b7b294a4a68510x.htm" target="_blank" class="info-title" >荣威550 2010款 550S 1.8L 手动启逸版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2009年4月上牌</span>                                <em class="shuxian">|</em>                                行驶12.4万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.18万
                                </i>
                              </span>
                                                                    <s>15.07万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8196172">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8196172@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="吉利自由舰 2010款 1.3L 手动经典版" target="_blank" class="imgtype" href="/sjz/65e03149327ea71fx.htm" >
                                <img width="290" height="194" src="picture/d9e76a3e623fb42a47dd4ec21c2b4496.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="吉利自由舰 2010款 1.3L 手动经典版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8196172@10" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8196172@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="吉利自由舰 2010款 1.3L 手动经典版" href="/sjz/65e03149327ea71fx.htm" target="_blank" class="info-title" >吉利自由舰 2010款 1.3L 手动经典版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年3月上牌</span>                                <em class="shuxian">|</em>                                行驶6.4万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    1.10万
                                </i>
                              </span>
                                                                    <s>4.75万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="7852597">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=7852597@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="铃木雨燕 2014款 1.3L 手动标准型" target="_blank" class="imgtype" href="/sjz/74b9600c239fe1efx.htm" >
                                <img width="290" height="194" src="picture/be9a87201943d49dc20d75f418fe4a2b.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="铃木雨燕 2014款 1.3L 手动标准型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=7852597@11" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=7852597@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="铃木雨燕 2014款 1.3L 手动标准型" href="/sjz/74b9600c239fe1efx.htm" target="_blank" class="info-title" >铃木雨燕 2014款 1.3L 手动标准型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年2月上牌</span>                                <em class="shuxian">|</em>                                行驶1.4万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.30万
                                </i>
                              </span>
                                                                    <s>6.49万</s>
                                                            </p>
                        </div>
                    </li>
                                    </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080330000000039'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_more_c' href="/sjz/buy/p3/">更多练手车</a>
        </div>
    </div>
            <div class="list" style="
    display:none;        ">
        <ul class="list-bigimg clearfix">
                                                <li clue_id="8226433">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8226433@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="比亚迪S6 2013款 劲悦版 2.0L 手动尊贵型 5座" target="_blank" class="imgtype" href="/sjz/6c38d713d7c61debx.htm" >
                                <img width="290" height="194" src="picture/8b49343c85202da2b504db7e5d89a527.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="比亚迪S6 2013款 劲悦版 2.0L 手动尊贵型 5座">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8226433@0" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8226433@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="比亚迪S6 2013款 劲悦版 2.0L 手动尊贵型 5座" href="/sjz/6c38d713d7c61debx.htm" target="_blank" class="info-title" >比亚迪S6 2013款 劲悦版 2.0L 手动尊贵型 5座</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年9月上牌</span>                                <em class="shuxian">|</em>                                行驶4.4万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    5.60万
                                </i>
                              </span>
                                                                    <s>10.84万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8239814">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8239814@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="奥迪Q7 2013款 35 TFSI 进取型(进口)" target="_blank" class="imgtype" href="/sjz/90acd7634692688bx.htm" >
                                <img width="290" height="194" src="picture/6d60f72c68514d592c3b547a86b63916.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奥迪Q7 2013款 35 TFSI 进取型(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8239814@1" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8239814@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="奥迪Q7 2013款 35 TFSI 进取型(进口)" href="/sjz/90acd7634692688bx.htm" target="_blank" class="info-title" >奥迪Q7 2013款 35 TFSI 进取型(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年8月上牌</span>                                <em class="shuxian">|</em>                                行驶9.1万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    43.88万
                                </i>
                              </span>
                                                                    <s>89.12万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8045447">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8045447@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="斯柯达Yeti 2016款 1.4TSI DSG前行版" target="_blank" class="imgtype" href="/sjz/6d469cea1f58ca49x.htm" >
                                <img width="290" height="194" src="picture/c0ecf79f08c2ee453ceace43be126604.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="斯柯达Yeti 2016款 1.4TSI DSG前行版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8045447@2" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8045447@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="斯柯达Yeti 2016款 1.4TSI DSG前行版" href="/sjz/6d469cea1f58ca49x.htm" target="_blank" class="info-title" >斯柯达Yeti 2016款 1.4TSI DSG前行版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年2月上牌</span>                                <em class="shuxian">|</em>                                行驶1.8万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    11.97万
                                </i>
                              </span>
                                                                    <s>16.26万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8231573">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8231573@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="奔腾X80 2013款 2.0L 自动舒适型" target="_blank" class="imgtype" href="/sjz/fe9715b4e1edb8ecx.htm" >
                                <img width="290" height="194" src="picture/aaed491067d89ec567a854103f483a8f.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奔腾X80 2013款 2.0L 自动舒适型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8231573@3" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8231573@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="奔腾X80 2013款 2.0L 自动舒适型" href="/sjz/fe9715b4e1edb8ecx.htm" target="_blank" class="info-title" >奔腾X80 2013款 2.0L 自动舒适型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年11月上牌</span>                                <em class="shuxian">|</em>                                行驶3.4万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    8.49万
                                </i>
                              </span>
                                                                    <s>14.52万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8231398">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8231398@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="大众途观 2015款 1.8TSI 自动两驱风尚版" target="_blank" class="imgtype" href="/sjz/b7f7897b662329afx.htm" >
                                <img width="290" height="194" src="picture/ee9536834d5e509d3b8e87103483ccbf.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众途观 2015款 1.8TSI 自动两驱风尚版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8231398@4" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8231398@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="大众途观 2015款 1.8TSI 自动两驱风尚版" href="/sjz/b7f7897b662329afx.htm" target="_blank" class="info-title" >大众途观 2015款 1.8TSI 自动两驱风尚版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年1月上牌</span>                                <em class="shuxian">|</em>                                行驶1.1万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    17.98万
                                </i>
                              </span>
                                                                    <s>22.99万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8223349">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8223349@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="陆风X7 2015款 2.0T 全景尊贵版" target="_blank" class="imgtype" href="/sjz/020c7597c4c58c52x.htm" >
                                <img width="290" height="194" src="picture/5d01c924105dc6a7948ae6418fec7c62.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="陆风X7 2015款 2.0T 全景尊贵版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8223349@5" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8223349@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="陆风X7 2015款 2.0T 全景尊贵版" href="/sjz/020c7597c4c58c52x.htm" target="_blank" class="info-title" >陆风X7 2015款 2.0T 全景尊贵版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年8月上牌</span>                                <em class="shuxian">|</em>                                行驶2.4万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    11.19万
                                </i>
                              </span>
                                                                    <s>15.17万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8214551">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8214551@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="起亚智跑 2012款 2.0L 自动两驱版NAVI" target="_blank" class="imgtype" href="/sjz/8928f60a0b896605x.htm" >
                                <img width="290" height="194" src="picture/e9bf5895b888d44422d31c4b03b343f8.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="起亚智跑 2012款 2.0L 自动两驱版NAVI">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8214551@6" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8214551@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="起亚智跑 2012款 2.0L 自动两驱版NAVI" href="/sjz/8928f60a0b896605x.htm" target="_blank" class="info-title" >起亚智跑 2012款 2.0L 自动两驱版NAVI</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年3月上牌</span>                                <em class="shuxian">|</em>                                行驶8.8万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    11.50万
                                </i>
                              </span>
                                                                    <s>22.77万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8209063">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8209063@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="奥迪Q7 2014款 35 TFSI 越野型(进口)" target="_blank" class="imgtype" href="/sjz/0e853f23ed43799cx.htm" >
                                <img width="290" height="194" src="picture/d5679763f576dcc0dec7a204bfaddea2.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奥迪Q7 2014款 35 TFSI 越野型(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8209063@7" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8209063@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="奥迪Q7 2014款 35 TFSI 越野型(进口)" href="/sjz/0e853f23ed43799cx.htm" target="_blank" class="info-title" >奥迪Q7 2014款 35 TFSI 越野型(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年3月上牌</span>                                <em class="shuxian">|</em>                                行驶2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    58.80万
                                </i>
                              </span>
                                                                    <s>105.49万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8110909">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8110909@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="现代ix35 2013款 2.0L 自动两驱智能型GLS 国IV" target="_blank" class="imgtype" href="/sjz/69ce081b95c22cf1x.htm" >
                                <img width="290" height="194" src="picture/913a7c74976577baea02b45a17ee1669.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="现代ix35 2013款 2.0L 自动两驱智能型GLS 国IV">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8110909@8" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8110909@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="现代ix35 2013款 2.0L 自动两驱智能型GLS 国IV" href="/sjz/69ce081b95c22cf1x.htm" target="_blank" class="info-title" >现代ix35 2013款 2.0L 自动两驱智能型GLS 国IV</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年5月上牌</span>                                <em class="shuxian">|</em>                                行驶4.5万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    12.99万
                                </i>
                              </span>
                                                                    <s>21.36万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8149003">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8149003@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="哈弗H3 2010款 锐意版 2.0L 精英型" target="_blank" class="imgtype" href="/sjz/3493f856d1f61f1ax.htm" >
                                <img width="290" height="194" src="picture/e3714b190f8c6feb8922c1894055d8e1.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="哈弗H3 2010款 锐意版 2.0L 精英型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8149003@9" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8149003@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="哈弗H3 2010款 锐意版 2.0L 精英型" href="/sjz/3493f856d1f61f1ax.htm" target="_blank" class="info-title" >哈弗H3 2010款 锐意版 2.0L 精英型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年12月上牌</span>                                <em class="shuxian">|</em>                                行驶9.2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    2.99万
                                </i>
                              </span>
                                                                    <s>10.72万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8151291">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8151291@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="雪佛兰科帕奇 2010款 3.2 AT 7座旗舰型(进口)" target="_blank" class="imgtype" href="/sjz/8eb3fe24b5ac9efcx.htm" >
                                <img width="290" height="194" src="picture/e2fded4fbe14874a35164874c8824756.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="雪佛兰科帕奇 2010款 3.2 AT 7座旗舰型(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8151291@10" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8151291@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="雪佛兰科帕奇 2010款 3.2 AT 7座旗舰型(进口)" href="/sjz/8eb3fe24b5ac9efcx.htm" target="_blank" class="info-title" >雪佛兰科帕奇 2010款 3.2 AT 7座旗舰型(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年10月上牌</span>                                <em class="shuxian">|</em>                                行驶9.1万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    9.50万
                                </i>
                              </span>
                                                                    <s>29.94万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="7957214">

                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=7957214@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="宝马X5 2011款 xDrive35i 豪华型(进口)" target="_blank" class="imgtype" href="/sjz/a631f307093240dax.htm" >
                                <img width="290" height="194" src="picture/2e4c8de9d84d1a1f9bb01539c220257c.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="宝马X5 2011款 xDrive35i 豪华型(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=7957214@11" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=7957214@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="宝马X5 2011款 xDrive35i 豪华型(进口)" href="/sjz/a631f307093240dax.htm" target="_blank" class="info-title" >宝马X5 2011款 xDrive35i 豪华型(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2012年2月上牌</span>                                <em class="shuxian">|</em>                                行驶11.6万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    38.00万
                                </i>
                              </span>
                                                                    <s>109.09万</s>
                                                            </p>
                        </div>
                    </li>
                                    </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080340000000041'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_more_c' href="/sjz/buy/h2/">更多SUV</a>
        </div>
    </div>
    </div>
</div>    <!--首页帖子列表 e -->

</div>
@endsection

@section('script_content')
<!-- 引入轮播js -->
<script src="{{URL::asset('newShow/js/common/swipeslider.js')}}"></script>
<script>
    $(document).ready(function(){

        // alert('hehe');
        $('#full_feature').swipeslider();
    });
</script>
@endsection