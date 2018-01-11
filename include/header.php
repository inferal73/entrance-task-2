<!doctype html>
<head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title><?=$title?></title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width">
                <script>
                  document.onload = function () {
                    document.body.className = document.body.className.replace('loading', '');
                  };
                  /* PubSub */
                  window.PS=(function(){var topics={};var hOP=topics.hasOwnProperty;return{subscribe:function(topic,listener){if(!hOP.call(topics,topic))topics[topic]=[];var index=topics[topic].push(listener)-1;return{remove:function(){delete topics[topic][index];}};},publish:function(topic,info){if(!hOP.call(topics,topic))return;topics[topic].forEach(function(item){item(info!==undefined?info:{});});}};})();
                </script>
                <style>
                    /* html5doctor.com Reset v1.6.1 - http://cssreset.com */
                    html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}body{line-height:1}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section,main{display:block}nav ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}ins{background-color:#ff9;color:#000;text-decoration:none}mark{background-color:#ff9;color:#000;font-style:italic;font-weight:bold}del{text-decoration:line-through}abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}table{border-collapse:collapse;border-spacing:0}hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}input,select{vertical-align:middle}
                    ul, li { list-style: none; }
                    hr { display: block; height: 1px; border: 0; border-top: 1px solid #ccc; margin: 1em 0; padding: 0; }

                    i { font-style: normal; }
                    a { text-decoration: none; color: inherit}

                    html {
                        min-height: 100%;
                        height: 100%;
                        font-size: 62.5%;
                        background-color: #FFFFFF;
                        box-sizing: border-box;
                    }

                    body {
                        min-height: 100vh;
                        font-size: 1.3rem;
                        line-height: 1.5rem;
                        font-family: 'Helvetica Neue', 'OpenSans', Arial, sans-serif;
                        -webkit-font-smoothing: antialiased;
                        min-width: 121.6rem;
                        font-variant-numeric: lining-nums;
                        -moz-font-feature-settings: 'lnum';
                        -webkit-font-feature-settings: 'lnum';
                        font-feature-settings: 'lnum' on;

                    }
                </style>
                <link rel="stylesheet" href="/dist/css/style.css">
            </head>
<body data-page="<?=$page?>" class="<?=$page?>">
<div style="display:none;">
    <svg xmlns="http://www.w3.org/2000/svg">
        <symbol id="close" viewBox="0 0 10 10">
            <g fill="none" fill-rule="evenodd"><path d="M-3-3h16v16H-3z"/><path d="M5.02 3.621L2.193.793A1 1 0 1 0 .778 2.207l2.829 2.829L.778 7.864a1 1 0 1 0 1.414 1.414L5.021 6.45l2.828 2.828a1 1 0 0 0 1.414-1.414L6.435 5.036l2.828-2.829A1 1 0 1 0 7.85.793L5.021 3.62z" fill="#AFB4B8"/></g>
        </symbol>
        <symbol id="edit" viewBox="0 0 12 12">
            <g fill="none" fill-rule="evenodd"><path d="M-2-2h16v16H-2z"/><path d="M11.08 3.106a.58.58 0 0 0 0-.822L9.714.919a.58.58 0 0 0-.823 0L7.82 1.986l2.187 2.187 1.073-1.067zM.75 9.06v2.187h2.187l6.451-6.456-2.187-2.188L.75 9.061z" fill="#000" fill-rule="nonzero"/></g>
        </symbol>
        <symbol id="edit" viewBox="0 0 12 12">
            <g fill="none" fill-rule="evenodd"><path d="M-2-2h16v16H-2z"/><path d="M1 4v7h10V4H1zm9-3h2v11H0V1h2V0h2v1h4V0h2v1zM2 5v2h2V5H2zm3 0v2h2V5H5zM2 8v2h2V8H2z" fill="#000" fill-rule="nonzero"/></g>
        </symbol>
        <symbol id="arrow-left" viewBox="0 0 12 12">
            <path d="M7 10.243L2.757 6 7 1.757" stroke-width="2" stroke="#000" fill="none" fill-rule="evenodd"/>
        </symbol>
        <symbol id="arrow-right" viewBox="0 0 12 12">
            <path d="M5 1.757L9.243 6 5 10.243" stroke-width="2" stroke="#000" fill="none" fill-rule="evenodd"/>
        </symbol>
    </svg>
</div>
<div id="app">
    <header>
        <a href="/" class="logo"></a>
        <div class="header-actions">
            <a href="/create-event.php" class="button button-blue"></a>
        </div>
    </header>