<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:15
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\_partials\socials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e3c459d1_75225228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f950f1ecbfea6d40d3a5c6e0b5986a1e22bb1d7' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\socials.tpl',
      1 => 1611117880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e3c459d1_75225228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9094063516017d1e3c1e8d8_29883734', 'footer-social');
?>

<?php }
/* {block 'footer-social'} */
class Block_9094063516017d1e3c1e8d8_29883734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-social' => 
  array (
    0 => 'Block_9094063516017d1e3c1e8d8_29883734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h3 class="block-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow Us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
<ul id="social-links" class="social-links">
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_facebook']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_facebook'] != '') {?>
        <li class="facebook">
            <a class="social-icon social-facebook" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_facebook'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.9094 8.04492C13.9094 7.5293 14.0125 7.11328 14.2188 6.79688C14.4365 6.48047 14.9062 6.32227 15.6281 6.32227L17.4672 6.30469V3.14062C17.3068 3.11719 16.9745 3.08789 16.4703 3.05273C15.9776 3.01758 15.4161 3 14.7859 3C14.1214 3 13.5141 3.09375 12.9641 3.28125C12.4141 3.45703 11.9385 3.73242 11.5375 4.10742C11.1479 4.48242 10.8443 4.95117 10.6266 5.51367C10.4089 6.07617 10.3 6.73828 10.3 7.5V9.75H7V13.125H10.3L10.3172 21H13.9094V13.125H16.9L18 9.75H13.9094V8.04492Z" fill="currentColor"></path>
                </svg>
            </a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_twitter']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_twitter'] != '') {?>
        <li class="twitter">
            <a class="social-icon social-twitter" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_twitter'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="la la-twitter" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_gplus']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_gplus'] != '') {?>
        <li class="google-plus">
            <a class="social-icon social-google" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_gplus'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="la la-google" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_instagram']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_instagram'] != '') {?>
        <li class="instagram">
            <a class="social-icon social-instagram" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_instagram'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.9999 4.62165C14.403 4.62165 14.6877 4.63084 15.6368 4.67414C16.5143 4.71418 16.9908 4.86077 17.3079 4.98402C17.6988 5.1283 18.0525 5.35835 18.3428 5.65727C18.6417 5.94757 18.8717 6.30118 19.016 6.69209C19.1392 7.00923 19.2859 7.48577 19.3259 8.36326C19.3692 9.31231 19.3784 9.59694 19.3784 12.0001C19.3784 14.4033 19.3692 14.6879 19.3259 15.637C19.2858 16.5145 19.1392 16.991 19.016 17.3082C18.8663 17.6963 18.6369 18.0488 18.3428 18.343C18.0486 18.6372 17.6961 18.8665 17.3079 19.0162C16.9908 19.1395 16.5143 19.2861 15.6368 19.3261C14.6879 19.3694 14.4033 19.3786 11.9999 19.3786C9.5966 19.3786 9.31208 19.3694 8.36311 19.3261C7.48563 19.2861 7.00913 19.1394 6.69196 19.0162C6.30105 18.872 5.94744 18.6419 5.65714 18.343C5.35823 18.0527 5.12817 17.6991 4.9839 17.3082C4.86064 16.991 4.71403 16.5145 4.67401 15.637C4.63072 14.688 4.62153 14.4033 4.62153 12.0001C4.62153 9.59694 4.63072 9.31238 4.67401 8.36326C4.71406 7.48577 4.86064 7.00926 4.9839 6.69209C5.12819 6.30116 5.35827 5.94754 5.65721 5.65723C5.94752 5.35832 6.30112 5.12826 6.69203 4.98398C7.00916 4.86073 7.4857 4.71411 8.36319 4.6741C9.31223 4.6308 9.59685 4.62162 12 4.62162L11.9999 4.62165ZM12 3C9.55577 3 9.24917 3.01036 8.28938 3.05416C7.3314 3.09789 6.6772 3.25001 6.10474 3.47251C5.50422 3.69849 4.96022 4.05275 4.51068 4.51058C4.05275 4.9601 3.69839 5.50411 3.47232 6.10466C3.25001 6.67716 3.09789 7.33137 3.05434 8.28935C3.01036 9.24915 3 9.55575 3 12C3 14.4443 3.01036 14.7509 3.05434 15.7107C3.09807 16.6687 3.25018 17.3229 3.47268 17.8953C3.69867 18.4959 4.05292 19.0399 4.51075 19.4894C4.96029 19.9472 5.50429 20.3015 6.10481 20.5275C6.67731 20.75 7.33151 20.9021 8.28945 20.9458C9.24939 20.9896 9.55587 21 12.0001 21C14.4443 21 14.7509 20.9896 15.7107 20.9458C16.6687 20.9021 17.3229 20.75 17.8954 20.5275C18.4932 20.2963 19.0362 19.9427 19.4894 19.4894C19.9427 19.0362 20.2963 18.4932 20.5275 17.8953C20.75 17.3228 20.9021 16.6686 20.9458 15.7107C20.9896 14.7507 21 14.4443 21 12C21 9.55578 20.9896 9.24915 20.9458 8.28935C20.9021 7.33137 20.75 6.67716 20.5275 6.10469C20.3015 5.50417 19.9473 4.96016 19.4894 4.51062C19.0399 4.0527 18.4958 3.69836 17.8953 3.47233C17.3228 3.25001 16.6686 3.09789 15.7106 3.05434C14.7508 3.01036 14.4442 3 11.9999 3H12Z" fill="currentColor"></path>
                    <path d="M11.9999 7.37838C11.0859 7.37838 10.1923 7.64944 9.43232 8.15727C8.6723 8.6651 8.07994 9.3869 7.73015 10.2314C7.38035 11.0759 7.28882 12.0051 7.46715 12.9017C7.64547 13.7982 8.08564 14.6217 8.73198 15.268C9.37832 15.9144 10.2018 16.3545 11.0983 16.5329C11.9948 16.7112 12.9241 16.6197 13.7686 16.2699C14.613 15.9201 15.3348 15.3277 15.8427 14.5677C16.3505 13.8076 16.6215 12.9141 16.6215 12C16.6215 10.7743 16.1346 9.59875 15.2679 8.73203C14.4012 7.8653 13.2257 7.37838 11.9999 7.37838ZM11.9999 15C11.4066 15 10.8266 14.824 10.3333 14.4944C9.83993 14.1647 9.45543 13.6962 9.22837 13.148C9.00132 12.5999 8.94191 11.9967 9.05767 11.4147C9.17343 10.8328 9.45915 10.2982 9.8787 9.8787C10.2983 9.45915 10.8328 9.17343 11.4147 9.05768C11.9967 8.94193 12.5999 9.00134 13.148 9.2284C13.6962 9.45546 14.1647 9.83998 14.4944 10.3333C14.824 10.8267 14.9999 11.4067 14.9999 12C14.9999 12.7957 14.6839 13.5587 14.1213 14.1213C13.5586 14.6839 12.7956 15 11.9999 15Z" fill="currentColor"></path>
                    <path d="M16.8041 8.27577C17.4006 8.27577 17.8841 7.79225 17.8841 7.19579C17.8841 6.59933 17.4006 6.1158 16.8041 6.1158C16.2077 6.1158 15.7242 6.59933 15.7242 7.19579C15.7242 7.79225 16.2077 8.27577 16.8041 8.27577Z" fill="currentColor"></path>
                </svg>
            </a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_youtube']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_youtube'] != '') {?>
        <li class="youtube">
            <a class="social-icon social-youtube" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_youtube'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="la la-youtube" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_pinterest']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_pinterest'] != '') {?>
        <li class="pinterest">
            <a class="social-icon social-pinterest" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_pinterest'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                <svg width="18" height="19" viewBox="0 0 18 19">
                    <use xlink:href="#icon-social_icon_1">
                        <symbol id="icon-social_icon_1" fill="none" viewBox="0 0 18 19">
                            <path d="M9 .5a8.885 8.885 0 0 0-3.516.703A9.09 9.09 0 0 0 2.62 3.137 8.975 8.975 0 0 0 .703 6.002 8.758 8.758 0 0 0 0 9.5a8.942 8.942 0 0 0 1.6 5.133 9.129 9.129 0 0 0 1.81 1.933c.703.551 1.47.99 2.303 1.319a17.834 17.834 0 0 1-.07-1.266 5.726 5.726 0 0 1 .105-1.318c.047-.176.123-.504.229-.985.117-.492.234-.996.351-1.511.129-.516.24-.973.334-1.371l.14-.616-.14-.369c-.082-.246-.123-.568-.123-.967 0-.62.158-1.136.475-1.546.316-.422.703-.633 1.16-.633.375 0 .656.129.844.386.187.247.28.54.28.88 0 .386-.093.849-.28 1.388-.176.54-.329 1.078-.457 1.617-.106.446-.024.826.246 1.143.28.316.644.474 1.09.474.398 0 .767-.1 1.107-.298.351-.2.65-.48.896-.844.258-.364.457-.797.598-1.301.152-.504.229-1.06.229-1.67 0-.539-.094-1.031-.282-1.476a3.358 3.358 0 0 0-.773-1.16 3.306 3.306 0 0 0-1.195-.756 3.947 3.947 0 0 0-1.512-.282c-.645 0-1.219.112-1.723.334a4.026 4.026 0 0 0-1.283.88c-.34.362-.604.778-.791 1.247a4.122 4.122 0 0 0-.264 1.46c0 .386.065.767.194 1.142.129.375.287.674.474.896a.234.234 0 0 1 .053.14.219.219 0 0 1 0 .124c-.035.14-.082.334-.14.58-.06.234-.094.38-.106.44-.024.082-.059.134-.106.158-.046.011-.11 0-.193-.035-.562-.258-1.008-.739-1.336-1.442-.328-.703-.492-1.383-.492-2.039 0-.715.129-1.4.387-2.057a5.173 5.173 0 0 1 1.125-1.74c.504-.504 1.125-.902 1.863-1.195.738-.305 1.594-.457 2.566-.457a5.77 5.77 0 0 1 2.18.404c.68.258 1.266.621 1.758 1.09a4.829 4.829 0 0 1 1.178 1.635c.293.633.439 1.324.439 2.074 0 .773-.117 1.5-.351 2.18a5.756 5.756 0 0 1-.967 1.775c-.41.504-.903.902-1.477 1.195a4.079 4.079 0 0 1-1.88.44c-.458 0-.88-.1-1.266-.299-.387-.211-.65-.457-.791-.738l-.246.914a60.04 60.04 0 0 1-.317 1.23 6.23 6.23 0 0 1-.51 1.248c-.222.446-.427.815-.615 1.108.422.129.856.228 1.3.299.446.07.903.105 1.372.105a8.759 8.759 0 0 0 3.498-.703 8.975 8.975 0 0 0 2.865-1.916 9.091 9.091 0 0 0 1.934-2.865A8.885 8.885 0 0 0 18 9.5a8.76 8.76 0 0 0-.703-3.498 8.833 8.833 0 0 0-1.934-2.865 8.832 8.832 0 0 0-2.865-1.934A8.758 8.758 0 0 0 9 .5z" fill="currentColor">
                            </path>
                        </symbol>
                    </use>
                </svg>
            </a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_vimeo']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_vimeo'] != '') {?>
        <li class="vimeo">
            <a class="social-icon social-vimeo" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_vimeo'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="la la-vimeo" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_linkedin']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_linkedin'] != '') {?>
        <li class="linkedin">
            <a class="social-icon social-linkedin" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_linkedin'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="la la-linkedin" ></i></a>
        </li>
    <?php }?>
</ul>
<?php
}
}
/* {/block 'footer-social'} */
}
