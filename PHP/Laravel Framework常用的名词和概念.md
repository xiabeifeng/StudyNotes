# Laravel Framework常用的名词和概念

* Database Migrations:

> Laravel's database migrations provide an easy way to define your database table structure and modifications using fluent, expressive PHP code. Instead of telling your team members to manually add columns to their local copy of the database, your teammates can simply run the migrations you push into source control.

> 可以采用把数据库导出成.sql文件，提交到版本库中，每次表结构发生变化的时候，同时更新版本库中的.sql文件（尽量保证团队成员使用的数据库管理工具一致），这样可以做到laravel database migrate同样的效果。

* Artisan CLI

> The Artisan CLI can be used to generate a variety of classes and will save you a lot of typing as you build your Laravel projects. 

> Use the make:migration command to generate a new database migration.

> To run our migration, we will use the migrate Artisan command. 

> We can use an Artisan command to generate this model.

* the Eloquent ORM(object-relational mapper)

> Eloquent is Laravel's default ORM (object-relational mapper). Eloquent makes it painless to retrieve and store data in your database using clearly defined "models". Usually, each Eloquent model corresponds directly with a single database table。Eloquent是Laravel的默认ORM。Eloquent使用明确定义的模型使得在你的数据库中检索和存储数据变得无痛。通常，每一个Eloquent模型直接对应一个单独的数据库表。

> Model file will be placed in the app directory of your application.

* Routing

> Routes are used to point URLs to controllers or anonymous functions that should be executed when a user accesses a given page. By default, all Laravel routes are defined in the app/Http/routes.php file that is included in every new project.

* validation

* Views

> All Laravel views are stored in resources/views.

> The .blade.php extension instructs the framework to use the Blade templating engine to render the view.

* Blade templates
