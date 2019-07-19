<?php
APP_NAME=Laravel                  //tên dự án
APP_ENV=local                    //môi trường phát triển ứng dụng chưa vào sản phẩm
APP_KEY=                         //mã hóa, bảo mật
APP_DEBUG=true                   //báo lỗi
APP_URL=http://localhost          //cấu hình dumel
LOG_CHANNEL=stack
DB_CONNECTION=mysql           // tên người dùng csdl
DB_HOST=127.0.0.1               //địa chỉ
DB_PORT=3306                   // cổng
DB_DATABASE=laravel
DB_USERNAME=root                // tên người dùng
DB_PASSWORD=
BROADCAST_DRIVER=log                // tùy mình đặt tên
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
