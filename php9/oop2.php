<?php
class productModel extends Database {
    public $table = "product";
    public function __construct($ipDatabase, $userDatabase, $passDatabase, $databaseName)
    {
        parent::__construct($ipDatabase, $userDatabase, $passDatabase, $databaseName);
    }
piblic function __construct($ipDatabase,$useDatabase,$passDatabase,$databaseName)
{
parent::__construct($ipDatabase,$useDatabase,$passDatabase,$databaseName);
}
public function index(){
    $sqlSelect = "SELECT * FROM".$this->table;
    $result = $this->connection->query($sqlSelect);

    return $result;

    }

    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * không cần cái key id array('product_name' => 'son môi')
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function create($data) {
        // $this->connection
        if (isset($data["product_name"]) && isset($data["product_desc"]) && isset($data["created"])) {
            $product_name = $data["product_name"];
            $product_desc = $data["product_desc"];
            $created = $data["created"];
            $sqlInsert = "INSERT INTO ".$this->table." (product_name, product_desc, created) 
VALUES ('$product_name', '$product_desc', '$created')";
            // Thực hiện câu SQL
            return $this->connection->query($sqlInsert);
        }
    }
    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * $data cần đủ các cột trong CSDL của bảng products
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function edit($data) {
        // $this->connection
        if (isset($data["product_name"]) && isset($data["product_desc"]) && isset($data["created"])  && isset($data["id"])){
            $id =$data["id"];
            $product_name = $data["product_name"];
            $product_desc =$data["product_desc"];
            $created = $data["created"];
            $sqledit = "UPDATE ".$this->table . " SET product_name='$product_name',product_desc='$product_desc',created=$created  WHERE id=$id";
//            thực hiện câu lệnh sql
            $result = $this->connection ->query( $sqledit);
            return $result;

        }
    /**
     * Xóa
     * @param $prodcut_id
     */
    public function delete($data) {
        $id=$data["id"];
        $sqldelete ="delete prom".$this->table.where id ="id";
        $result = $this->connection-<puery($sqldelete);
        return $result;

    }
}