# php laravel&CRUD會員管理

### 參考資料:
1. http://blog.chiba.tw/2020/04/05/627/
2. https://www.sitepoint.com/crud-create-read-update-delete-laravel-app/
3. https://ithelp.ithome.com.tw/articles/10193774



# git github上傳 操作

1. cd laravel20200827 開始寫程式
2. git init
3. git remote add origin https://github.com/eric19740521/laravel20200827.git
 
4. git add .
5. git status 查看加入要上傳的的檔案
6. git commit -m "init commit" 提交上傳
7. git push 上傳吧

# 如果檔案有修改後,才上傳
1. git add readme.md
2. git commit -m "修改"
3. git push

# laravel CRUD
1. 安裝laragon軟體


2. 安裝composer軟體

composer global require "laravel/installer"


3. 使用composer建立laravel20200827專案(laravel6.0版本)
composer create-project --prefer-dist laravel/laravel laravel20200827 "6.0.*"
使用者介面
composer require laravel/ui

php artisan ui bootstrap


http://laravel20200827.test =>D:\laragon\www\laravel20200827 

4. env環境變數(DB_DATABASE資料庫名稱)
composer.json 套件安裝列表
修改時區 (config\app.php)

'timezone' => 'Asia/Taipei',


5. 瀏覽器 看結果,
http://127.0.0.1/laravel20200827/public/
http://laravel20200827.test/
路由器
D:\laragon\www\laravel20200827\routes
auto.laravel20200827.test.conf 設定檔,設定 laravel20200827.test對應本機目錄(正式上線時,public目錄才能公開)


6. MVC ???為何要用MVC

https://railsbook.tw/chapters/10-mvc.html Model、View、Controller 解說




瀏覽器 
http://laravel20200827.test/hello-world


hello-word改成hello,不要帶-
php artisan make:controller hello       


7. 資料庫 建立資料表products (帶複數)
php artisan make:migration create_products_table --create=products


產生檔案 D:\laragon\www\laravel20200827\database\migrations\2020_08_26_071352_create_products_table.php




php artisan migrate: 執行所有未完成的遷移(是參考migration table裡面的紀錄)
php artisan migrate:rollback: 還原migration 操作
--step: rollback 幾步
php artisan migrate:reset: 還原所有遷移
php artisan migrate:refresh: 還原所有遷移，並再執行一次migrate
--seed: 帶入seed資料
php artisan migrate:fresh: 刪掉所有資料庫的table(包含migration table)，並再執行一次migrate


php artisan migrate:status 

建立資料表的時候，通常會在最後保留兩個欄位，created_at（建立時間）與updated_at（最後更新），
在這裡$table->timestamps(); 就是會產生這兩個欄位


8. Eloquent Model 
php artisan make:model products
產生檔案  D:\laragon\www\laravel20200827\app\products.php




一次建立物件與資料表
php artisan make:model product --migration



9.
http://laravel20200827.test/members 功能展示

動作		網址	                對應函式名稱	route 名稱
GET		/members		index		members.index
GET		/members/create		create		members.create
POST		/members		store		members.store
GET		/members/{member}	show		members.show
GET		/members/{member}/edit	edit		members.edit
PUT/PATCH	/members/{member}	update		members.update
DELETE		/members/{member}	destroy		members.destroy


php artisan make:migration create_members_table --create=members
>>產生檔案D:\laragon\www\laravel20200827\database\migrations\2020_08_26_092638_create_members_table.php

php artisan migrate:refresh
>>資料表重建


php artisan make:controller MemberController --resource --model=Member
>>加上 –resource 可以自動生成預設的七個方法
>>產生檔案D:\laragon\www\laravel20200827\app\Http\Controllers\MemberController.php
>>產生檔案D:\laragon\www\laravel20200827\app\Member.php


php artisan route:list 
>>查詢路由列表

GET/contacts, mapped to the index() method,
GET /contacts/create, mapped to the create() method,
POST /contacts, mapped to the store() method,
GET /contacts/{contact}, mapped to the show() method,
GET /contacts/{contact}/edit, mapped to the edit() method,
PUT/PATCH /contacts/{contact}, mapped to the update() method,
DELETE /contacts/{contact}, mapped to the destroy() method.





