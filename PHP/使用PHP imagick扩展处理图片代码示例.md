# 使用PHP imagick扩展处理图片代码示例

```php
$fontFace = '/font/simhei.ttf';
$fontSize = 20;

// 准备画布
$canvas = new Imagick();
$canvasWidth = 640;
$canvasHeight = 1008;
$canvas->newImage($canvasWidth, $canvasHeight, 'white');
$canvas->setImageFormat('jpg');

// 复制背景图到画布
$background = new Imagick();
$background->readImage('./bg.jpg');
$canvas->compositeImage($background, Imagick::COMPOSITE_DEFAULT, 0, 0);

// 头像缩略并合并到画布
$head = new Imagick();
$head->readImage('./head.jpg');
$head->thumbnailImage(91, 91);
$canvas->compositeImage($head, Imagick::COMPOSITE_DEFAULT, 153, 43);

// 二维码缩略并合并到画布
$qrCode = new Imagick();
$qrCode->readImage('./qrcode.png');
$qrCode->thumbnailImage(202, 202);
$canvas->compositeImage($qrCode, Imagick::COMPOSITE_DEFAULT, 220, 397);

$draw = new ImagickDraw();
// 嵌入昵称
$draw->setFont($fontFace);
$draw->setFontSize($fontSize);
$draw->setFillColor(new ImagickPixel('#fff000'));
$draw->setTextAlignment(Imagick::ALIGN_LEFT);
$canvas->annotateImage($draw, 280, 78, 0, "夏北风");

// 嵌入店名
$draw->setFont($fontFace);
$draw->setFontSize($fontSize);
$draw->setFillColor(new ImagickPixel('#ffffff'));
$draw->setTextAlignment(Imagick::ALIGN_LEFT);
$canvas->annotateImage($draw, 280, 99, 0, "邀你体验我的小店");

// 输入图片
$canvas->writeImage('./bg_new.jpg');
```
