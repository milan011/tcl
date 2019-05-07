<?php
use App\Area;

//打印测试数据函数
function p($s)
{

    echo '<pre>';
    var_dump($s);
    echo '</pre>';
}

// 获取最后一条sql
function lastSql()
{

    $sql = DB::getQueryLog();

    $query = end($sql);

    return $query;
}

//处理权限信息，按功能分类
function getPermissionByModel($permissions)
{

    /*处理步骤：1、将所有权限slug获取得到新数组，将其中每一个元素按'.'分割，获得新数组。
    2、去除新数组中重复元素。
    3、循环新数组，将权限信息每一个权限slug与slug前缀匹配。
    4、最终数组键为slug'.'前的部分，值为与前缀匹配的数组。*/

    $slug            = array(); //定义slug数组
    $slug_pre        = array(); //定义slug前缀数组
    $permissions_del = array(); //返回的处理后的数组
    $chunk_num       = 0; //权限分2个区域，每个区域数目应为总数目的一半

    foreach ($permissions as $key => $permission) {

        $slug[] = $permission->slug;
    }

    // 遍历slug数组，只保留'.'前面的前缀
    foreach ($slug as $key => $value) {

        $pre        = explode('.', $value);
        $slug[$key] = $pre[0];
    }

    //去除重复元素
    $slug_pre  = collect($slug)->unique();
    $chunk_num = ((int) ($slug_pre->count() / 2)) + 1;

    // dd(((int)($slug_pre->count()/2)) + 1);

    //遍历权限前缀数组，配置所有权限信息并分类
    foreach ($slug_pre as $key => $value) {

        $filtered = $permissions->filter(function ($item) use ($value) {

            // 获得权限前缀
            $pre = explode('.', $item->slug);
            // p($pre[0]);
            if ($pre[0] == $value) {

                return $item;
            }
        });

        // dd($filtered->all());

        $permissions_del[$value] = $filtered->all();
    }

    return collect($permissions_del)->chunk($chunk_num);
}

/**
 * Get the validation rules that apply to the request.
 * 返回关联表指定字段
 * $relation:定义的关联名称,如:hasOneShop
 * Array $columns 指定的字段
 * @return array
 */
function tableUnionDesign($relation, array $columns)
{

    $desing = array();

    $desing[$relation] = (function ($query) use ($columns) {
        $query->select($columns);
    });

    return $desing;
}

/**
 * 返回允许用户添加的用户
 * $role_id:角色ID
 * @return array
 */
function getUserAddAllowList($role_id)
{

    // dd($role_id);
    //返回允许添加用户列表
    $allow_list = array();

    switch ($role_id) {
        case '1':
            # 超级管理员，可添加所有用户
            $allow_list = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14'];
            break;

        case '2':
            # 总部管理员，可添加除超级管理员和总部管理员以外用户
            $allow_list = ['3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14'];
            break;

        case '6':
            # 门店店长，可添加属于本门店店员
            $allow_list = ['7'];
            break;

        default:
            # 不允许添加用户
            $allow_list = [];
            break;
    }
    return $allow_list;
}

/**
 * 返回可读性更好的文件尺寸
 */
function human_filesize($bytes, $decimals = 2)
{
    $size   = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}

/**
 * 判断文件的MIME类型是否为图片
 */
function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}

/**
 * 获得车源、销售机会、求购,贷款编号
 */
function getCarCode($type = 'car')
{
    // 车源编号为Unix时间戳后9位
    if ($type == 'car') {
        $code = 'C-';
    } else if ($type == 'want') {
        $code = 'Q-';
    } else if ($type == 'chance') {
        $code = 'J-';
    } elseif ($type == 'loan') {
        $code = 'D-';
    } elseif ($type == 'insurance') {
        $code = 'B-';
    }

    $date = (string) (time());
    $date = substr($date, 1);

    $code .= $date;

    return $code;
}

/**
 * 传入2个数组，返回其差异
 */
function getDiffArray($arr, $arr_compare)
{

    $update_info  = collect($arr)->forget(['_token', '_method']);
    $current_info = collect($arr_compare);

    /*dd($update_info);
    dd($current_info);
    dd($update_info->diffKeys($current_info));*/

    foreach ($update_info as $key => $value) {

        if ($current_info[$key] == $value) {

            $update_info->forget($key);
        }
    }
    // exit;
    // dd($update_info);

    return $update_info;
    // return collect($arr)->diff(collect($arr_compare))->forget(['_token', '_method']);
}

//json解码
function decodeUnicode($str)
{

    return preg_replace_callback('/\\\\u([0-9a-f]{4})/i',
        create_function(
            '$matches',
            'return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UCS-2BE");'
        ),
        $str);
}

//获得交易伙伴信息
function getPartnerInfo($car_creater, $want_creater, $creater)
{

    $partner = array();

    if ($car_creater == $want_creater) {

        $partner['self'] = true;
    } else {
        if ($car_creater == $creater) {
            // 发起者提供求购

            $partner['self']    = false;
            $partner['want']    = true;
            $partner['user_id'] = $want_creater;
        } else {

            // 发起者提供车源
            $partner['self']    = false;
            $partner['want']    = false;
            $partner['user_id'] = $car_creater;
        }
    }

    return $partner;
}

