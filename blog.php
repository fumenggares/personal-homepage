<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>跳转中...</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
            font-family: Arial, sans-serif;
            /* 设置字体 */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.5);
            /* 压暗背景 */
        }

        #backgroundImage {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            background-size: cover;
            opacity: 0;
            /* 初始透明度为0，隐藏图片 */
            transition: opacity 2s ease-in-out;
            /* 设置渐显的过渡效果 */
        }

       .content {
            text-align: center;
            color: #fff;
            z-index: 100;
        }

       .content h2 {
            margin-bottom: 20px;
        }

       .content p {
            font-size: 18px;
            margin-bottom: 20px;
        }

       .loader {
            border: 5px solid #f3f3f3;
            /* 浅色部分 */
            border-top: 5px solid #3498db;
            /* 蓝色部分 */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            margin: 20px auto;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* 添加一个类，用于在页面加载完成后添加到body元素上，触发背景图片渐显效果 */
        body.loaded #backgroundImage {
            opacity: 1;
        }
    </style>
</head>

<body>

    <div class="content">
        <h2>正在跳转...</h2>
        <p>请等待，您将被跳转到我的博客。</p>
        <div class="loader"></div>
        <!-- 加载圆圈 -->
    </div>

    <script>
        window.onload = function () {
            setTimeout(function () {
                window.location.href = "https://blog.hiyy.top";
            }, 50);
            // 50毫秒后跳转
        };
    </script>

</body>

</html>