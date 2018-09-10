@extends('show.mainnew')

@section('head_content')
    <!-- 关于我们页面 -->
    <!-- <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/list.css')}}"> -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/list.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/sale.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('newShow/css/baoming.css')}}">
    <!-- 首页脚本  -->
    <!-- <script type="text/javascript" src="../js/index.js"></script> -->
    <!-- <script type="text/javascript" src="{{URL::asset('js/tcl/home/index.js')}}"></script> -->
    <style>
        .crumbs, .crumbs a{
            font-size: 14px;
        }
    </style>

@endsection

@section('title')
    <title>二手车（中、高级）鉴定评估师特训班——招生简章</title>
    <meta name="keywords" content="二手车,二手车交易市场,二手车网上交易平台,石家庄二手车，石家庄淘车乐,石家庄二手车交易平台，石家庄二手车交易">
    <meta name="description" content="石家庄淘车乐是河北省最大的二手车交易平台,二手车源信息最真实,最值得信赖的网上二手车交易市场,提供二手车评估,二手车报价,二手车交易等相关服务,买卖二手车就上淘车乐">
@endsection


@section('content')
    <main>
    <nav class="breadNav dib-con container">
        <div class="dib item">当前位置：</div>
        <a href="{{route('show.index')}}"><div class="dib item">首页</div></a>
        <div class="dib split item">&gt;</div>
        <div class="dib item">招生简章</div>
    </nav>
    <section class="carDetail dib-con container" style="margin-top:5px;">

        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <h3 style="width: 50%;margin:0px auto">二手车（中、高级）鉴定评估师特训班——招生简章</h3>
            <p>
                <span style="font-size:18px;color:#FF6600;">一、培训时间、地点</span> 
            </p>
            <p>
                <span style="font-size:16px;letter-spacing: 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 计划培训时间：2018年10月（以正式通知为准），全程6天。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                理论/实操培训地点：淘车乐商学院（淘车乐二手车科普文化馆二楼
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">二、培训班次</span> 
            </p>
            <p>
                <span style="font-size:16px;letter-spacing: 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.二手车鉴定评估师（中级技能班）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2.二手车鉴定评估师（高级技能班）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                3.中、高级二手车鉴定评估师都可加考注册证</span> 
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">三、培训主要内容（中级评估师培训班）</span> 
            </p>
            <p>
                <span style="font-size:16px;letter-spacing: 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.汽车的定义及车身结构
                2.汽车的主要技术参数与性能指标<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                3.汽车的布置与驱动<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                4.发动机的原理及结构<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                5.车身电器的指认<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                6.二手车手续的基本检查<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                7.二手车仪器仪表使用<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                8.二手车鉴定评估作业流程<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                9.二手车静态检查（按照国标讲解）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                10.事故车鉴定评估<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                11.二手车技术状况鉴定二手车实操演练、评估报告撰写 </span> 
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">四、考核方式</span> 
            </p>
            <p>
                 <span style="font-size:16px;letter-spacing: 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.理论知识考试：闭卷必答形式，百分制；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    2.技能操作考试：实际操作和现场答辩形式，百分制；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    两项成绩皆达60分及以上，为考试合格。 </span>  
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">五、证书颁发</span> 
            </p>
            <p>
                <span style="font-size:16px;letter-spacing: 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 经过学习培训，理论考试和实操考核均合格学员，可以获得由中国汽车流通协会颁发的《二手车鉴定评估师岗位技能证书》。
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                权威证书，全国认可，联网可查。</span> 
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">六、费用与收款</span> 
            </p>
            <p>
                <span style="font-size:16px;letter-spacing: 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 培训及证书工本费（含教材费、报名费、培训费、考务费）：
                中级4000元/人，高级4800元/人。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                报名时交定金：500元/人，培训报到时补齐剩余款项。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                收款人淘车乐总部：曹志霞。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                注：学院食宿自理。</span> 
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">七、报名条件</span> 
            </p>
            <p>
                <span style="font-size:16px;letter-spacing: 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.中级二手车鉴定评估师报考条件：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                （持有《中华人民共和国机动车驾驶证》C1照以上并具备以下条件之一者）：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ①持有《中华人民共和国机动车驾驶证》B1照以上并连续从事本岗位技能水平工作4年以上；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ②取得初级二手车鉴定评估师岗位技能水平证书后，连续从事本职业工作3年以上；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ③具有中等专科学校毕业证书，连续从事本职业工作2年以上；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ④具有大专以上毕业证书，连续从事本职业工作1年以上；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ⑤具有本科以上毕业证书。
                 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span style="font-size:16px;letter-spacing: 1px;">
                 2.高级二手车鉴定评估师报考条件：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                （持有《中华人民共和国机动车驾驶证》C1照以上并具备以下条件之一者）：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ①持有《中华人民共和国机动车驾驶证》A1、A2照以上并连续从事本岗位技能水平工作6年以上；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ②取得中级二手车鉴定评估师岗位技能水平证书后，连续从事本职业工作3年以上；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ③具有大专以上学历证书，取得中级二手车鉴定评估师岗位技能水平证书后，连续从事本职业工作2年以上；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ④具有本科以上学历证书，取得中级二手车鉴定评估师岗位技能水平证书后，连续从事本职业工作1年以上。</span> 

            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">八、报名材料要求</span> 
            </p>
            <p>
                <span style="font-size:16px;letter-spacing: 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.《岗位技能培训申请表》原件及扫描件；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2.最高学历毕业证书复印件或扫描件；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                3.工作年限证明原件及扫描件；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                4.身份证、驾照复印件或扫描件；<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                5.近期免冠2寸蓝底彩照4张及同版电子照片。</span> 
            </p>
        </div>
        <div style="font-size: 16px;background: #f0f0f0;padding: 20px 37px 20px;line-height:30pt;">
            <p>
                <span style="font-size:18px;color:#FF6600;">九、报名咨询</span> 
            </p>
            <p>
                <span style="font-size:16px;letter-spacing: 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                招生联系人：淘车乐总部   曹志霞 （15176929517）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                招生咨询电话：400-670-6969<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                电子版报名材料：报名时发送至邮箱：531629980@qq.com<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                纸版报名材料：须根据通知另行提交。</span> 
            </p>
        </div>
    </section>
</main> 
@endsection
