@extends('home.main')

@section('head_content')
    <!-- 详情页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/sell.css')}}">
@endsection

@section('title')
    <title>我要卖车</title>
@endsection

@section('current_city_name')
    @if(null !== Session('chosen_city_name'))
        {{Session('chosen_city_name')}}
    @else
        {{Session('current_city_name')}}
    @endif
@endsection

@section('content')
<main>
    <section class="banner" style="background-color: #000;">
        <!-- banner 图片尺寸 1190 x450  图片左右有渐变色  -->
        <!-- <img src="../img/sell/dbfile/bannerBg.jpg" /> -->
        <img src="{{URL::asset('home/img/sell/dbfile/bannerBg.jpg')}}" />
        <div class="container">
            <div class="dateSell">
                <div class="logo"></div>
                <div id="brand" class="dib combo dib-con brand">
                    <input type="hidden" name="brand"/>
                    <div class="dib text">品牌</div>
                    <div class="dib icon"></div>
                    <div class="optionList">
                        <ul>
                            <li value="benz">梅赛德斯</li>
                            <li value="benz">梅赛德斯</li>
                            <li value="benz">梅赛德斯</li>
                        </ul>
                    </div>
                </div>
                <div id="kind" class="dib combo dib-con brand">
                    <input type="hidden" name="kind"/>
                    <div class="dib text">车系</div>
                    <div class="dib icon"></div>
                    <div class="optionList">
                        <ul>
                            <li value="benz">梅赛德斯</li>
                            <li value="benz">梅赛德斯</li>
                            <li value="benz">梅赛德斯</li>
                        </ul>
                    </div>
                </div>
                <div id="mobile" class="mobile">
                    <input type="text" placeholder="手机号码"/>
                </div>
                <div class="buttonArea">
                    <div class="consult fr">咨询：400-670-6969</div>
                    <button>我要预约</button>
                </div>
            </div>
        </div>
    </section>
    <section class="bannerAdd container dib-con">
        <div class="item dib order">
            <p class="title">预约代理</p>
            <p class="desc">填写信息或拨打电话预约代理</p>
        </div>
        <div class="item dib assess">
            <p class="title">专业评估</p>
            <p class="desc">顾问跟踪，车辆鉴定评估</p>
        </div>
        <div class="item dib extension">
            <p class="title">免费推广</p>
            <p class="desc">销售顾问为您免费推广出售信息</p>
        </div>
        <div class="item dib trade">
            <p class="title">交易过户</p>
            <p class="desc">一站式服务，代办所有过户手续</p>
        </div>
    </section>
    <section class="newestSell">
        <div class="container">
            <div class="title">最新售出<span class="small">累计为超过<span class="red">1895000</span>位车主服务</span></div>
            <div class="content dib-con">
                <div class="dib col-20 cars">
                    <div class="dib-con">
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    <div class="dib col-5 item">
                        <a href="#">
                            <div class="car">
                                <img src="../img/index/dbfile/carItem.png" alt="哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版" />
                                <p class="carName">哈佛 2011年款 哈佛 H5 2.4 手动尊爵 四驱超豪华差速版</p>
                                <p class="carPrice">￥7.80万</p>
                                <div class="carDesc">
                                    <span>上牌：2012年04月</span>
                                    <span class="fr">里程：5.5万公里</span>
                                </div>
                            </div>
                        </a>
                        <div class="connect">
                            <span class="fr">李朋(秦华店)</span>
                            <div class="mobile">18333140212</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="dib rightContent">
                    <div class="itemContent historySearch">
                        <div class="title">历史成交查询</div>
                        <div class="dib combo dib-con brand">
                            <input type="hidden" name="brand"/>
                            <div class="dib text">品牌</div>
                            <div class="dib icon"></div>
                            <div class="optionList">
                                <ul>
                                    <li value="benz">梅赛德斯</li>
                                    <li value="benz">梅赛德斯</li>
                                    <li value="benz">梅赛德斯</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dib combo dib-con brand">
                            <input type="hidden" name="kind"/>
                            <div class="dib text">车系</div>
                            <div class="dib icon"></div>
                            <div class="optionList">
                                <ul>
                                    <li value="benz">梅赛德斯</li>
                                    <li value="benz">梅赛德斯</li>
                                    <li value="benz">梅赛德斯</li>
                                </ul>
                            </div>
                        </div>
                        <button class="searchButton">立即查询</button>
                        <p class="onSellTitle">热卖成交：</p>
                        <div class="dib-con onSellBrands">
                            <div class="dib item">凯越</div>
                            <div class="dib item">捷达</div>
                            <div class="dib item">科鲁兹</div>
                            <div class="dib item">福克斯</div>
                            <div class="dib item">福克斯-三厢</div>
                            <div class="dib item">307-三厢</div>
                            <div class="dib item">骐达</div>
                        </div>
                    </div>
                    <div class="itemContent newestOrder">
                        <div class="title">最新预约用户</div>
                        <div class="orderItem dib-con">
                            <div class="name dib">张有年</div>
                            <div class="mobile dib">189**5</div>
                            <div class="carName dib">世嘉三厢</div>
                        </div>
                        <div class="orderItem dib-con">
                            <div class="name dib">张有年</div>
                            <div class="mobile dib">189**5</div>
                            <div class="carName dib">世嘉三厢</div>
                        </div>
                        <div class="orderItem dib-con">
                            <div class="name dib">张有年</div>
                            <div class="mobile dib">189**5</div>
                            <div class="carName dib">世嘉三厢</div>
                        </div>
                        <div class="orderItem dib-con">
                            <div class="name dib">张有年</div>
                            <div class="mobile dib">189**5</div>
                            <div class="carName dib">世嘉三厢</div>
                        </div>
                        <div class="orderItem dib-con">
                            <div class="name dib">张有年</div>
                            <div class="mobile dib">189**5</div>
                            <div class="carName dib">世嘉三厢</div>
                        </div>
                        <div class="orderItem dib-con">
                            <div class="name dib">张有年</div>
                            <div class="mobile dib">189**5</div>
                            <div class="carName dib">世嘉三厢</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main> 
@endsection
