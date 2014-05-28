<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>修改Tag</title>
    <hdjs/>
    <js file="__GROUP__/static/js/js.js"/>
    <js file="__CONTROL_TPL__/js/tag.js"/>
    <js file="__CONTROL_TPL__/js/validate.js"/>
    <css file="__CONTROL_TPL__/css/tag.css"/>
</head>
<body>
<div class="wrap">
    <div class="menu_list">
        <ul>
            <li><a href="{|U:'index'}">tag列表</a></li>
            <li><a href="javascript:;" class="action">修改tag</a></li>
        </ul>
    </div>
    <div class="title-header">修改Tag</div>
    <form action="{|U:'edit'}" method="post" onsubmit="return hd_submit(this,'{|U:index}')" class="hd-form">
        <input type="hidden" name="tid" value="{$field.tid}"/>
        <table class="table1">
            <tr>
                <th class="w100">tag</th>
                <td>
                    <input type="text" name="tag" value="{$field.tag}" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">统计</th>
                <td>
                    <input type="text" name="total" value="{$field.total}" class="w200"/>
                </td>
            </tr>
        </table>
        <div class="position-bottom">
            <input type="submit" class="hd-success" value="确定"/>
        </div>
    </form>
</div>
</body>
</html>