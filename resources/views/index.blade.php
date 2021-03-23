<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>招南银行</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.staticfile.org/vue/3.0.5/vue.global.js"></script>
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        * {
            margin: 0 auto;
            padding: 0;
        }
        .top{
            width: 100%;
            float: top;
        }
        .goods{
            float: left;
            margin-left: 480px;
        }
        .main{
            width: 60%;
            height: 200px;
            text-align: center;
            /*border: 1px red solid;*/
            margin-top: 30px;
        }
        .card{
            width: 35%;
            height: 200px;
            /*border: #008800 1px solid;*/
            float: left;
            margin-left: 120px;

        }
        .card—img{
            float: left;
            margin-top: 35px;
        }
        .card-text{
            float: right;
            margin-top: 50px;
        }
        h3,p{
            margin: 5px;
        }
        a{
            text-decoration: none;
            border-radius: 5px;
            color: white;
            background-color: #CA0433;
            font-weight: 800;
            display: block;
            width: 80px;
            height: 30px;
            text-align: center;
            line-height: 30px;
        }
        .bottom{
            float: bottom;
        }

    </style>
</head>
<body>
<div id="bank">
    <div class="top">
        <img src="/image/top.png" alt="">
    </div>

    <div class="goods">
        <a href="">商城</a>
    </div>

    <div class="main">
        <div class="card" v-for="item in info">
            <div class="card—img">
                <img :src="item.pic" alt="" style="width: 190px">
            </div>
            <div class="card-text">
                <h3>@{{ item.title }}</h3>
                <p>
                    @{{ item.desc}}
                </p>
                <a href="">立即申请</a>
{{--                http://market.cmbchina.com/ccard/xyksq/images/pagecontent-main-row11-2.png--}}
            </div>
        </div>
    </div>

    <div class="bottom">
        <img src="/image/bottom.png" alt="">
    </div>
</div>
</body>
</html>
<script>
    const app = {
        data() {
            return {
                info: []
            }
        },
        mounted () {
            axios
                .get("{{url('card')}}")
                .then(response => (
                    this.info = response.data.data
                ))
                .catch(function (error) { // 请求失败处理
                    console.log(error);
                });
        }
    }

    Vue.createApp(app).mount('.main')
</script>
