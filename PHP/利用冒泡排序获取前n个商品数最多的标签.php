<?php 
/**
 * 利用冒泡排序获取前n个商品数最多的商品标签
 * 
 * 场景：商品分类是二级分类，仅商品二级分类可以添加商品标签，添加商品的时候需要选择商品分类和商品标签
 * @author xiabeifeng
 * @date 2016-06-18
 */

/**
 * 根据商品分类id获得商品标签
 * @param int $cid 商品分类id
 * @return string $tags 商品标签，例如"袜子,时尚,经典"
 */
function getAllTags($cid)
{
    $m = new Model('category');
    $m->find($cid);
    if ($m->has_id()) {
        if ($m->parent_id == 0) {
            $m = new Model('category');
            $children = $m->where(array('parent_id' => $cid))->list_all_array();
            if ($children) {
                foreach ($children as $v) {
                    $tags[] = $v['tags'];
                }
                $tags = implode(',', $tags);
            } else {
                $tags = '';
            }
        } else {
            $tags = $m->tags;
        }
    } else {
        $tags = '';
    }
    return $tags;
}

/**
 * 查询商品标签具有的商品的数量
 * @param string $tags 商品标签
 * @param array $tags 具有商品数量的标签数组  
 */
function getTagProductNumber($tags)
{
    if ($tags) {
        $t = explode(',', $tags);
        $tags = array();
        foreach ($t as $v) {
            $db = DB::get_db();
            $sql = 'SELECT COUNT(id) AS product_number FROM product';
            $sql .= ' WHERE find_in_set("' . $v . '", tags)';
            $result = $db->query($sql);
            $productNumber = $result[0]['product_number'] ? intval($result[0]['product_number']) : 0;
            $tags[] = array('tag' => $v, 'product_number' => $productNumber);
        }        
    } else {
        $tags = array();
    }
    return $tags;
}

/**
 * 使用冒泡排序筛选出排在前n的商品标签
 * @param array $tags 商品标签数组
 * @param int $n 取排在前n的标签
 */
function sortTags($tags, $n = 20)
{
    $newTags = array();
    if ($tags) {
        $c = count($tags);
        for ($i = 0; $i < $c - 1; $i++) {
            for ($j = 0; $j < $c - $i - 1; $j++) {
                if ($tags[$j+1]['product_number'] > $tags[$j]['product_number']) {
                    $t = $tags[$j+1];
                    $tags[$j+1] = $tags[$j];
                    $tags[$j] = $t;
                }
            }
            if ($i < $n) {
                $newTags[] = $tags[$i];
            } else {
                break;
            }
        }
    }
    return $newTags;
}
