<?php 
/*! \mainpage 
\tableofcontents


\section dev 开发指引
- \subpage api
- \subpage coding_standard

\page api  接口说明
\tableofcontents
\section user_module  用户模块
\subsection user_reg 用户注册
调用地址：user/reg

请求方式：GET

参数：

参数名  | 中文描述	| 类型（精度） | 是否必填 
------------- | ----------- | -------------| -------------
name  | 用户名	| String | 必填
pwd  | 密码	| String | 必填

成功返回格式
\code{.php}

\endcode

失败返回格式
\code{.php}

\endcode

\page coding_standard  规范与约定
\tableofcontents
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

