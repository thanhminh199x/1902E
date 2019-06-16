<pre>
        COUNT() hàm đếm tổng số bản ghi
        AVG() tính giá trị trung bình
        SUM() tính tổng
        Cú pháp COUNT :
        SELECT COUNT(column_name) FROM table_name WHERE condition;
        Cú pháp AVG()
        SELECT AVG(column_name) FROM table_name WHERE condition;
        Cú pháp SUM()
        SELECT SUM(column_name) FROM table_name WHERE condition;

        Thực hành :
        1 đếm tổng số khách hàng trong bảng customers
        từ khóa AS để tạo ra 1 bí danh
        - SELECT COUNT(*) AS tong_khach_hang FROM customers
        nếu không dùng bí danh
        - SELECT COUNT(*) FROM customers
        đếm cột khác như là cột id
        SELECT COUNT(id) FROM customers

        2 tính giá trung bình của các sản phẩm
        SELECT AVG(list_price) FROM products

        3 tính tổng giá của các sản phẩm
        SELECT SUM(list_price) FROM products
    </pre>