<body>
<html>
<link rel="stylesheet" href="https://unpkg.com/mdui@1.0.2/dist/css/mdui.min.css">
<script src="https://unpkg.com/mdui@1.0.2/dist/js/mdui.min.js"></script>
<div class="mdui-color-teal">
<div class="mdui-appbar">
  <div class="mdui-toolbar mdui-color-theme">
    <a href="javascript:;" class="mdui-btn mdui-btn-icon">
      <i class="mdui-icon material-icons">menu</i>
    </a>
    <a href="javascript:;" class="mdui-typo-title">NyaLogin</a>
    <div class="mdui-toolbar-spacer"></div>
    <a href="https://github.com/Whirity404/NyaLogin" class="mdui-btn mdui-btn-icon">
      <i class="mdui-icon material-icons">inbox</i>
    </a>
    <a href="" class="mdui-btn mdui-btn-icon">
      <i class="mdui-icon material-icons">refresh</i>
    </a>
    <a href="https://github.com/Whirity404" class="mdui-btn mdui-btn-icon">
      <i class="mdui-icon material-icons">code</i>
    </a>
  </div>
  <div class="mdui-tab mdui-color-theme" mdui-tab>
    <a href="main.php?login" onclick="loadPage('login.php')" class="mdui-ripple mdui-ripple-white">
      <i class="mdui-icon material-icons">backup</i>
      <label>Login</label>
    </a>
    <a href="main.php?register" onclick="loadPage('register.php')" class="mdui-ripple mdui-ripple-white">
      <i class="mdui-icon material-icons">add</i>
      <label>Register</label>
    </a>
    <a href="main.php?logout" onclick="loadPage('logout.php')" class="mdui-ripple mdui-ripple-white">
      <i class="mdui-icon material-icons">exit_to_app</i>
      <label>Logout</label>
    </a>
  </div>
</div>
</div>
</html>
</body>