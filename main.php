<?php
require "frame_header.php"; 
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
<link rel="stylesheet" href="https://unpkg.com/mdui@1.0.2/dist/css/mdui.min.css">
<script src="https://unpkg.com/mdui@1.0.2/dist/js/mdui.min.js"></script>
    <meta charset="UTF-8">
    <title>NyaLogin</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        #iframeContainer {
            flex: 1;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>
    <div>
        <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="loadPage('core/login.php')">登录</button>
        <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="loadPage('core/register.php')">注册</button>
        <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="loadPage('core/logout.php')">退出登录</button>
        
    </div>
    <div id="iframeContainer">
        <iframe id="contentFrame" src=""></iframe>
    </div>

    <script>
        function loadPage(url) {
            var iframe = document.getElementById('contentFrame');
            iframe.src = url;
        }

        function getParameterByName(name) {
            var url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
            var results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        function loadDefaultPage() {
            var register = getParameterByName('register');
            var logout = getParameterByName('logout');
            if (register !== null) {
                loadPage('core/register.php');
            } else if (logout !== null) {
                loadPage('core/logout.php');
            } else {
                loadPage('core/login.php');
            }
        }

        window.addEventListener('message', function(event) {
            if (event.data === 'reloadIframe') {
                var iframe = document.getElementById('contentFrame');
                iframe.contentWindow.location.reload();
            }
        });

        window.onload = loadDefaultPage;
    </script>
</body>
</html>
