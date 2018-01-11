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
        }

        body {
            min-height: 100vh;
            font-size: 1.6rem;
            line-height: 2.4rem;
            color: #262626;
            font-family: 'FFMetaWebProNormal', sans-serif;
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
<div id="app">
    <header>

    </header>