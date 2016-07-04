### h5 本地存储localStorage在项目中的应用

* 手机端web电商项目中,需要记录用户停留在哪一个商品分类下面以及在该分类下作了怎样的搜索,当用户点击浏览器"返回"的时候,将之前页面的内容原样呈现给用户.
```javascript
// 本地存储类型数组
var storageTypeArray = ['sortMethod'];
// 类型索引值
var typeIndex = 0;
// 筛选条件
var sort = '价格从高到低';
// 商品分类的个数
var categoryNum = $('.category').length;
// 当前选中的商品分类的索引值
var currentCategoryIndex = $('.cur').index();
// 如果当前选中的商品分类下用户进行过搜索,则将用户的搜索条件写入到本地存储中
for (var i = 0; i < categoryNum; i++) {
    if (i == currentCategoryIndex) {
        // 用[]的形式设置本地存储,则变量可以被解析
        localStorage[storageTypeArray[typeIndex]] = sort;
    } else {
        localStorage[storageTypeArray[typeIndex]] = '';
    }
}
```
