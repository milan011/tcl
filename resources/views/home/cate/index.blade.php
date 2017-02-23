@extends('home.main')

@section('head_content')
    <!-- 详情页样式 -->  
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/list.css')}}"> 
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/page.css')}}"> 
    <script type="text/javascript" src="{{URL::asset('js/tcl/home/list.js')}}"></script>
@endsection

@section('title')
    <title>列表页</title>
@endsection

@section('content')
 <main>
    <nav class="breadNav dib-con container">
        <div class="dib item">当前位置：</div>
        <a href="#">
            <div class="dib item">首页</div>
        </a>
        <div class="dib split item">&gt;</div>
        <div class="dib item">我要买车</div>
    </nav>
    <section class="searchTags container">
        <div class="selectedTag dib-con">
            <a href="{{route('home.cate.index')}}"><div class="fr clearAll">清楚全部条件</div></a>
            <div class="dib label">已选条件：</div>
            @foreach($current_condition as $condition)
            <div class="dib item" row="level">
                {{$condition['content']}}
                <a href="{{$condition['url']}}"><span style="background: url('{{URL::asset("home/img/list/searchTagRemoveIcon.png")}}') no-repeat right 1px;" class="closeIcon"></span></a>
            </div>
            @endforeach
        </div>
        <div class="tagRow dib-con" target="level">
            <div class="label dib">级别</div>
            <div class="tags dib dib-con">
                <a href="{{$clean_category_type_url}}"><div class="tagItem dib active">不限</div></a>
                @foreach($category_type_with_url as $key=>$category)
                    <a href="{{$category['url']}}"><div date-category="{{$key}}" class="tagItem dib">{{$category['content']}}</div></a>
                @endforeach
            </div>
            <!--<div class="more dib down">更多</div>-->
        </div>
        <div class="tagRow dib-con" target="brand">
            <div class="label dib">品牌</div>
            <div class="tags dib dib-con">
                <a href="{{$clean_recomment_brands_url}}"><div class="tagItem dib active">不限</div></a>
                @foreach($recomment_brands as $key=>$brand)
                    <a href="{{$brand->url}}"><div date-brand="{{$brand->id}}" class="tagItem dib">{{$brand->name}}</div></a>
                @endforeach
                <div class="brandKinds">
                    <div class="kindTag dib-con">
                        @foreach($letter_list as $key=>$letter)
                            <div class="dib item @if($key == 0) active @endif" target="{{$letter}}">{{$letter}}
                            </div>
                        @endforeach                      
                    </div>
                    <div class="brands">
                        @foreach($brand_letter_list as $key=>$brand_list)
                        <div id="brandPanel{{$key}}" class="brandPanel @if($key == 'A') active @endif dib-con">
                            @foreach($brand_list as $key=>$brand)
                                <a href="{{$brand->url}}"><div class="dib item">{{$brand->name}}</div></a>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="more dib">更多</div>
            <div class="tagRow dib-con" target="type">
            <div class="label dib">车系</div>
            <div class="tags dib dib-con">           
                <a href="{{$clean_current_category_url}}"><div class="tagItem dib active">不限</div></a>
                @foreach($current_category as $key=>$cate)
                    <a href="{{$cate['url']}}"  >
                        <div class="tagItem dib">{{$cate['name']}}</div>
                    </a>
                @endforeach
            </div>
            <div class="more dib">更多</div>
        </div>
        
        <div class="tagRow dib-con" target="level">
            <div class="label dib">价格</div>
            <div class="tags dib dib-con">
                @foreach($price_with_url as $key=>$price)
                    <a href="{{$price['url']}}">
                        <div class="tagItem dib @if($key == 1) active @endif">
                            {{$price['content']}}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        
        <div class="tagRow dib-con" target="level">
            <div class="label dib">车龄</div>
            <div class="tags dib dib-con">
                @foreach($age_with_url as $key=>$ag)
                    <a href="{{$ag['url']}}"  >
                        <div class="tagItem dib  @if($key == 1) active @endif ">
                            {{$ag['content']}}
                        </div>
                    </a>
                @endforeach                
            </div>
        </div>
        
        <div class="tagRow dib-con" target="level">
            <div class="label dib">门店</div>
            <div class="tags dib dib-con">
            
                <a href="{{$clean_shop_url}}"><div class="tagItem dib active">不限</div></a>
                @foreach($all_shop as $shop)
                    <a href="{{$shop['url']}}"  ><div class="tagItem dib ">{{$shop->name}}</div></a>
                @endforeach
            </div>
            <div class="more dib">更多</div>
        </div>
    </section>
    <section class="picAdds dib-con container">
        <div class="dib item">
            <img src="{{URL::asset('home/img/list/dbFile/add1.jpg')}}">
        </div>
        <div class="dib item">
            <img src="{{URL::asset('home/img/list/dbFile/add2.jpg')}}">
        </div>
        <div class="dib item">
            <img src="{{URL::asset('home/img/list/dbFile/add3.jpg')}}">
        </div>
        <div class="dib item">
            <img src="{{URL::asset('home/img/list/dbFile/add4.jpg')}}">
        </div>
        <div class="dib item">
            <img src="{{URL::asset('home/img/list/dbFile/add5.jpg')}}">
        </div>
    </section>
    <section class="container mainArea dib-con">
        <div class="cars dib col-18">
            <div class="tabTitle dib-con">
                <div class="titleItem dib active">全部车源</div>
                <!-- <div class="titleItem dib">认证车源</div> -->
                <!-- <div class="titleItem dib">优质车源</div> -->
            </div>
            <div class="sortBar dib-con">
                <div class="sortItem dib active">综合排序</div>
                <div class="sortItem dib dib-con">
                    <div class="dib">发布时间</div>
                    <div class="dib arrows">
                        <div class="up arrowItem"></div>
                        <div class="down arrowItem"></div>
                    </div>
                </div>
                <div class="sortItem dib dib-con">
                    <div class="dib">价格</div>
                    <div class="dib arrows">
                        <div class="up arrowItem"></div>
                        <div class="down arrowItem"></div>
                    </div>
                </div>
                <div class="sortItem dib dib-con">
                    <div class="dib">车龄</div>
                    <div class="dib arrows">
                        <div class="up arrowItem"></div>
                        <div class="down arrowItem"></div>
                    </div>
                </div>
                <div class="sortItem dib dib-con">
                    <div class="dib">里程</div>
                    <div class="dib arrows">
                        <div class="up arrowItem"></div>
                        <div class="down arrowItem"></div>
                    </div>
                </div>
                <div class="fr position dib-con">
                    <div class="icon dib"></div>
                    <div class="area dib">车源地：</div>
                    <div class="drop dib combo">
                        <div class="fr dropIcon"></div>
                        <div class="text">石家庄</div>
                        <!-- <ul class="dropList optionList">
                            <li>石家庄</li>
                            <li>邢台</li>
                            <li>沧州</li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="tabContent carList">            
                @foreach($cars as $car)
                <div class="carItem dib-con">
                    <div class="carPrice fr">{{$car->top_price}}<span class="small">万</span></div>
                    <div class="carImg dib">
                        <a target="_blank" href="{{route('home.car.index', ['car'=>$car->id])}}">
                        @if(isset($car->hasOneImagesOnFirst->filename))
                        <img src="{{URL::asset('uploads/car/'.$car->hasOneImagesOnFirst->filename)}}">
                        @else
                        <img src="{{URL::asset('home/img/res/images/default.jpg')}}">
                        @endif
                        <!-- <img src="../img/storeDetail/dbfile/carListItem.png"> -->
                        </a>
                    </div>
                    
                    <div class="carDesc dib">
                        <div class="carName">{{$car->name}}</div>
                        <div class="carTags dib-con">
                            <div class="dib">{{$car->plate_date}}上牌</div>
                            <div class="dib">{{$car->mileage}}万公里</div>
                            <div class="dib">{{$car->belongsToCity->city_name}}</div>
                            <div class="dib">{{$car->age}}年</div>
                            <div class="dib">{{$gearbox[$car->gearbox]}}</div>
                            <div class="dib">{{$out_color[$car->out_color]}}</div>
                        </div>
                        <div class="carTextDesc">
                            <div class="descText"><span class="label">亮点配置</span>{{$car->description}}
                            </div>
                        </div>
                        <!-- <div class="carTag dib-con">
                            <div class="dib tagItem auth">认证车源</div>
                            <div class="dib tagItem high">优质车源</div>
                        </div> -->
                    </div>
                </div>
                @endforeach
                              
            </div>
            <!--<div class="loadMore">查看更多车源</div>-->
            <div class="pagination dib-con">
                <!-- <div class="item dib prev">&lt;</div>
                <div class="item dib num active">1</div>
                <div class="item dib num">2</div>
                <div class="item dib num">3</div>
                <div class="item dib num">4</div>
                <div class="item dib next">&gt;</div> -->
                
                {!! $cars->links() !!}
            </div>
        </div>

        <div class="dib col-6 leftContent">
            <div class="rssCars">
                <p class="rssTitle"><span class="icon"></span>订阅车源</p>
                <p class="rssDesc">找到适合您的车，我们将立即推送给您</p>
                <div class="dib-con rssOption">
                    <div class="dib label">预算</div>
                    <div class="dib combo dib-con rssCombo">
                        <input type="hidden" name="messageType"/>
                        <div class="dib text">咨询</div>
                        <div class="dib icon"></div>
                        <div class="optionList">
                            <ul>
                                <li value="benz">咨询</li>
                                <li value="benz">留言</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dib-con rssOption">
                    <div class="dib label">变速箱</div>
                    <div class="dib combo dib-con rssCombo">
                        <input type="hidden" name="messageType"/>
                        <div class="dib text">咨询</div>
                        <div class="dib icon"></div>
                        <div class="optionList">
                            <ul>
                                <li value="benz">咨询</li>
                                <li value="benz">留言</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dib-con rssOption">
                    <div class="dib label">品牌</div>
                    <div class="dib combo dib-con rssCombo">
                        <input type="hidden" name="messageType"/>
                        <div class="dib text">咨询</div>
                        <div class="dib icon"></div>
                        <div class="optionList">
                            <ul>
                                <li value="benz">咨询</li>
                                <li value="benz">留言</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dib-con rssOption">
                    <div class="dib label">车龄</div>
                    <div class="dib combo dib-con rssCombo">
                        <input type="hidden" name="messageType"/>
                        <div class="dib text">咨询</div>
                        <div class="dib icon"></div>
                        <div class="optionList">
                            <ul>
                                <li value="benz">咨询</li>
                                <li value="benz">留言</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dib-con rssOption">
                    <div class="dib label">城市</div>
                    <div class="dib combo dib-con rssCombo">
                        <input type="hidden" name="messageType"/>
                        <div class="dib text">咨询</div>
                        <div class="dib icon"></div>
                        <div class="optionList">
                            <ul>
                                <li value="benz">咨询</li>
                                <li value="benz">留言</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dib-con rssOption">
                    <div class="dib label">手机号</div>
                    <div class="dib textArea">
                        <input type="text" placeholder="请输入手机号"/>
                    </div>
                </div>
                <button class="rssSubmit">立即订阅</button>
            </div>
            <div class="leftAdd dib-con">
                <img src="../img/storeDetail/dbfile/leftAdd1.png"/>
            </div>
            <div class="hotType itemContent">
                <div class="contentTitle">热销车型排行榜</div>
                <ul class="carTypeList">
                    <a href="#">
                        <li>
                            <div class="num c1">1</div>
                            奥迪-A4
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div class="num c2">2</div>
                            奥迪-A6
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div class="num c3">3</div>
                            宝马-5系
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div class="num">4</div>
                            别克-凯越
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div class="num">5</div>
                            雪佛兰-科鲁兹
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div class="num">6</div>
                            大众-POLO
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div class="num">7</div>
                            宝马-3系
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div class="num">8</div>
                            福特-蒙迪欧
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div class="num">9</div>
                            本田-雅阁
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div class="num">10</div>
                            福特-福克斯
                        </li>
                    </a>
                </ul>
            </div>

            <div class="leftAdd dib-con">
                <img src="{{URL::asset('home/img/storeDetail/dbfile/leftAdd2.png')}}"/>
            </div>
        </div>
    </section>
</main>
@endsection
