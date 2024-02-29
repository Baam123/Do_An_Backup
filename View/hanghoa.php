<?php
class hanghoa
{
    
    // thuoc tinh
    //ham tao
    //phuong thuc lấy sản phẩm mới
    function getHangHoaNew()
    {
        //b1: kết nối được với dữ liệu
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac from hanghoa a, cthanghoa b,mausac c WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau ORDER by a.mahh DESC limit 8";
        //b3: ai thực hiện câu select? query, mà query nằm trong getList và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 8 sản phẩm mới nhất
    }
    function getHangHoaSale()
    {
        //b1: kết nối được với dữ liệu
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac,b.giamgia 
            from hanghoa a, cthanghoa b,mausac c 
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia!=0 ORDER by a.mahh DESC limit 4";
        //b3: ai thực hiện câu select? query, mà query nằm trong getList và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }
    function getHangHoaAllNew()
    {
        //b1: kết nối được với dữ liệu
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac,b.giamgia 
            from hanghoa a, cthanghoa b,mausac c WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia=0 order by a.mahh desc";
        //b3: ai thực hiện câu select? query, mà query nằm trong getList và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }
    // PT lấy tất cả sản phẩm sale
    function getHangHoaAllSale()
    {
        //b1: kết nối được với dữ liệu
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac,b.giamgia 
            from hanghoa a, cthanghoa b,mausac c
             WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia!=0 order by a.mahh desc";
        //b3: ai thực hiện câu select? query, mà query nằm trong getList và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }
    // pt lấy giá trị 14 sản phẩm
    // function getCountHangHoaAll()
    // {
    //     $db=new connect();
    //     $select="select count(a.mahh) from hanghoa a, cthanghoa b,mausac c WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia=0 order by a.mahh desc";
    //     // query, nằm trong 2 pt là getList và getInstance,
    //     $result=$db->getInstance($select);
    //     return $result[0];//trả về số 14
    // }
    // phương thức phân trang trên tổng số sản phẩm
    function getHangHoaAllNewPage($start, $limit)
    {
        //b1: kết nối được với dữ liệu
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac,b.giamgia 
            from hanghoa a, cthanghoa b,mausac c WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia=0 order by a.mahh desc limit " . $start . "," . $limit;
        //b3: ai thực hiện câu select? query, mà query nằm trong getList và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }
    // select a.mahh,a.tenhh,b.dongia from hanghoa a, cthanghoa b WHERE a.mahh=b.idhanghoa and a.mahh=1;
    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "select DISTINCT a.mahh,a.tenhh,b.dongia,a.mota from hanghoa a, cthanghoa b
             WHERE a.mahh=b.idhanghoa and a.mahh=$id";
        $result = $db->getInstance($select);
        return $result; // array chỉ chứa 1 sản phẩm
    }
    function getHangHoaIdMau($id)
    {
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select DISTINCT a.Idmau,a.mausac from mausac a, cthanghoa b WHERE a.Idmau=b.idmau and b.idhanghoa=24";
        //b3: ai thực hiện câu select? query, mà query nằm trong getList và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }
    // phương thức lấy size dựa vào id
    function getHangHoaIdSize($id)
    {
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select DISTINCT a.idsize,a.size from sizebullet a,cthanghoa b WHERE a.idsize=b.idsize and b.idhanghoa=$id";

        $result = $db->getList($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }
    // lấy ra hình ảnh dựa vào id
    function getHangHoaIdHinh($id)
    {
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select DISTINCT a.hinh from cthanghoa a WHERE a.idhanghoa=$id";

        $result = $db->getList($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }
}
