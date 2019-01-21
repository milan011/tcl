<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- import CSS -->
  <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
  <style>
  .el-header, .el-footer {
    background-color: #B3C0D1;
    color: #333;
    text-align: center;
    line-height: 60px;
  }
  
  .el-aside {
    background-color: #D3DCE6;
    color: #333;
    text-align: center;
    line-height: 200px;
  }
  
  .el-main {
    background-color: #E9EEF3;
    color: #333;
    text-align: center;
    line-height: 160px;
  }
  
  body > .el-container {
    margin-bottom: 40px;
  }
  
  .el-container:nth-child(5) .el-aside,
  .el-container:nth-child(6) .el-aside {
    line-height: 260px;
  }
  
  .el-container:nth-child(7) .el-aside {
    line-height: 320px;
  }
</style>
</head>
<body>
  <div id="app">
    <el-container>
      <el-header>淘车乐首届二手车拍卖大会</el-header>
      <el-main>
        <el-row>
          <el-col :span="24"><div class="grid-content bg-purple-dark">
            拍卖会介绍
          </div></el-col>
        </el-row>
        <el-row>
          <el-col :span="24"><div class="grid-content bg-purple-dark">
            图片介绍
          </div></el-col>
        </el-row>
        <el-row>
          <el-col :span="24"><div class="grid-content bg-purple-dark">
            拍卖流程
          </div></el-col>
        </el-row>
        <el-dialog :visible.sync="visible"  title="拍卖报名">
          <el-form ref="dataForm" :rules="rules" :model="temp" label-position="left" label-width="100px" style="width: 100%;">
            <el-form-item label="姓名:" prop="name">
              <el-input v-model="temp.name"/>
            </el-form-item>
            <el-form-item label="电话" prop="telephone">
              <el-input v-model="temp.telephone"/>
            </el-form-item>
          </el-form>
      <div slot="footer" class="dialog-footer">
        <el-button style="width:100%;" type="primary" @click="createData">确定</el-button>
      </div>
        </el-dialog>
      </el-main>
      <el-footer>
        <el-button style="width:100%;" type="success" size="medium" @click="visible = true">点击报名</el-button>
      </el-footer>
    </el-container>
    
  </div>
</body>
  <!-- import Vue before Element -->
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <!-- import JavaScript -->
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
  <<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    const validateTelephone = (rule, value, callback) => {
      const re = /^1[0-9]{10}$/
      if (!re.test(value)) {
        callback(new Error('请输入正确格式手机号'))
      } else {
        callback()
      }
    }
    new Vue({
      el: '#app',
      data: function() {
        return { 
          visible: false,
          temp: {
            name: '王晨光',
            telephone: '13731080174',
          },
          rules: {
            name: [
              { required: true, message: '请填写您的姓名', trigger: 'change' },
            ],
            telephone: [
              { required: true, message: '请输入有效手机号', trigger: 'change' }, 
              { validator: validateTelephone, trigger: 'change' }     
            ],
          },
        }
      },
      methods: {
        createData(){
          /*const validateTelephone = (rule, value, callback) => {
            const re = /^1[0-9]{10}$/
            if (!re.test(value)) {
              callback(new Error('请输入正确格式手机号'))
            } else {
              callback()
            }
          },*/
          this.$refs['dataForm'].validate((valid) => {
            if (valid) {
              this.baoMinInfo()
            }
          })
          console.log(this.temp)
        },
        baoMinInfo(){
          //发送 post 请求
          /*this.$http.post('/sale/store',{name: this.temp.name,telphone:this.temp.telphone},{emulateJSON:true}).then(function(res){
            document.write(res.body);    
          },function(res){
            console.log(res.status);
          });*/

          axios.post('/sale/storePaiMai', {
            name: this.temp.name,
            telephone: this.temp.telephone
          })
          .then(function (response) {
            // console.log(response.data);
            /*this.$alert(response.data.msg, '报名成功', {
              confirmButtonText: '确定',
              callback: action => {
                
              }
            });*/
            alert(response.data.msg);
            window.location.href="http://m.sjztcl.com"
          })
          .catch(function (error) {
            console.log(error);
          });
        }
      }
    })
  </script>
</html>