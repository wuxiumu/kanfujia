
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Redis - vue study</title>
<script src="https://cdn.bootcss.com/vue/2.4.2/vue.min.js"></script>
<script src="https://cdn.bootcss.com/vue-router/2.7.0/vue-router.min.js"></script>

<style>
.class1{
  background: #444;
  color: #eee;
}
</style>
</head>
<body>
<p>
 http://imagick.meiyoufan.com/index.php?c=demo&a=write_Image&param=007&logo=19<br>
 param=001-009<br>
 logo=01-19<br>
<div id = "imagick_props">
         param : <input id="param" type = "number"  step="000" v-model = "param">{{param}}<br>
         logo :  <input id="logo" type = "number"   step="00"  v-model = "logo">{{logo}}
</div>
 <img id="imagick" src="http://imagick.meiyoufan.com/index.php?c=demo&a=write_Image&param=001&logo=02" style="width:30%;">

</p>


<div id = "computed_props">
         千米 : <input type = "text" v-model = "kilometers">
         米 : <input type = "text" v-model = "meters">
</div>
<p id="info"></p>

<div id="app">
  <runoob></runoob>
  <meiyoufan></meiyoufan>
  <!-- 下拉选择 start -->
  <select v-model="selected" name="fruit">
    <option value="">选择一个网站</option>
    <option value="www.runoob.com">Runoob</option>
    <option value="www.google.com">Google</option>
  </select>
  <div id="output">
      选择的网站是: {{selected}}
  </div>
  <!-- 下拉选择 end -->

  <!-- 单选按钮  start -->
  <input type="radio" id="runoob" value="Runoob" v-model="picked">
  <label for="runoob">Runoob</label>
  <br>
  <input type="radio" id="google" value="Google" v-model="picked">
  <label for="google">Google</label>
  <br>
  <span>选中值为: {{ picked }}</span>
  <!-- 单选按钮  end -->

  <!-- 复选框 start -->
  <p>单个复选框：</p>
  <input type="checkbox" id="checkbox" v-model="checked">
  <label for="checkbox">{{ checked }}</label> 
  <p>多个复选框：</p>
  <input type="checkbox" id="runoob" value="Runoob" v-model="checkedNames">
  <label for="runoob">Runoob</label>
  <input type="checkbox" id="google" value="Google" v-model="checkedNames">
  <label for="google">Google</label>
  <input type="checkbox" id="taobao" value="Taobao" v-model="checkedNames">
  <label for="taobao">taobao</label>
  <br>
  <span>选择的值为: {{ checkedNames }}</span>
  <!-- 复选框 end -->

  <p>input 元素：</p>
  <input v-model="message" placeholder="编辑我……">
  <p>消息是: {{ message }}</p>
  
  <p>textarea 元素：</p>
  <p style="white-space: pre">{{ message01 }}</p>
  <textarea v-model="message01" placeholder="多行文本输入……"></textarea>

  <button v-on:click="greet">Greet</button>
   <button v-on:click="say('hi')">Say hi</button>
  <button v-on:click="say('what')">Say what</button>
  <button v-on:click="counter += 1">增加 1</button>
  <p>这个按钮被点击了 {{ counter }} 次。</p>  
  <p v-if="ok"><pre><a v-bind:href="url">美有范</a></pre></p>
  <label for="r1">{{ message01 | capitalize }}</label><br>
  <button v-on:click="reverseMessage">反转字符串</button><br>
  <input v-model="message">
  <input type="checkbox" v-model="class1" id="r1">
  <br><br>
  <div v-bind:class="{'class1': class1}">
    directiva v-bind:class
  </div>


    {{5+5}}<br>
  {{ ok ? 'YES' : 'NO' }}<br>
  {{ message.split('').reverse().join('') }}
  <div v-bind:id="'list-' + id">Redis - vue study</div>

  <div v-if="Math.random() > 0.5">
    Sorry
  </div>
  <div v-else>
    Not sorry
  </div>
   <div v-if="type === 'A'">
      A
  </div>
  <div v-else-if="type === 'B'">
    B
  </div>
  <div v-else-if="type === 'C'">
    C
  </div>
  <div v-else>
    Not A/B/C
  </div>

  <ol>
      <li v-for="site in sites">
        {{ site.name }}
      </li>
    </ol>

 <!-- 模板中使用 v-for： -->
  <ul>
  <template v-for="site in sites">
    <li>{{ site.name }}</li>
    <li>--------------</li>
  </template>
  </ul>
  <!-- v-for 迭代对象 -->
    <ul>
      <li v-for="value in object">
      {{ value }}
      </li>
    </ul>

  <ul>
      <li v-for="(value, key) in object">
      {{ key }} : {{ value }}
      </li>
  </ul>

  <ul>
      <li v-for="(value, key, index) in object">
       {{ index }}. {{ key }} : {{ value }}
      </li>
    </ul>

    <ul>
      <li v-for="n in 10">
       {{ n }}
      </li>
   </ul>
     <p>原始字符串: {{ message }}</p>
     <p>计算后反转字符串: {{ reversedMessage }}</p>
     <p>{{ site }}</p>

