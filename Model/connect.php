<?php
class connect
{
    //thuộc tính
    var $db = null;
    //hàm tạo đc gọi khi chúng ta tạo 1 đối tượng
    function __construct() // hàm tạo ko có đối số
    {
        $dsn = 'mysql:host=localhost;dbname=gunstore';
        $user = 'root';
        $pass = ''; //nếu sài xamp, wamp $pass=''; sài mamp $pass= 'root'
        //tạo đối tượng kết nối với PDO
        try {
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            echo "";
        } catch (\Throwable $th) {
            //throw $th;
            echo "Kết nối không thành công";
            echo $th;
        }
    }
    //phương thức
    //phương thức nào thực thi câu lệnh select? query
    //phương thức trả về nhiều dòng
    function getList($select)
    {
        $result = $this->db->query($select); //trả về nhiều dòng là 1 table
        return $result;
    }
    //phương thức trả về 1 dòng
    // function getInstance($select)
    // {
    //     $result = $this->db->query($select); // trả về  dòng
    //     //do trả về chỉ 1 dòng nên fetch luôn để lấy dữ liệu
    //     $result = $result->fetch(); // $result là array=(thuộc tính: giá trị1, thuộc tính 2: giá trị 2...)
    //     return $result;
    // }

    function getInstance($select)
{
    try {
        $result = $this->db->query($select); // thực hiện truy vấn
        if ($result) {
            // Nếu có kết quả trả về, lấy dòng đầu tiên
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row;
        } else {
            // Nếu không có kết quả, trả về null hoặc một giá trị mặc định khác
            return null;
        }
    } catch (PDOException $e) {
        // Ghi nhận thông báo lỗi cụ thể
        echo "Lỗi truy vấn SQL: " . $e->getMessage();
        return null;
    }
}

    //phương thức thực thi về câu lệnh insert, update, delete thi ai thực thi? exec
    function exec($query)
    {
        $result = $this->db->exec($query);
        return $result;
    }
    //phương thức prepare
    function execp($query)
    {
        $statement = $this->db->prepare($query);
        return $statement;
    }
}
