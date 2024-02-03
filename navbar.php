<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>導覽列</title>

    <link rel="icon" href="AAA\.ico.ico" type="image/x-icon">
    
    <style>
      body {
        margin: 0;
        padding: 0;
        overflow-x: hidden; /* Prevent horizontal scroll */
      }

      nav {
        background-color: #f1f1f1;
        height: 90px;
        width: 1500px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 3%;
        border-radius: 50px;
        margin-bottom: 50px;
        margin-top: 20px;
        z-index: 100;
      }

      .logo-container {
        display: flex;
        align-items: center;
      }

      .company-name {
        margin-left: 10px;
        font-size: 18px;
        font-weight: bold;
      }

      .links {
        display: flex;
        align-items: center;
      }

      .links a {
        margin-left: 10px;
        text-decoration: none;
        color: #000;
        transition: color 0.3s;
      }

      .links a:hover {
        color: rgb(18, 180, 180);
        font-size: 1.2em;
        transform: scale(1.1);
      }

      #background-video {
        position: fixed;
        top: 90px;
        left: 0;
        width: 100%;
        height: calc(100vh - 90px); /* Adjust height based on navigation bar height */
        object-fit: cover;
        z-index: -1;
      }

      /* Large devices (desktops, 1200px and up) */
      @media (min-width: 1200px) { 
        nav {
          width: 1200px;
        }
        .links a {
          font-size: 1em;
        }
      }

      /* Medium devices (tablets, 768px and up) */
      @media (min-width: 600px) and (max-width: 1199px) { 
        nav {
          width: 600px;
        }
        .links a {
          font-size: 0.8em;
        }
      }

      /* Small devices (landscape phones, 599px and down) */
      @media (max-width: 599px) { 
        nav {
          width: 100%;
          flex-direction: column;
          height: auto;
        }

        .logo-container, .links {
          width: 100%;
          justify-content: center;
        }
        .links a {
          font-size: 0.6em;
        }
      }
    </style>
  </head>
  <body>
    <nav class="custom-nav">
      <div class="logo-container">
        <img src="AAA/名字.png" height="50px" width="auto" alt="Company Logo" />
        <h1 class="company-name">L.S.T. Library Of Fiction</h1>
      </div>

      <div class="links">
        <a href="L.S.T.library.html">首頁</a>
        <a href="新品推薦.html">新品推薦</a>
        <a href="出品作品.html">出品書籍</a>
        <a href="主要劇情.html">主要劇情</a>
        <a href="次要劇情.html">次要劇情</a>
        <a href="詩文總集.html">詩文總集</a>
        <a href="作者簡介.html">作者簡介</a>
      </div>
    </nav>
  </body>
</html>