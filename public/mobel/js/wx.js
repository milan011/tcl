$(document).ready(function(){
        
    wx.config({
            debug: false,
            appId: '{{$weixsdk["appId"]}}',
            timestamp: {{$weixsdk['timestamp']}},
            nonceStr: '{{$weixsdk["nonceStr"]}}',
            signature: '{{$weixsdk["signature"]}}',
            jsApiList: [
                'checkJsApi',
                'onMenuShareTimeline',
                'onMenuShareAppMessage',
                'onMenuShareQQ',
                'onMenuShareWeibo',
                'hideMenuItems',
                'showMenuItems',
                'hideAllNonBaseMenuItem',
                'showAllNonBaseMenuItem',
                'translateVoice',
                'startRecord',
                'stopRecord',
                'onRecordEnd',
                'playVoice',
                'pauseVoice',
                'stopVoice',
                'uploadVoice',
                'downloadVoice',
                'chooseImage',
                'previewImage',
                'uploadImage',
                'downloadImage',
                'getNetworkType',
                'openLocation',
                'getLocation',
                'hideOptionMenu',
                'showOptionMenu',
                'closeWindow',
                'scanQRCode',
                'chooseWXPay',
                'openProductSpecificView',
                'addCard',
                'chooseCard',
                'openCard'
            ]
        });
    
        wx.ready(function () {
            // 在这里调用 API
            // 1 判断当前版本是否支持指定 JS 接口，支持批量判断
            // document.querySelector('#checkJsApi').onclick = function () {
              wx.checkJsApi({
                jsApiList: [
                    'getNetworkType',
                    'previewImage',
                    'onMenuShareTimeline',
                    'onMenuShareAppMessage',
                    'onMenuShareQQ',
                    'onMenuShareWeibo'
                ],
                success: function (res) {
                  // alert(JSON.stringify(res));
                }
              });
            // };
            // 2. 分享接口
            // 2.1 监听“分享给朋友”，按钮点击、自定义分享内容及分享结果接口
            // 分享到朋友圈
            wx.onMenuShareAppMessage({
                title: '淘车乐',
                desc: '卖车人的故事讲给买车人听',
                link: 'http://m.sjztcl.com',
                imgUrl: 'http://www.sjztcl.com/getheadimg.png',
                trigger: function (res) {
                  // alert('用户点击发送给朋友');
                },
                success: function (res) {
                  // alert('已分享');
                },
                cancel: function (res) {
                  // alert('已取消');
                },
                fail: function (res) {
                  // alert(JSON.stringify(res));
                }
            });

        // 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
            wx.onMenuShareTimeline({
            title: '淘车乐',
            link: 'http://m.sjztcl.com',
            imgUrl: 'http://www.sjztcl.com/getheadimg.png',
            trigger: function (res) {
              // alert('用户点击分享到朋友圈');
            },
            success: function (res) {
              // alert('已分享');
            },
            cancel: function (res) {
              // alert('已取消');
            },
            fail: function (res) {
              alert(JSON.stringify(res));
            }
          });
        // 2.3 监听“分享到QQ”按钮点击、自定义分享内容及分享结果接口
        wx.onMenuShareQQ({
          title: '淘车乐',
          desc: '卖车人的故事讲给买车人听',
          link: 'http://m.sjztcl.com',
          imgUrl: 'http://www.sjztcl.com/getheadimg.png',
          trigger: function (res) {
            // alert('用户点击分享到QQ');
          },
          complete: function (res) {
            // alert(JSON.stringify(res));
          },
          success: function (res) {
            // alert('已分享');
          },
          cancel: function (res) {
            // alert('已取消');
          },
          fail: function (res) {
            // alert(JSON.stringify(res));
          }
        });
      
      // 2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口
        wx.onMenuShareWeibo({
            title: '淘车乐',
            desc: '卖车人的故事讲给买车人听',
            link: 'http://m.sjztcl.com',
            imgUrl: 'http://www.sjztcl.com/getheadimg.png',
            trigger: function (res) {
              // alert('用户点击分享到微博');
            },
            complete: function (res) {
              // alert(JSON.stringify(res));
            },
            success: function (res) {
              // alert('已分享');
            },
            cancel: function (res) {
              // alert('已取消');
            },
            fail: function (res) {
              // alert(JSON.stringify(res));
            }
        });
        // 获取当前地理位置
        /*wx.getLocation({
            success: function (res) {
                alert(JSON.stringify(res));
            },
            cancel: function (res) {
                alert('用户拒绝授权获取地理位置');
            },
            fail: function (res) {
              alert('获取地理位置失败');
            }
        });*/
    });
    
        wx.error(function (res) {
            alert(res.errMsg);
        });
});