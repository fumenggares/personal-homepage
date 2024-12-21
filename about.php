<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta name="description" content="欢迎来到柚柠可-Yonic的个人主页，这里记录了我的博客、技术文章和个人项目。">
  <meta name="keywords" content="柚柠可, Yonic, 个人主页, 博客, 技术文章, 编程, 设计, 个人项目">
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

  .about-me {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 40px;
      background: rgba(0, 0, 0, 0.5);
      /* 半透明背景 */
      border-radius: 10px;
      z-index: 100;
      width: calc(100% - 120px);
      /* 减去两侧的间距 */
      box-sizing: border-box;
      /* 添加非线性上滑渐变出现动画效果 */
      animation: slideUpAboutMe 2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
      opacity: 0;
    }

    @keyframes slideUpAboutMe {
      from {
        transform: translate(-50%, -50%) translateY(100px);
        opacity: 0;
      }

      to {
        transform: translate(-50%, -50%);
        opacity: 1;
      }
    }

  .about-me h2 {
      color: #fff;
      font-size: 24px;
      line-height: 1.6;
      /* 添加非线性上滑渐变出现动画效果 */
      animation: slideUpH2 1.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
      opacity: 0;
      animation-delay: 0.5s;
    }

    @keyframes slideUpH2 {
      from {
        transform: translateY(50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

  .about-me p {
      color: #fff;
      font-size: 16px;
      line-height: 1.6;
      /* 添加非线性上滑渐变出现动画效果 */
      animation: slideUpP 1.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
      opacity: 0;
      animation-delay: 1s;
    }

    @keyframes slideUpP {
      from {
        transform: translateY(50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    footer {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%)!important;
      /* 不参与响应式设计 */
      color: #fff;
      text-align: center;
      opacity: 0.8;
      /* 添加非线性上滑渐变出现动画效果 */
      animation: slideUpFooter 1.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
      opacity: 0;
      animation-delay: 1.5s;
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
    <a href="index.php">首页</a>
    <a>关于我</a>
  </header>

  <div class="about-me">
    <h2>✨我是谁？</h2>
    <p>我是Yonic-柚柠可，熟练掌握Windows和Linux的开关机、PS和PR的安装和卸载、HTML和JavaScript和CSS的复制和粘贴！哼哼~咱可是很厉害哒！😏</p>
    <h2>🔎为什么叫柚柠可？</h2>
    <p>柚柠可就是柚子，柠檬，可可的意思，总之都是食物啦~😘</p>
    <h2>🕹️喜欢玩什么？</h2>
    <p>喵斯，乌蒙递茶（唉wmc🥵），屁股肉，永劫无间，Minecraft</p>
  </div>

  <footer>
    &copy; 2024 柚柠可-Yonic. All rights reserved.
  </footer>

</body>

</html>