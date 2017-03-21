@extends('home.main')

@section('head_content')
    <!-- 详情页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/detail.css')}}">
@endsection

@section('title')
    <title>{{$title}}</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
    <meta name="description" content="{{$meta_des}}">
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
    <nav class="breadNav dib-con container">
        <div class="dib item">当前位置：</div>
        <a href="{{route('home.index')}}"><div class="dib item">首页</div></a>
        <div class="dib split item">&gt;</div>
        <a href="{{route('home.cate.index')}}"><div class="dib item">我要买车</div></a>
        <div class="dib split item">&gt;</div>
        <div class="dib item">{{$cars->name}}</div>
    </nav>
    <section class="carDetail dib-con container">
        <div class="dib carDetailImg">
            @if(isset($cars->hasOneImagesOnFirst->filename))
                <img src="{{URL::asset('uploads/car/'.$cars->hasOneImagesOnFirst->filename)}}" onerror="this.src='{{URL::asset("images/default.jpg")}}'" alt="{{$cars->name}}" />
            @else
                <img src="{{URL::asset('images/default.jpg')}}" alt="" />
            @endif
        </div>
        <div class="dib carDetailText">
            <div class="carName">{{$cars->name}}</div>
            <div class="carTag dib-con">
                <div class="dib tagItem auth" style="background: url('{{URL::asset('home/img/storeDetail/tagBg.png')}}') no-repeat;">认证车源</div>
                <div class="dib tagItem high" style="background: url('{{URL::asset('home/img/storeDetail/tagBg.png')}}') no-repeat;">优质车源</div>
            </div>
            <div class="carPrice">{{$cars->top_price}}<span class="small">万</span><span class="gray">(不包含过户费)</span></div>
            <div class="carProps dib-con">
                <div class="item dib">
                    <div class="label">首次上牌时间</div>
                    <div class="text">{{$cars->plate_date}}</div>
                </div>
                <div class="item dib">
                    <div class="label">公里数</div>
                    <div class="text">{{$cars->mileage}}万公里</div>
                </div>
                <div class="item dib">
                    <div class="label">档位/排量</div>
                    <div class="text">{{$gearbox[$cars->gearbox]}}/{{$capacity[$cars->capacity]}}</div>
                </div>
                <div class="item dib">
                    <div class="label">车辆所在地</div>
                    <div class="text">{{$cars->belongsToShop->belongsToArea->city_name}}</div>
                </div>
            </div>
            <div class="service">
                <p>保障服务：车辆认证 专业检测 1年2万公里质保</p>
                <!-- <p>服 务 费：2000元（车价 X 3%，最低2000起）</p> -->
            </div>
            <!-- <div class="buttonArea dib-con">
                <div class="dib dateCar modalControl" target="#dateCarModal">预约看车</div>
                <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"><div class="dib share"></div></a>
                <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
            </div> -->
            <div class="connectInfo">
                <!-- <div class="dib-con storeLink fr">
                    <a href="#"><div class="linkItem dib enterStore">进入店铺</div></a>
                </div> -->
                <div class="connectName item">联系信息： {{$cars->belongsToUser->nick_name}}<span class="gray">（{{$cars->belongsToShop->shop_name}}）</span></div>
                <div class="connectMobile item">门店地址： {{$cars->belongsToShop->shop_address}}</div>
                <div class="connectMobile item">联系电话： {{$cars->belongsToUser->creater_telephone}}</div>
            </div>
        </div>
    </section>
    <section class="floor carSimpleInfo container">
        <div class="title">基本信息</div>
        <div class="content">
            <table border="0">
                <tr>
                    <td class="label">车身颜色</td>
                    <td class="text">{{$out_color[$cars->out_color]}}</td>
                    <td class="label">年检到期时间</td>
                    <td class="text">{{$cars->plate_end}}</td>
                    <td class="label">交强险到期时间</td>
                    <td class="text">{{$cars->safe_end}}</td>
                    <!-- <td class="label">商业保险到期时间</td>
                    <td class="text">{{$cars->safe_end}}</td> -->
                </tr>
                <tr>
                    <td class="label">归属地</td>
                    <td class="text">{{$cars->belongsToShop->belongsToArea->city_name}}</td>
                    <td class="label">过户次数</td>
                    <td class="text">{{$sale_number[$cars->sale_number]}}</td>
                    <td class="label">商业保险到期时间</td>
                    <td class="text">{{$cars->safe_end}}</td>
                    <!-- <td class="label">有无购车发票</td>
                    <td class="text">有</td>
                    <td class="label">是否4S店保养</td>
                    <td class="text">是</td> -->
                </tr>
            </table>
        </div>
    </section>
    <section class="floor carDesc container">
        <div class="title">车辆说明</div>
        <div class="content">
            <p>{{$cars->description}}</p>
            <div>
                <!-- <div> -->
                   @foreach($cars->hasManyImages as $image)
                    <img style="margin-left:1%;max-height: 400px;" src="{{URL::asset('uploads/car/'.$image->filename)}}"   onerror="this.src='{{URL::asset("images/default.jpg")}}'"/>
                    @endforeach 
                <!-- </div>              -->
            </div>
            <!-- <img src="../img/carDetail/dbFile/carDesc1.png" /> -->
            <!-- <img src="../img/carDetail/dbFile/carDesc2.png" /> -->
        </div>
    </section>
    <!-- <section class="floor certInfo container">
        <div class="title">检测说明</div>
        <div class="content" style="background: url('{{URL::asset('home/img/carDetail/checkResultBg.jpg')}}') no-repeat;">
            <div class="certContent">
                <p class="certTitle">淘车乐认证证书</p>
                <div class="dib-con certTarget">
                    <div class="dib item">检测对象：{{$cars->name}}</div>
                    <div class="dib item">检测项目：114项国家标准检测及46项淘车乐专项检测 共160项</div>
                </div>
                <p class="certLabel">检测结果：</p>
                <p class="certDesc certText">经检测，该车车身大部分做漆，性能部件正常使用。外观时尚，内饰整洁，电子系统、刹车系统、安全系统无异常。检查发动性能部件正机舱，常使用。外观时尚，内饰未发现渗油等现象，发动机怠速正常，变速箱换挡平顺，转向精准，动力强劲，综合车况良好。</p>
                <p class="certChecker certText">
                    <span class="certLabel">检测师：</span>
                    张海波
                </p>
                <p class="certCheckDate certText">
                    <span class="certLabel">检测时间：</span>
                    2015-05-02
                </p>
                <div class="split"></div>
                <div class="dib-con checkTerms">
                    <div class="item dib">
                        <div class="termLabel">法律风险查询</div>
                        <div class="termList dib-con">
                            <div class="dib label">排除抵押车</div>
                            <div class="dib num">5项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                        <div class="termList dib-con">
                            <div class="dib label">排除克隆车</div>
                            <div class="dib num">3项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                        <div class="termList dib-con">
                            <div class="dib label">排除运营车</div>
                            <div class="dib num">5项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                        <div class="termList dib-con">
                            <div class="dib label">排除拼装车/改装车</div>
                            <div class="dib num">25项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                    </div>
                    <div class="item dib">
                        <div class="termLabel">事故车辆检车</div>
                        <div class="termList dib-con">
                            <div class="dib label">排除严重撞击</div>
                            <div class="dib num">14项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                        <div class="termList dib-con">
                            <div class="dib label">排除水泡</div>
                            <div class="dib num">21项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                        <div class="termList dib-con">
                            <div class="dib label">排除火烧</div>
                            <div class="dib num">18项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                    </div>
                    <div class="item dib">
                        <div class="termLabel">安全系统检查</div>
                        <div class="termList dib-con">
                            <div class="dib label">制动系统检查</div>
                            <div class="dib num">14项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                        <div class="termList dib-con">
                            <div class="dib label">指示灯检查</div>
                            <div class="dib num">12项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                        <div class="termList dib-con">
                            <div class="dib label">外观内饰检查</div>
                            <div class="dib num">8项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                    </div>
                    <div class="item dib">
                        <div class="termLabel">外观内饰检查</div>
                        <div class="termList dib-con">
                            <div class="dib label">外观检查</div>
                            <div class="dib num">27项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                        <div class="termList dib-con">
                            <div class="dib label">排除克隆车</div>
                            <div class="dib num">3项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                        <div class="termList dib-con">
                            <div class="dib label">排除运营车</div>
                            <div class="dib num">5项</div>
                            <div class="dib icon checkRight"></div>
                        </div>
                    </div>
                </div>
                <button class="modalControl dateCar" target="#dateCarModal">预约看车</button>
            </div>
        </div>
    </section> -->
    <section class="floor recommend container">
        <div class="title">店铺推荐</div>
        <a href="javascript:void(0);"><div class="rightLink fr">进入店铺查看更多</div></a>
        
        <div class="content dib-con">
        @foreach($recommend_cars as $rcar)
            <div class="dib col-5 item">
                <div class="car">
                    <a href="{{route('home.car.index', ['car'=>$rcar->id])}}">
                        @if(isset($rcar->hasOneImagesOnFirst->filename))
                        <img src="{{URL::asset('uploads/car/'.$rcar->hasOneImagesOnFirst->filename)}}"
                             alt="{{$rcar->name}}"/>
                        @endif
                        <p class="carName">{{$rcar->name}}</p>
                        <p class="carPrice"><span class="small">￥</span><span>{{$rcar->top_price}}</span><span
                                class="small">万</span></p>
                        <div class="carDesc">
                            <span>上牌：{{$rcar->plate_date}}</span>
                            <span class="fr">里程：{{$rcar->mileage}}万公里</span>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
        </div>
        
    </section>
</main> 
@endsection
