<?php
class page
{
    //phương thứ tính ra số trang dựa tren tổng số sp và giới hạn
    function findPage($count, $limit)
    {
        $page = (($count % $limit) == 0 ? ($count / $limit) : ceil($count / $limit));
        return $page; //2
    }
    //tính start dựa vào limit và trang hiện tại, để bt đc trang hiện tại
    // thì cho biến page, trên url
    function findStart($limit)
    {
        if (isset($_GET['page'])) {
            if ($_GET['page'] == 1) {
                $start = 0;
            } else {
                $start = ($_GET['page'] - 1) * $limit; //8
            }
            return $start; //8
        }
    }
}
