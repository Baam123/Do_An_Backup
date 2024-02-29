<?php
class hanghoa
{
    function getMenuId() {
        $db = new connect;
        $select = "select * from menu ";
        $result = $db->getList($select);
        return $result;
    }
    
    //thuộc tính
    //hàm taọ
    //phuonge thức lấy sp mới
    function getHangHoaNew()
    {
        //b1: kết nối được vs dữ liệu
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lênh select cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac from hanghoa a, cthanghoa b,mausac c WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau ORDER by a.mahh DESC limit 8";
        //b3: ai thực hiện câu select ? query, mà query nằm trg getList và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 8 sp mói nhất
    }

    function getHangHoaAllNew()
    {
        //b1: kết nối được vs dữ liệu
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lênh select cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac from hanghoa a, cthanghoa b,mausac c WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia=0";
        //b3: ai thực hiện câu select ? query, mà query nằm trg getList và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 8 sp mói nhất
    }

    function getHangHoaAllSale()
    {
        //b1: kết nối được vs dữ liệu
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lênh select cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac, b.giamgia from hanghoa a, cthanghoa b,mausac c WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia !=0 ORDER by a.mahh DESC limit 4";
        //b3: ai thực hiện câu select ? query, mà query nằm trg getList và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 8 sp mói nhất
    }

    function getHangHoaAllNewPage($start, $limit)
    {
        //b1: kết nối được vs dữ liệu
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lênh select cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac, b.giamgia from hanghoa a, cthanghoa b,mausac c WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia !=0 ORDER by a.mahh DESC limit " . $start . "," . $limit;
        echo $select;
        //b3: ai thực hiện câu select ? query, mà query nằm trg getList và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 8 sp mói nhất
    }

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
        $select = "select DISTINCT a. Idmau, a.mausac from mausac a, cthanghoa b WHERE a. Idmau-b.idmau and b.idhanghoa-24";
        //b3: ai thực hiện câu select? query, mà query nằm trong getlist và getInstance?
        // câu này trả về nhiều dòng nên dùng getList
        $result = $db->getList($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }

    function getHangHoaIdSize($id)
    {
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select DISTINCT a.idsize,a.size from sizebullet a,cthanghoa b WHERE a.idsize=b.idsize and b.idhanghoa=$id";
        $result = $db->getList($select);
        return $result;
    }

    // Lấy ra hình ảnh dựa vào id
    function getHangHoaIdHinh($id)
    {
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select DISTINCT a.hinh from cthanghoa a WHERE a.idhanghoa=$id";
        $result = $db->getList($select);
        return $result;
    }

    // phương thức lấy màu dựa và id màu
    function getHangHoaMauSacId($id)
    {
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select DISTINCT a.mausac from mausac a WHERE a. Idmau=$id";
        $result = $db->getInstance($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }

    function getHangHoaIDMauSizeHinh($id, $idmau, $size)
    {
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select DISTINCT a.hinh from cthanghoa a, sizebullet b
        WHERE a.idhanghoa=$id and idmau=$idmau and b.size=$size";
        $result = $db->getInstance($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }

    // phương thức tìm kiếm
    function timKiemTenSP($tenhh)
    {
        $db = new connect();
        //b2: cần lấy cái gì thì viết câu lệnh select cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac,b.giamgia from hanghoa a, cthanghoa b,mausac c
        WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and a.tenhh like '%$tenhh%' order by a.mahh desc";
        $result = $db->getList($select);
        return $result; // lấy về đc 4 sản phẩm sale
    }
}