//获得车龄
function getCarAge($plate_date)
{

    /*dd(Carbon::parse($requestData->plate_date));
    dd(Carbon::now());*/
    $plate = Carbon::parse($plate_date); //上牌日期对象
    $now   = Carbon::now(); //当前日期对象

    $plate_year  = $plate->year;
    $plate_month = $plate->month;
    $now_year    = $now->year;
    $now_month   = $now->month;

    if (($now_month - $plate_month) < 0) {
        $now_month = $now_month + 12;
        $now_year  = $now_year - 1;
    }

    $dissimilarity_month = $now_month - $plate_month;
    $dissimilarity_year  = $now_year - $plate_year;

    $return_date = $dissimilarity_year + round(($dissimilarity_month / 12), 1);

    return $return_date;
}

//获得过期日期
function getExpiredDate()
{

    $date = Carbon::parse('4 days ago')->toDateTimeString();

    return $date;
}

//获得字符串首字母,即筛选项目
function getConditionType($str)
{

    return substr($str, 0, 1);
}

//获得字符串首个字符后的部分,即筛选条件
function getConditionContent($str)
{

    return substr($str, 1);
}

//生成超级链接
function getSelectUrl($conditions)
{
    // $base_url   = route('home.cate.index'). '/';
    $base_url   = route('show.cate.index') . '/';
    $brand_url  = '';
    $orther_url = '';

    //dd($base_url);
    // p($conditions);

    if (!empty($conditions['c'])) {
        $brand_url = 'c' . $conditions['c'] . '/';
        unset($conditions['c']);
        unset($conditions['b']);
    } elseif (!empty($conditions['b'])) {
        $brand_url = 'b' . $conditions['b'] . '/';
        unset($conditions['b']);
        unset($conditions['c']);
    }

    $url = $base_url . $brand_url;

    foreach (array_filter($conditions) as $key => $value) {
        $orther_url .= $key . $value . '-';
    }

    $url .= $orther_url;
    // dd(substr($url,0,strlen($url)-1));
    return substr($url, 0, strlen($url) - 1);
}

// 根据ip获得用户所在城市
function getCurrentCityByIp($ip)
{

    //$city_info = file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip=' . $ip);
    //$city_info = json_decode($city_info, true);
    /*dd($city_info);
    dd($city_info['data']['city']);*/

    $ip2region     = new Ip2Region();
    $city_info     = $ip2region->btreeSearch($ip);
    $city_info_arr = explode("|", $city_info['region']);
    $city_name     = substr($city_info_arr[3], 0, (strlen($city_info_arr[3]) - 3));
    $current_city  = Area::where('name', $city_name)->first();

    // dd($current_city);

    return $current_city;
}

//车源来自城市信息,城市信息,城市门店列表等
function getSelCity($city = '', $shop)
{

    $sel_city  = []; //返回的城市信息
    $shop_list = []; //返回城市门店列表

    //若选择城市,则显示选择的城市信息,若没有选择,则为用户所在城市信息
    if (!empty($city)) {
        // p('hh');
        $city_info = Area::select('name', 'id')->find($city);
        // p(Session::all());
        if(empty($city_info)){
        	session(['chosen_city_name' => '石家庄']);
        	session(['chosen_city_id' => '138']);
        }else{
        	session(['chosen_city_name' => $city_info->name]);
        	session(['chosen_city_id' => $city_info->id]);
        }
        
        // dd(Session::all());
    } else {
        // p('xixi');
        session(['chosen_city_name' => null]);
        session(['chosen_city_id' => null]);
    }
    // dd(Session::all());
    $sel_city_id   = (null !== Session('chosen_city_id')) ? Session('chosen_city_id') : Session('current_city');
    $sel_city_name = (null !== Session('chosen_city_name')) ? Session('chosen_city_name') : Session('current_city_name');

    $city_shops = $shop->getShopsInCity($sel_city_id);
    // dd(count($city_shops));
    if (count($city_shops) == 0) {

        $city_shops = $shop->getShopsInProvence('10');
    }

    // dd($city_shops);

    // $city_shops = $this->shop->getShopsInProvence('10');

    foreach ($city_shops as $key => $value) {
        $shop_list[] = $value->id;
    }

    // dd($shop_list);

    $sel_city['show_city_id']   = $sel_city_id;
    $sel_city['show_city_name'] = $sel_city_name;
    $sel_city['shop_list']      = $shop_list;

    return $sel_city;
}

//判断是否奇数
function is_odd($num)
{

    $num = (int) $num;

    if (is_numeric($num) & ($num & 1) == 1) {

        return true;
    } else {

        return false;
    }
    // return (is_numeric($num)&($num&1));
}

// 判断访问来源是否
function isMobile()
{
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
        return true;
    }
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset($_SERVER['HTTP_VIA'])) {
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false; // 找不到为flase,否则为TRUE
    }
    // 判断手机发送的客户端标志,兼容性有待提高
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array(
            'mobile',
            'nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
        );
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }
    if (isset($_SERVER['HTTP_ACCEPT'])) {
        // 协议法，因为有可能不准确，放到最后判断
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
            return true;
        }
    }
    return false;
}

function getClientIpss()
{
    if (!empty($_SERVER["HTTP_CLIENT_IP"])) {

        $cip =$_SERVER["HTTP_CLIENT_IP"];

    } elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } elseif(!empty($_SERVER["REMOTE_ADDR"])) {

        $cip=$_SERVER["REMOTE_ADDR"];

    } else {

        $cip="无法获取！";
    }

    return $cip;
}
