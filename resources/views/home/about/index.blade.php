@extends('home.main')

@section('head_content')
    <!-- 详情页样式 -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/tcl/home/joinIn.css')}}">
@endsection

@section('title')
    @section('title')
    <title>{{$title}}</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
@endsection
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
        <div class="dib item">关于我们</div>
    </nav>
    <section class="carDetail dib-con container" style="margin-top:5px;">
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">关于淘车乐</span> 
            </p>
            <p>
                <span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 淘车乐二手车交易有限公司成立于2011年9月，公司以“诚实信用  合作共赢，透明交易，连锁经营”的理念，打破传统的二手车交易模式，配以旗下“定盘星”二手车鉴定评估有限公司，一站式服务，让买车卖车更加便捷放心。五年多的时间，公司累计销售二手车十几万辆，现已建立了网上销售平台—淘车乐官方网站,并成立淘车乐二手车服务中心，加盟连锁店接近60家，客户遍布北京、河北、新疆、浙江、吉林、黑龙江、山西、陕西等多个省份并与荣华集团、广汇集团、晨阳集团、冀中合力等旗下数十家4S店进行深度合作，实现了线上线下的有效结合。</span> 
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">我们的宗旨</span> 
            </p>
            <p>
                <span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 透明交易  全国连锁   我们的理念： 诚实信用  合作共赢。</span> 
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">我们的愿景</span> 
            </p>
            <p>
                <span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 打造全国最大、最好、最具特色的二手车交易服务平台！</span> 
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">公司目前的业务</span> 
            </p>
            <p>
                <img style="margin: auto 10%;" src="{{URL::asset('home/img/common/fuwu.png')}}"/> 
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">淘车乐二手车的优势</span> 
            </p>
            <p>
                <span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.执照资质全：淘车乐公司是河北省内知名的二手车交易平台，起步比较早，资质比较全。目前淘车乐是河北省内唯一的中国人民共和国商务部商业特许经营备案的二手车交易企业。
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.评估专业：公司与定盘星二手车鉴定评估有限公司合作河北省二手车评估师培训项目，已经从这个平台走出去上百位高级评估师。公司的郜彦刚老师和邵海军老师是河北省内最知名最专业的两位评估师，在省内二手车评估圈享有很高的知名度。
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. 宣传广业务广：2016年公司与中国银行深度合作开展二手车分期业务，为国有银行开展二手车业务树立了标杆。在宣传上公司还与河北电视台、河北交通广播（FM99.2）、石家庄交通广播（FM94.6）、河北农民广播（FM98.1）、燕赵晚报、二手车之家、淘车网、第一车网、华夏二手车网、搜狐汽车、58同城、赶集网等多家媒体和网站进行深度合作，得到业内人士及广大客户的认可
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.线下店面多信息多：公司网点已经有60多家，每天都有许多咨询加盟的客户。业务开展到各个社区及县城，能够实现信息共享充分体现信息价值。</span> 
            </p>
        </div>
    </section>
</main> 
@endsection