</div>
  


    <script>
    // 注册
    Vue.component('runoob', {
      template: '<h1>自定义组件001-全局组件!</h1>'
    })
    
    var Child = {
      template: '<h1>自定义组件002-局部组件!</h1>'
    }
    new Vue({
    
      el: '#app',
      data:{
        class1: false,
        message: '改变颜色',
        message01: 'meiyoufan',
        ok: true,
      id : 1,
      counter: 0,
      name: 'Google',
      url: 'https://meiyoufan.com',
      src: 'http://imagick.meiyoufan.com/index.php?c=demo&a=write_Image&param=001&logo=02',
      imgUrl: 'http://imagick.meiyoufan.com/index.php?c=demo&a=write_Image&param=001&logo=02',
      type: 'A',
      checked : false,
        checkedNames: [],
        picked : 'Runoob',
        selected : '',
      sites: [
          { name: 'Runoob' },
          { name: 'Google' },
          { name: 'Taobao' }
        ],
        object: {
          name: '贵有恒',
          url: 'https://meiyoufan.com',
          slogan: '学的不仅是技术，更是梦想！'
        }
      },
      methods: {
        reverseMessage: function () {
          this.message = this.message.split('').reverse().join('')
        },
        greet: function (event) {
          // `this` 在方法里指当前 Vue 实例
          alert('Hello ' + this.name + '!')
          // `event` 是原生 DOM 事件
        if (event) {
          alert(event.target.tagName)
        }
        },
        say: function (message) {
          alert(message)
        }
      },
      filters: {
        capitalize: function (value) {
          if (!value) return ''
          value = value.toString()
          return value.charAt(0).toUpperCase() + value.slice(1)
        }
      },
      computed: {
        // 计算属性的 getter
        reversedMessage: function () {
          // `this` 指向 vm 实例
          return this.message.split('').reverse().join('')
        },
        site: {
          // getter
          get: function () {
            return this.name + ' ' + this.url
          },
          // setter
          set: function (newValue) {
            var names = newValue.split(' ')
            this.name = names[0]
            this.url = names[names.length - 1]
          }
        }
      },
      components: {
        // <meiyoufan> 将只在父模板可用
        'meiyoufan': Child
      }
    
    });
    
     
    </script>
    
    <script type = "text/javascript">
     var vm = new Vue({
        el: '#computed_props',
        data: {
           kilometers : 0,
           meters:0
        },
        methods: {
        },
        computed :{
        },
        watch : {
           kilometers:function(val) {
              this.kilometers = val;
              this.meters = val * 1000;
           },
           meters : function (val) {
              this.kilometers = val/ 1000;
              this.meters = val;
           }
        }
     });
     // $watch 是一个实例方法
    vm.$watch('kilometers', function (newValue, oldValue) {
      // 这个回调将在 vm.kilometers 改变后调用
        document.getElementById ("info").innerHTML = "修改前值为: " + oldValue + "，修改后值为: " + newValue;
    })
    </script>
    <script type = "text/javascript">
     var vm = new Vue({
        el: '#imagick_props',
        data: {
           param : '001',
           logo:'01',
           imgUrl: 'http://imagick.meiyoufan.com/index.php?c=demo&a=write_Image&param=001&logo=02'
        },
        methods: {
        },
        computed :{
        },
        watch : {
           param:function(val) {
              this.param = val;
              var val_=document.getElementById("logo").value;
              var url="http://imagick.meiyoufan.com/index.php?c=demo&a=write_Image&param="+val+"&logo="+val_;
              document.getElementById("imagick").src=url;
           },
           logo : function (val) {
              this.logo = val
              var val_=document.getElementById("param").value;
              var url="http://imagick.meiyoufan.com/index.php?c=demo&a=write_Image&param="+val_+"&logo="+val;
              document.getElementById("imagick").src=url;
           }
        }
     });
     // $watch 是一个实例方法
    vm.$watch('kilometers', function (newValue, oldValue) {
      // 这个回调将在 vm.kilometers 改变后调用
        document.getElementById ("info").innerHTML = "修改前值为: " + oldValue + "，修改后值为: " + newValue;
    })
    </script>
</body>
</html>
