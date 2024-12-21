<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta name="description" content="欢迎来到柚柠可-Yonic的个人主页，这里记录了我的博客、技术文章和个人项目。">
  <meta name="keywords" content="柚柠可, Yonic, 个人主页, 博客, 技术文章, 编程, 、设计, 个人项目">
  <!-- 其他头部信息 -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>柚柠可-Yonicの个人主页</title>
  <link rel="icon" href="https://logo.hiyy.top/favicon.ico" type="image/x-icon">
  <!-- 设置网页图标 -->
  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
      background: rgba(0, 0, 0, 0.5);
      /* 压暗背景 */
      font-family: Arial, sans-serif;
      /* 设置字体 */
    }

    #backgroundVideo {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: -100;
      background-size: cover;
    }

    #overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      /* 压暗蒙版 */
      z-index: -50;
    }

    @keyframes fadeInOverlay {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 0 10px;
      height: 70px;
      background: rgba(0, 0, 0, 0.5);
      /* 半透明背景 */
      backdrop-filter: blur(10px);
      /* 高斯模糊效果 */
      z-index: 1000;
    }

    @keyframes slideUpHeader {
      from {
        transform: translateY(50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    header a {
      margin: 0 10px;
      color: #fff;
      text-decoration: none;
      font-size: 16px;
      /* 添加悬停时的下划线效果 */
      transition: all 0.3s ease-in-out;
    }

    header a:hover {
      text-decoration: underline;
    }

 .content {
      position: relative;
      z-index: 100;
      text-align: center;
      padding: 20px;
      top: 180px;
      /* 头像与页面顶部的距离 */
      /* 添加非线性上滑渐变出现动画效果 */
      animation: slideUpContent 2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
      opacity: 0;
    }

    @keyframes slideUpContent {
      from {
        transform: translateY(100px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    #avatar {
      max-width: 100px;
      /* 限制头像最大宽度为128px */
      width: auto;
      height: auto;
      border-radius: 50%;
      background-color: #fff;
      border: 5px solid #fff;
      transition: transform 0.3s ease;
      /* 添加动效 */
      margin: 20px auto;
      /* 水平居中并添加外边距 */
      /* 添加非线性上滑渐变出现动画效果 */
      animation: slideUpAvatar 1.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
      opacity: 0;
      animation-delay: 0.5s;
    }

    @keyframes slideUpAvatar {
      from {
        transform: translateY(50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    #nickname {
      font-size: 24px;
      /* 固定字体大小，不参与响应式设计 */
      color: #fff;
      transition: opacity 0.3s ease, transform 0.3s ease;
      /* 添加动效 */
      margin-top: 10px;
      /* 头像和昵称之间的间距 */
      /* 添加非线性上滑渐变出现动画效果 */
      animation: slideUpNickname 1.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
      opacity: 0;
      animation-delay: 1s;
    }

    @keyframes slideUpNickname {
      from {
        transform: translateY(50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    #social-icons {
      display: flex;
      justify-content: center;
      align-items: center;
      /* 垂直居中 */
      background-color: rgba(0, 0, 0, 0.5);
      /* 半透明背景 */
      border-radius: 25px;
      margin: 20px auto;
      /* 水平居中并添加外边距 */
      overflow: hidden;
      width: 100%;
      /* 默认100%宽度 */
      max-width: 500px;
      /* 最大宽度限制为500px */
      height: 80px;
      /* 设置高度为80px，包括上下各5px的留空 */
      /* 添加非线性上滑渐变出现动画效果 */
      animation: slideUpSocialIcons 1.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
      opacity: 0;
      animation-delay: 1.5s;
    }

    @keyframes slideUpSocialIcons {
      from {
        transform: translateY(50px);
        opacity: 0;
      }

    to {
        transform: translateY(0);
        opacity: 1;
      }
    }

 .social-icon {
      width: 50px;
      /* 设置宽度为50px */
      height: 50px;
      /* 设置高度为50px */
      background-size: contain;
      background-position: center;
      cursor: pointer;
      transition: transform 0.3s ease;
      /* 添加动效 */
      margin: 0 5px;
      /* 添加左右外边距 */
      display: flex;
      align-items: center;
      /* 垂直居中 */
      justify-content: center;
      /* 水平居中 */
    }

 .social-icon:hover {
      transform: scale(1.2);
    }

    #blog-button {
      display: inline-block;
      padding: 10px 20px;
      margin: 20px auto;
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      text-decoration: none;
      font-size: 16px;
      border-radius: 15px;
      transition: background-color 0.3s;
      /* 添加非线性上滑渐变出现动画效果 */
      animation: slideUpBlogButton 1.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
      opacity: 0;
      animation-delay: 2s;
    }

    @keyframes slideUpBlogButton {
      from {
        transform: translateY(50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    #blog-button:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    footer {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%)!important;
      /* 不参与响应式设计 */
      color:  #fff;
      text-align: center;
      opacity: 0.8;
      /* 添加非线性上滑渐变出现动画效果 */
      animation: slideUpFooter 1.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
      opacity: 0;
      animation-delay: 2.5s;
    }

    @keyframes slideUpFooter {
      from {
        transform: translateY(50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 0.8;
      }
    }

    /* 设置背景图片 */
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url('https://jpgapi.hiyy.top/');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      z-index: -1;
      opacity: 0; /* 初始透明度为0，隐藏图片 */
      transition: opacity 1s ease-in-out; /* 设置渐显的过渡效果，持续时间2秒，缓动效果为ease-in-out */
    }

    body.background-image-loaded::before {
      opacity: 1;
    }

    @keyframes scaleBackground {
      from {
        transform: scale(1);
      }

      to {
        transform: scale(1.1);
      }
    }

    /* 添加压暗效果 */
    body::after {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: -1;
    }
  </style>
</head>

<body>

  <div id="overlay"></div>
  <!-- 网格纹路层 -->

  <header>
    <a>首页</a>
    <a href="about.php">关于我</a>
  </header>

  <div class="content">
    <img id="avatar" src="https://logo.hiyy.top/favicon.ico" alt="头像">
    <div id="nickname">柚柠可-Yonic</div>
    <div id="social-icons">
      <div id="bilibili" class="social-icon" style="background-image: url('https://www.yonic.top/bilibili.png');"></div>
      <div id="mfuns" class="social-icon" style="background-image: url('https://www.mfuns.net/favicon.ico');"></div>
      <div id="email" class="social-icon" style="background-image: url('https://www.yonic.top/mail.png');"></div>
      <div id="github" class="social-icon" style="background-image: url('https://www.yonic.top/github.png');"></div>
      <div id="douyin" class="social-icon" style="background-image: url('https://www.yonic.top/douyin.png');"></div>
    </div>
    <a href="blog.php" id="blog-button" target="_blank">我的博客</a>
  </div>

  <footer>
    &copy; 2024 柚柠可-Yonic. All rights reserved.
  </footer>

  <script>
    // 获取背景图片元素
    const backgroundImage = document.createElement('img');
    backgroundImage.src = 'https://jpgapi.hiyy.top/';

    // 当图片加载完成时触发的函数
    backgroundImage.onload = function() {
        document.body.classList.add('background-image-loaded');
    };


    document.getElementById('bilibili').addEventListener('click', function () {
      window.open('https://space.bilibili.com/234075209', '_blank');
    });
    document.getElementById('mfuns').addEventListener('click', function () {
      window.open('https://www.mfuns.net/member/67787', '_blank');
    });
    document.getElementById('email').addEventListener('click', function () {
      window.open('mailto:mail@hiyy.top', '_blank');
    });
    document.getElementById('github').addEventListener('click', function () {
      window.open('https://github.com/fumenggares', '_blank');
    });
    document.getElementById('douyin').addEventListener('click', function () {
      window.open('https://www.douyin.com/user/self?_sw=71897973966&from_tab_name=main', '_blank');
    });
  </script>

</body>

</html>