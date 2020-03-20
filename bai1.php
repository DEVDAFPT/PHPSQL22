<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="POSTex1.php" method="POST" role="form">
            <h1 align="center">Zent Group-PHP-Thực hành về gửi dữ liệu dùng POST</h1>
            <hr>
            
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="maSV">
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name">
            </div>  

            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone">
            </div> 

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email">
            </div> 

            <div class="form-group"> 
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
            </div> 

            <div><label for="">Giới tính</label></div>
            <label class="radio-inline">          <input name="sex" id="inlineCheckbox1" value="Male" type="radio">           Nam </label>
            <label class="radio-inline">          <input name="sex" id="inlineCheckbox2" value="Female" type="radio">          Nữ </label> 
            <label class="radio-inline">          <input name="sex" id="inlineCheckbox2" value="Other" type="radio">          Khác </label>
            <hr>
            
            <div><button type="submit" class="btn btn-primary">Lưu thông tin</button></div>
        </form>
    </div>
</body>
</html>