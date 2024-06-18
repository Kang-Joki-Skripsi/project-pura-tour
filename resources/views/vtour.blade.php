<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pura Dalem Srijati</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" id="metaViewport" content="user-scalable=no, initial-scale=1, width=device-width, viewport-fit=cover" data-tdv-general-scale="0.5"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <script src="{{asset('lib/tdvplayer.js?v=1718665062620')}}"></script>
    <link rel="preload" href="{{asset('locale/en.txt?v=1718665062620')}}" as="fetch" crossorigin="anonymous"/>
	<link rel="preload" href="{{asset('script.js?v=1718665062620')}}" as="script"/>
	<link rel="preload" href="{{asset('media/panorama_9F413F87_9433_4C63_41DC_3C1665025BD9_0/r/2/0_0.jpg?v=1718665062620')}}" as="image"/>
	<link rel="preload" href="{{asset('media/panorama_9F413F87_9433_4C63_41DC_3C1665025BD9_0/l/2/0_0.jpg?v=1718665062620')}}" as="image"/>
	<link rel="preload" href="{{asset('media/panorama_9F413F87_9433_4C63_41DC_3C1665025BD9_0/u/2/0_0.jpg?v=1718665062620')}}" as="image"/>
	<link rel="preload" href="{{asset('media/panorama_9F413F87_9433_4C63_41DC_3C1665025BD9_0/d/2/0_0.jpg?v=1718665062620')}}" as="image"/>
	<link rel="preload" href="{{asset('media/panorama_9F413F87_9433_4C63_41DC_3C1665025BD9_0/f/2/0_0.jpg?v=1718665062620')}}" as="image"/>
	<link rel="preload" href="{{asset('media/panorama_9F413F87_9433_4C63_41DC_3C1665025BD9_0/b/2/0_0.jpg?v=1718665062620')}}" as="image"/>
	<meta name="description" content="Virtual Tour"/>
	<meta name="theme-color" content="#FFFFFF"/>
    <script>
        var script_general = "{{asset('script_general.js?v=1718665062620')}}"
    </script>
    <script src="{{asset('script.js?v=1718665062620')}}"></script>
    <style type="text/css">
        html, body { height:100%; width:100%; height:100vh; width:100vw; margin:0; padding:0; overflow:hidden; }
        .fill-viewport { position:fixed; top:0; left:0; right:0; bottom:0; padding:0; margin:0; overflow: hidden; }
        .fill-viewport.landscape-left { left: env(safe-area-inset-left); }
		.fill-viewport.landscape-right { right: env(safe-area-inset-right); }
        #viewer { z-index:1; }
        #preloadContainer { z-index:2; opacity:0; background-color:rgba(255,255,255,1); transition: opacity 0.5s; -webkit-transition: opacity 0.5s; -moz-transition: opacity 0.5s; -o-transition: opacity 0.5s;}
    </style>
    <link rel="stylesheet" href="{{asset('fonts.css?v=1718665062620')}}">
</head>
<body>
    <div id="preloadContainer" class="fill-viewport"><div style="z-index: 4; position: absolute; overflow: hidden; left: 0%; top: 50%; width: 100.00%; height: 10.00%" ><div style="text-align:left; color:#000; "><DIV STYLE="text-align:center;font-size:1.39vmin;"><SPAN STYLE="display:inline-block; letter-spacing:0vmin; white-space:pre-wrap;color:#777777;font-size:1.39vmin;font-family:Arial, Helvetica, sans-serif;">Loading virtual tour. Please wait...</SPAN></DIV><p STYLE="margin:0; line-height:1.02vmin;"><BR STYLE="display:inline-block; letter-spacing:0vmin; white-space:pre-wrap;color:#000000;font-size:1.02vmin;font-family:Arial, Helvetica, sans-serif;"/></p></div></div></div>
    <div id="viewer" class="fill-viewport"></div>
</body>
</html>