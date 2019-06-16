<pre>
        ORDER BY ( sắp xếp )
        ASC ( tăng dần )
        DESC ( giảm dần )
        Cú pháp :
        SELECT cột1, cột2, ...
        FROM tên bảng
        ORDER BY cột1, cột2, ... ASC|DESC;
        Ví dụ 1 :
        lấy ra tất cả các khách hàng trong bảng customers
        theo thứ tự id tăng dần .
        SELECT * FROM customers ORDER BY id ASC

        Ví dụ 2 :
        lấy ra tất cả các khách hàng trong bảng customers
        theo thứ tự id giảm dần .
        SELECT * FROM customers ORDER BY id DESC


        Ví dụ 3 :
        lấy ra các khách hàng sắp xếp theo tên tăng dần A - Z
        SELECT * FROM customers ORDER BY first_name ASC

         Ví dụ 4 :
        lấy ra các khách hàng sắp xếp theo tên giảm dần A - Z
        SELECT * FROM customers ORDER BY first_name DESC

        Ví dụ 5 :
        sắp xếp nhiều cột 1 lúc
        lấy ra các khách hàng sắp xếp theo nghề nghiệp tăng dần A - Z
        và city giảm dần Z - A
        SELECT id, first_name , job_title , city
FROM customers ORDER BY job_title ASC, city DESC


        Ví dụ 6 :
        sắp xếp nhiều cột 1 lúc
        lấy ra các khách hàng sắp xếp theo nghề nghiệp tăng dần A - Z
        và city tăng dần A - Z
        SELECT id, first_name , job_title , city
FROM customers ORDER BY job_title ASC, city ASC
    </pre>