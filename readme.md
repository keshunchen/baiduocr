# 百度文字识别
百度文字识别API在Laravel5中的简单封装，具体API使用详情参见[百度文字识别API](http://ai.baidu.com/tech/ocr)

## Install
直接在`composer.json`中添加`"keshunchen/baiduocr": "~1.0"`
或者直接`composer require "keshunchen/baiduocr"`。

## For `laravel5`:
#### 1.安装该插件

#### 2.在`config/app.php`文件内添加

```php
    'providers' => [
        Keshunchen\Baiduocr\BaiduocrServiceProvider::class,
    ],
    
    'aliases' => [
        'Baiduocr' => Keshunchen\Baiduocr\BaiduocrFacade::class,
    ],
```

#### 3. 配置文件

```php
    php artisan vendor:publish
```
修改config/baiduocr.php配置百度API参数


#### 4. 使用

```php
    \Baiduocr::idcard($image, $isFront, $options);
```


## License
MIT

