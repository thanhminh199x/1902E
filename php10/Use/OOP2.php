<php
đặc điểm  Đài phát thanh {
    chức năng  công cộng lắng nghe () {
    tiếng vang  " <br> "  .  __METHOD__ ;
    }
}
đặc điểm  Ipod {
    hàm  công khai lắng ngheMusic () {
    tiếng vang  " <br> "  .  __METHOD__ ;
    }
}
tính trạng  máy tính {
    hàm  công khai sendEmail () {
    tiếng vang  " <br> "  .  __METHOD__ ;
    }
     từ chức năng  công cộng () {
    tiếng vang  " <br> "  .  __METHOD__ ;
    }
     chức năng  công cộng webBrowser () {
    tiếng vang  " <br> "  .  __METHOD__ ;
    }
     hàm  công khai playGame () {
    tiếng vang  " <br> "  .  __METHOD__ ;
    }
}
lớp  ClassicPhone {
    hàm  công khai callVoice () {
    tiếng vang  " <br> "  .  __METHOD__ ;
    }
     hàm  công khai receiveVoice () {
    tiếng vang  " <br> "  .  __METHOD__ ;
    }
}
 điện thoại thông minh  lớp mở rộng  ClassicPhone {
    // Khai báo các đặc điểm mà lớp này trong đó
    / **
    * Từ khóa sử dụng từ trong lớp là khai báo tính trạng mà lớp này
    * đặc điểm của chúng tôi
    * Cần thiết, từ khóa và cách sử dụng
    * /
    sử dụng  Radio , Ipod , Máy tính ;
     hàm  công khai sendSms () {
    tiếng vang  " <br> "  .  __METHOD__ ;
    }
     hàm  công khai receiveSms () {
    tiếng vang  " <br> "  .  __METHOD__ ;
    }
}
$ samsung  =  Điện thoại thông minh mới  ();
// Phương thức tính toán bên trong lớp
$ samsung -> sendSms ();
// Phương thức tính toán của lớp cha cha
$ samsung -> callVoice ();
// Cướp được
$ samsung -> ngheMusic ();
$ samsung -> playGame ();