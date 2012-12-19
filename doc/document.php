<?php 
/*! \mainpage 
\tableofcontents


\section dev 开发指引
- \subpage api
- \subpage coding_standard

\page api  接口说明
\tableofcontents
\section user_module  用户模块
主要使用QQ与新浪微博用户进行登录，也可以注册一个帐号。
- 使用第三方登录时，自动创建一个帐号，与第3方帐号进行关联，密码为空
- 用帐号、密码登录时，密码不能为空。
- 用户帐号为5位以上的数字。

\subsection user_reg 用户注册
调用地址：user/reg

请求方式：GET

参数：

参数名  | 中文描述	| 类型（精度） | 是否必填 
------------- | ----------- | -------------| -------------
pwd  | 密码	| String | 必填

成功返回格式
\code{.php}
{
    "ver": "1",
    "code": 200,
    "data": {
        "id": "364584"
    }
}
\endcode

失败返回格式
\code{.php}
{
    "ver": "1",
    "code": 404,
    "data": {
        "err_code": "201012",
        "msg": "用户密码不能为空"
    }
}
\endcode

\page coding_standard  规范与约定
\tableofcontents
\section respone_format Respone格式

返回的结果集范例，包含成功与失败。

成功返回格式
\code{.php}
{
    "ver": "1",//API版本
    "code": 200,//成功结果
    "data": {//返回结果内容主体
        "id": "364584"
    }
}
\endcode

失败返回格式
\code{.php}
{
    "ver": "1",//API版本
    "code": 404,//失败结果
    "data": {//返回结果内容主体
        "err_code": "201012",
        "msg": "用户密码不能为空"
    }
}
\endcode

Respone code 的定义

描述  | 编码
------------- | ----------- 
成功  | 200
失败 | 404

\section error_code_rule 错误编码规范

错误代码使用6位16进制数字表示，最左边的1位表示错误级别，接下两位代表模块编码，最后3位标识具体的错误编号。通过错误代码即可快速定位出现问题的位置。
例：201365

错误处理的方式:
-# 直接输出
-# 抛出异常，在其他位置进行异常的捕获与显示。

错误级别

级别  | 编码
------------- | ----------- 
未知错误  | 0
系统错误  | 1
提示信息  | 2
数据库错误  | 3
文件IO错误  | 4
参数不全  | 5
网络异常  | 6

模块编码

功能模块  | 编码
------------- | ----------- 
用户  | 01
支付  | 02
关系链  | 03
活动  | 04
道具物品  | 05
统计报表  | 06


*/

