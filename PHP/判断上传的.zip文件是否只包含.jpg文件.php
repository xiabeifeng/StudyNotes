<?php
/**
 * @author xiabeifeng
 * @date   2016-04-28 
 */
$zipFilePath = '/opt/lampp/www/shop/upload/temp/product_image.zip';

// 判断压缩文件是否合法(仅包含.jpg文件)
$legal = 1;
$zipArchive = new ZipArchive();
$zipArchive->open($zipFilePath);
for ($i = 0; $i < $zipArchive->numFiles; $i++) {
    if (strpos($zipArchive->statIndex($i)['name'], '.jpg') === false) {
        $legal = 0;
        break;
    }
}

if ($legal == 1) {
    // 将上传的压缩文件解压到指定目录
} else {
    die('您上传的压缩文件不合法(仅能包含.jpg文件)');
}
