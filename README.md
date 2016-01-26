# miniFramework
mini PHP MVC Framework
<br/>只包含一个MVC骨架， 实现了数据库操作库illuminate/database
##安装说明
执行数据库脚本website.sql
<br/>配置数据库信息 app/database.php
<br/>将public目录设为站点的根目录， 可以通过http://localhost 访问到默认的controller  home的index方法
<br/>可以通过http://localhost/lilu  可以为home的index方法传递参数值 "lilu"
<br/>可以通过http://localhost/home/create/yourname/yourpassword  可以为home的create方法传递参数，从而在数据库中插入数据。
......
