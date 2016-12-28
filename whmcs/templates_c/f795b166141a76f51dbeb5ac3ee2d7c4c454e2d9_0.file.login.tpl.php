<?php
/* Smarty version 3.1.29, created on 2016-12-27 01:51:10
  from "C:\xampp7.0\htdocs\ihosting\whmcs\admin\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5861bafe021532_68390922',
  'file_dependency' => 
  array (
    'f795b166141a76f51dbeb5ac3ee2d7c4c454e2d9' => 
    array (
      0 => 'C:\\xampp7.0\\htdocs\\ihosting\\whmcs\\admin\\templates\\login.tpl',
      1 => 1475406296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5861bafe021532_68390922 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WHMCS - Login</title>

        <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/bootstrap.min.css" rel="stylesheet">
        <link href="templates/login.css" rel="stylesheet">

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
      </head>
      <body>
        <div class="login-container">
            <h1 class="logo">
                <a href="login.php">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/whmcs.png" alt="WHMCS" />
                </a>
            </h1>
            <div class="login-body">
                <h2><?php echo $_smarty_tpl->tpl_vars['displayTitle']->value;?>
</h2>
                <?php if ($_smarty_tpl->tpl_vars['infoMsg']->value) {?>
                    <div class="alert alert-info text-center" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['infoMsg']->value;?>

                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['successMsg']->value) {?>
                    <div class="alert alert-success text-center" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['successMsg']->value;?>

                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['errorMsg']->value) {?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>

                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['step']->value == "login") {?>
                    <form method="post" action="dologin.php">
                        <input type="hidden" name="language" id="inputLanguage" />
                        <input type="hidden" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['redirectUri']->value;?>
" />
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" autofocus />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="rememberme" value="1">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <input type="submit" value="Login" class='btn btn-primary btn-block'>
                            </div>
                        </div>
                    </form>
                <?php } elseif ($_smarty_tpl->tpl_vars['step']->value == "reset") {?>
                    <form action="login.php" method="post">
                        <input type="hidden" name="action" value="reset" />
                        <input type="hidden" name="sub" value="send" />
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email address" autofocus />
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Reset Password" class="btn btn-primary btn-block" />
                        </div>
                    </form>
                <?php } elseif ($_smarty_tpl->tpl_vars['step']->value == "twofa") {?>
                    <div class="text-center" align="center">
                        <?php echo $_smarty_tpl->tpl_vars['challengeHtml']->value;?>

                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['step']->value == "twofabackupcode") {?>
                    <?php if ($_smarty_tpl->tpl_vars['successMsg']->value) {?>
                        <p>Write this down on paper and keep it safe.<br />It will be needed if you ever lose your 2nd factor device or it is unavailable to you again in future.</p>
                        <form method="post" action="dologin.php">
                            <input type="hidden" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['redirectUri']->value;?>
" />
                            <div class="form-group">
                                <input type="submit" value="Continue &raquo;" class="btn btn-primary btn-block" />
                            </div>
                        </form>
                    <?php } else { ?>
                        <form action="dologin.php" method="post">
                            <input type="hidden" name="backupcode" value="1" />
                            <input type="hidden" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['redirectUri']->value;?>
" />
                            <div class="form-group">
                                <input type="text" name="code" class="form-control" placeholder="Backup code" autofocus />
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary btn-block" />
                            </div>
                        </form>
                    <?php }?>
                <?php }?>
            </div>
            <div class="footer">
                <?php if ($_smarty_tpl->tpl_vars['step']->value == "login") {?>
                    <?php if ($_smarty_tpl->tpl_vars['showPasswordResetLink']->value) {?>
                        <a href="login.php?action=reset">
                            Forgot password?
                        </a>
                    <?php } else { ?>
                        <span>&nbsp;</span>
                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['step']->value == "reset") {?>
                    <a href="login.php">
                        &laquo; Back to Login
                    </a>
                <?php } elseif ($_smarty_tpl->tpl_vars['step']->value == "twofa") {?>
                    <a href="login.php?<?php if ($_smarty_tpl->tpl_vars['redirectUri']->value) {?>redirect=<?php echo urlencode($_smarty_tpl->tpl_vars['redirectUri']->value);?>
&amp;<?php }?>backupcode=1">
                        Can't Access Your 2nd Factor Device?<br />Login using Backup Code
                    </a>
                <?php }?>
            </div>
        </div>
        <div class="language-chooser">
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span id="languageName">Choose Language</span> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_language_0_saved_item = isset($_smarty_tpl->tpl_vars['language']) ? $_smarty_tpl->tpl_vars['language'] : false;
$_smarty_tpl->tpl_vars['language'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['language']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
$__foreach_language_0_saved_local_item = $_smarty_tpl->tpl_vars['language'];
?>
                        <li><a href="#"><?php echo ucfirst($_smarty_tpl->tpl_vars['language']->value);?>
</a></li>
                    <?php
$_smarty_tpl->tpl_vars['language'] = $__foreach_language_0_saved_local_item;
}
if ($__foreach_language_0_saved_item) {
$_smarty_tpl->tpl_vars['language'] = $__foreach_language_0_saved_item;
}
?>
                </ul>
            </div>
        </div>
        <div class="poweredby text-center">
            <a href="http://www.whmcs.com/" target="_blank">Powered by WHMCS</a>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="templates/login.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
