<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?=get_template_directory_uri(); ?>/img/logo.png">
    <title>しげぱん/local</title>
    <!-- css -->
    <link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" rel="stylesheet">
    <!-- java script -->
    <script>
        (function(d) {
            var config = {
            kitId: 'lts8xqv',
            scriptTimeout: 3000,
            async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
    <?php wp_head() ?>
</head>
<body>

    <header>
        <div class="header_inner">
            <a class="header_text" href="<?=home_url(); ?>">
                <h1>
                    <img src="<?=get_template_directory_uri(); ?>/img/logo.svg" alt="しげぱんロゴ">
                    <div class="store_name">
                        <p>おいしい食パンのお店</p>
                        <span>しげぱん</span>
                    </div>
                </h1>
            </a>
            <div id="screen">
                <ul class="header_nav">
                    <li>
                        <a class="header_text" href="<?=home_url('/menu/'); ?>">
                            <span>Menu</span>
                            <p>メニュー</p>
                        </a>
                    </li>
                    <li>
                        <a class="header_text" href="<?=home_url('/archive-news/'); ?>">
                            <span>News</span>
                            <p>ニュース</p>
                        </a>
                    </li>
                    <li>
                        <a class="header_text" href="<?=home_url('/concept/'); ?>">
                            <span>Concept</span>
                            <p>こだわり</p>
                        </a>
                    </li>
                    <li>
                        <a class="header_text" href="<?=home_url('/contact/'); ?>">
                            <span>Contact</span>
                            <p>お問い合わせ</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!----------------------------------------------------------------------------------->
            <div id="navArea" class="mobile">
                <ul class="header_nav">
                    <li>
                        <a class="header_text" href="<?=home_url('/menu/'); ?>">
                            <span>Menu</span>
                            <p>メニュー</p>
                        </a>
                    </li>
                    <li>
                        <a class="header_text" href="<?=home_url('/archive-news/'); ?>">
                            <span>News</span>
                            <p>ニュース</p>
                        </a>
                    </li>
                    <li>
                        <a class="header_text" href="<?=home_url('/concept/'); ?>">
                            <span>Concept</span>
                            <p>こだわり</p>
                        </a>
                    </li>
                    <li>
                        <a class="header_text" href="<?=home_url('/contact/'); ?>">
                            <span>Contact</span>
                            <p>お問い合わせ</p>
                        </a>
                    </li>
                </ul>
                <div class="toggle-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="mask"></div>
            </div>
        </div>
    </header>