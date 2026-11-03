# 二维码扩展

PhalApi 二维码扩展，基于[PHP QRCode](http://phpqrcode.sourceforge.net)实现。可用于生成二维码图片。  

## 版本与运行环境

| 项目 | 说明 |
|---|---|
| 当前版本 | **v8.0.0** |
| PHP 要求 | **>= 8.0**（已实测 8.0 与 8.4） |
| 扩展依赖 | `gd`（生成 PNG 图片必需） |

> **版本号说明**：`v8.0.0` 中的 **8 表示“支持 PHP 8”**，不是 PhalAPI 的第 8 代版本。
>
> 本扩展代码已通过 PHP 8.0 与 8.4 实测（生成 PNG 正常、无弃用告警），v8.0.0 起 `composer.json` 要求 `php >=8.0`。

## 安装和配置
修改项目下的composer.json文件，并添加：  
```
    "phalapi/qrcode":"^8.0"
```
然后执行```composer update```。  

## 注册
在/path/to/phalapi/config/di.php文件中，注册：  
```php
$di->qrcode = function() {
    return new \PhalApi\QrCode\Lite();
};
```

## 使用
第一种使用方式：直接输出二维码图片：
```php
\PhalApi\DI()->qrcode->png('Hello PhalApi!', false, 'L', 4);
```

效果类似如下：  
![](http://7xiz2f.com1.z0.glb.clouddn.com/20171121225722_9b8f48f3986e2026363584dba7c56621)

或者直接浏览器访问：[http://api.phalapi.net/?s=QrCode.Png&data=Hello%20PhalApi!&size=10](http://api.phalapi.net/?s=QrCode.Png&data=Hello%20PhalApi!&size=10)  

第二种使用方式：将二维码图片保存到文件。
```
\PhalApi\DI()->qrcode->png('Hello PhalApi!', '/path/to/your_file.png', 'L', 4);
```

## 代码示例
可参考[PhalApi的示例源代码](https://github.com/phalapi/phalapi/blob/master-2x/src/app/Api/Examples/QrCode.php)。