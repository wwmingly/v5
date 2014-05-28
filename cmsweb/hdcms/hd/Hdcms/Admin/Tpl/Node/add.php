<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>后台菜单管理</title>
    <hdjs/>
    <js file="__CONTROL_TPL__/js/js.js"/>
    <css file="__CONTROL_TPL__/css/css.css"/>
</head>
<body>
<form action="{|U:'add'}" method="post" class="hd-form" onsubmit="return hd_submit(this,'{|U:index}')">
    <div class="wrap">
        <div class="menu_list">
            <ul>
                <li><a href="{|U:'index'}">菜单管理</a></li>
                <li><a href="javascript:;" class="action">添加菜单</a></li>
                <li><a href="javascript:hd_ajax('{|U:update_cache}');">更新缓存</a></li>
            </ul>
        </div>
        <div class="title-header">菜单信息</div>
        <table class="table1">
            <tr>
                <td class="w100">上级:</td>
                <td>
                    <select name="pid">
                        <option value="0">一级菜单</option>
                        <list from="$node" name="n">
                                <option value="{$n.nid}" <if value="$n.nid==$hd.get.pid">selected="selected"</if>>{$n._name}</option>
                        </list>
                    </select>
                </td>
            </tr>
            <tr>
                <td>名称:</td>
                <td>
                    <input type="text" name="title" class="w200"/>
                </td>
            </tr>
            <tr>
                <td class="w100">应用:</td>
                <td>
                    <input type="text" name="app" class="w200"/>
                </td>
            </tr>
            <tr>
                <td>模块:</td>
                <td>
                    <input type="text" name="control" class="w200"/>
                </td>
            </tr>
            <tr>
                <td>方法:</td>
                <td>
                    <input type="text" name="method" class="w200"/>
                </td>
            </tr>
            <tr>
                <td>参数:</td>
                <td>
                    <input type="text" name="param" class="w300"/>
                    <span class="message">例:cid=1&mid=2</span>
                </td>
            </tr>
            <tr>
                <td>备注:</td>
                <td>
                    <textarea name="comment" class="w350 h100"></textarea>
                </td>
            </tr>
            <tr>
                <td>状态:</td>
                <td>
                    <label><input type="radio" name="state" value="1" checked="checked"> 显示</label>
                    <label><input type="radio" name="state" value="0"> 隐藏</label>
                </td>
            </tr>
            <tr>
                <td>类型:</td>
                <td>
                    <select name="type">
                        <option value="1">菜单+权限控制</option>
                        <option value="2">普通菜单</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <div class="position-bottom">
        <input type="submit" class="hd-success" value="提交"/>
    </div>
</form>
</body>
</html>