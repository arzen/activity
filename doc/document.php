<?php 
/*! \mainpage 
\tableofcontents

- 提供活动聚会信息
- 提供打折优惠信息

\section dev 开发指引
- \subpage module
- \subpage api
- \subpage coding_standard

\page module  模块设计

\section user_module  用户模块
- 用户名，密码，性别，生日，名称，电话号码，邮箱，QQ，状态，IP, GPS

- 关系链

发起人，接受者

- 短消息

内容，类型，发送者，接受者，状态（0-未读，1-已读）

- 区域

名称

area
(name)


\section activity_module  活动模块
- 标题，介绍，时间，地点，公开/私有，地图标示，区域,类别，允许人数，已报名人数，状态
(c_id,a_id,title,content,start_time,address,public(0私有，1公开),gps,peoples（0为不限）,attends,state[0待审核，1已审核，2已下架] )
PARTITION BY HASH( MONTH(FROM_UNIXTIME( start_time, '%Y-%m-%d' )) )
PARTITIONS 12;

- 活动分类

名称

- 活动报名者

活动ID，用户ID

\section discount_module  打折优惠信息
- 标题，介绍，时间，地点，公开/私有，地图标示，区域, 类别，状态
(c_id,a_id,title,content,start_time,end_time,address,public(0私有，1公开),gps,state[0待审核，1已审核，2已下架] )


\section comment_module  评论信息
- 标题，介绍, 作者，类别，原文ID，时间

- 打折分类

名称


\page api  接口说明
\tableofcontents
\subpage area_module
\subpage user_module

\page area_module  区域模块
\tableofcontents

\section get_all_areas 取出所有区域列表
调用地址：/areas/get_all_areas.json

请求方式：GET

成功返回格式
\code{.php}
{
    "ver": 1,
    "code": 200,
    "data": [
        {
            "id": "1",
            "name": "Futian"
        },
        {
            "id": "2",
            "name": "Futian2"
        }
    ]
}
\endcode

\section add_areas 新增区域名称
调用地址：/areas/add.json

请求方式：POST

参数：

参数名  | 描述	| 类型（精度） | 是否必填 
------------- | ----------- | -------------| -------------
name  | 区域名称	| String | 必填

成功返回格式
\code{.php}
{
    "ver": 1,
    "code": 200,
    "data": "create area success"
}
\endcode

失败返回格式
\code{.php}
{
    "ver": 1,
    "code": 404,
    "data": {
        "err_code": 207001,
        "msg": "name not empty"
    }
}
\endcode

\section edit_areas 编辑区域名称
调用地址：/areas/edit/{id}.json

请求方式：POST|PUT

参数：

参数名  | 描述	| 类型（精度） | 是否必填 
------------- | ----------- | -------------| -------------
name  | 区域名称	| String | 必填

成功返回格式
\code{.php}
{
    "ver": 1,
    "code": 200,
    "data": "modify area name success"
}
\endcode

失败返回格式
\code{.php}
{
    "ver": 1,
    "code": 404,
    "data": {
        "err_code": 207004,
        "msg": "edit record not exist."
    }
}
\endcode

\section delete_areas 删除区域名称
调用地址：/areas/delete/{id}.json

请求方式：POST

成功返回格式
\code{.php}
{
    "ver": 1,
    "code": 200,
    "data": "delete area name success"
}
\endcode

失败返回格式
\code{.php}
{
    "ver": 1,
    "code": 404,
    "data": {
        "err_code": 207006,
        "msg": "delete record not exist."
    }
}
\endcode


\page user_module  用户模块
\tableofcontents

主要使用QQ与新浪微博用户进行登录，也可以注册一个帐号。
- 使用第三方登录时，自动创建一个帐号，与第3方帐号进行关联，密码为空
- 用帐号、密码登录时，密码不能为空。
- 用户帐号为5位以上的数字。

\section user_reg 用户注册
调用地址：user/reg

请求方式：GET

参数：

参数名  | 描述	| 类型（精度） | 是否必填 
------------- | ----------- | -------------| -------------
pwd  | 密码	| String | 必填

成功返回格式
\code{.php}
{
    "ver": "1",
    "code": 200,
    "data": {
        "id": "364584",
        "access_token": "eewrw2e42fdsaw435435dsfda"
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

\subsection user_login 用户登录
调用地址：user/login

请求方式：GET

参数：

参数名  | 描述	| 类型（精度） | 是否必填 
------------- | ----------- | -------------| -------------
username  | 用户名	| String | 必填
pwd  | 密码	| String | 必填

成功返回格式
\code{.php}
{
    "ver": "1",
    "code": 200,
    "data": {
        "access_token": "eewrw2e42fdsaw435435dsfda"
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
区域  | 07

错误编码一览表

编码  | 描述
------------- | ----------- 
207001  | 区域创建失败
207002  | 区域名称编辑失败
207003  | 编辑区域名称时，使用的HTTP的调用方法不支持
207004  | 要编辑的区域ID数据不存在
207005  | 删除区域名称时，使用的HTTP的调用方法不支持，仅支付POST方式
207006  | 删除的区域ID数据不存在
207007  | 删除区域名称时，由未知原因不能正常删除

*/

