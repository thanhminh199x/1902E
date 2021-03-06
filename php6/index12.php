<pre>
        LIKE ( thường được dùng để tìm kiếm )
        Cú pháp :
        SELECT column1, column2, ... FROM table_name WHERE columnN LIKE pattern;
        Ký hiệu MySQL
        % đại diện cho 0,1 hoặc là nhiều ký tự
        _ đại diện 1 ký tự
        Ví dụ :
        WHERE CustomerName LIKE 'a%' Tìm mọi giá trị của tên khách hàng bắt đầu là chữ "a"
        - SELECT * FROM customers WHERE first_name LIKE 'a%'
        WHERE CustomerName LIKE '%a' Tìm mọi giá trị của tên khách hàng kết thúc là chữ "a"
        - SELECT * FROM customers WHERE first_name LIKE '%a'
        WHERE CustomerName LIKE '%or%'	Tìm mọi giá trị của tên khách hàng có chữa chữ "or"
        - SELECT * FROM customers WHERE first_name LIKE '%or%'
        WHERE CustomerName LIKE '_r%'	Tìm mọi giá trị của tên khách hàng có chữ "r" là chữ thứ 2
        WHERE CustomerName LIKE 'a__%'	Tìm mọi giá trị của tên khách hàng có bắt đầu là chữ "a" và
        có ít nhất 3
        WHERE CustomerName LIKE 'a%o'	Tìm mọi giá trị của tên khách hàng có chữ bắt đầu là "a" là chữ
        kế thúc là "o"

    </pre>