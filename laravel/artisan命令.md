#### 控制器
```
// 5.2版本创建一个空控制器
php artisan make:controller BlogController
// 创建Rest风格资源控制器
php artisan make:controller PhotoController --resource
// 指定创建位置 在app目录下创建TestController
php artisan make:controller App\TestController
// 指定路径创建
php artisan make:Model App\\Models\\User(linux or macOs 加上转义符)
// 数据迁移
php artisan migrate
```
#### 数据迁移