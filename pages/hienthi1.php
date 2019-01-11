<<<<<<< HEAD
<?php if(isset($_GET["hienthi"]))
        $hienthi=$_GET["hienthi"];
        else
            $hienthi="";
              switch ($hienthi) {
                  case 'thongtincanhan':
                  require "noidung/thongtincanhan.php";
                      # code...
                      break;
                  case 'thongtingiaodich':
                  require "noidung/thongtingiaodich.php";
                  break;
                  case 'timkiemdoitac':
                  require "trangchu/hienthidoitac.php";
                    # code...
                    break;
                  
    
                  default:
                  require "trangchu/hienthi.php";
                      # code...
                      break;
              }
=======
<?php if(isset($_GET["hienthi"]))
        $hienthi=$_GET["hienthi"];
        else
            $hienthi="";
              switch ($hienthi) {
                  case 'thongtincanhan':
                  require "noidung/thongtincanhan.php";
                      # code...
                      break;
                  case 'thongtingiaodich':
                  require "noidung/thongtingiaodich.php";
                  break;
                  case 'timkiemdoitac':
                  require "trangchu/hienthidoitac.php";
                    # code...
                    break;
                  
    
                  default:
                  require "trangchu/hienthi.php";
                      # code...
                      break;
              }
>>>>>>> 1332d43e1780d2a41f7374acb8f3aa9af08d9f33
              ?>