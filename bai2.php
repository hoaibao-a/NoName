<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải pt bậc nhất</title>
</head>
<body>
<?php 
      $a='';
$b='';
$x ='';
	if(isset($_POST["a"]) && isset($_POST["b"]))
	{
		$a = $_POST["a"];
		$b =$_POST["b"];


     
        // Bước 2: Validate thông tin và tính toán
        if ($a == ''){
            $result = 'Bạn chua nhập số a';
        }
        else if ($b == ''){
            $x = 'Bạn chưa nhập số b';
        }
        else if ($a == 0){
            $x = 'Số a phải nhập khác 0';
        }
        else {
            $x = -($b) / $a;
        }
	}



  
?>
<form name="form1" method="post" action="">
  <table align="center" ="center" width="400" border="1" cellspacing="1" cellpadding="1">
    <tr align="center">
      <td colspan="2">GIẢI PHƯƠNG TRÌNH BẬC NHẤT</td>
    </tr>
    <tr>
      <td width="200">PHƯƠNG TRÌNH</td>
      <td width="398">
      <input style = "width: 40px" type="text" name="a" value="<?php echo $a;?>" >
      x + 
      <input style = "width: 40px" type="text" name="b" value="<?php echo $b;?>" > 
      = 0</td>
    </tr>
    <tr>
      <td>NGHIỆM</td>
      <td><label><?php echo $x;?></label>&nbsp;</td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" name="button"  value="giải phương trình"></td>
    </tr>
  </table>
</form>

</body>
</html>