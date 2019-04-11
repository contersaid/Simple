<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affordable and professional web disign">
    <meta name="keywords" content="Web design, affordable web design">
    <meta name="author" content="Contersaid">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style.css" />
    <title>Chua Huyen Trang | Welcome</title>
    
</head>
<body>
    <header>

        <div id="bia">
            <div class "container">
                <h1>Chua Huyen Trang Designer</h1>
                <p>Chua Huyen Trang xin kinh chao quy Phat tu</p>
            </div>
        
        </div>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Chua Huyen Trang</span></h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.php">Trang Chủ</a></li>
                    <li><a href="about.php">Liên Hệ</a></li>
                    <li><a href="services.html">Thư Viện</a></li>
                    <li><a href="login.html">Đăng Nhập</a></li>
                </ul>
            </nav>
        </div>
    </header>

    
    

    <section id="nhan_mail">
        <div class="container">
            <h1> <?= $greetin="hi"; ?></h1>
            <form>
                <input type="email" placeholder="Enter your email here!">
                <button type="submit" class="button_1">Nhan Mail</button>
            </form>
        </div>
    </section>

    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="./img/logo_tinmoi.png">
                <h3>Tin Moi</h3>
                <P>Cap NHat tin tuc moi trong ngay</P>
            </div>
            <div class="box">
                    <img src="./img/logo_tinphatsu.png">
                    <h3>Tin Phat Su</h3>
                    <P>Cap NHat tin tuc moi trong ngay</P>
                </div>
                <div class="box">
                        <img src="./img/logo_bantin.png">
                        <h3>Ban Tin</h3>
                        <P>Cap NHat tin tuc moi trong ngay</P>
                    </div>
        </div>
    </section>
    <footer>
        <p>Chua Huyen Trang, copyright &copy; 2018 </p>
    </footer>
</body>
</html>
