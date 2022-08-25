
<form action="tao_book.php" method="POST" enctype="multipart/form-data">
    <label for="">Booke title</label>
    <input type="text" name="book_title">
    <br>
    <label for="">Image</label>
    <input type="file" name="image">
    <br>
    <label for="">Intro</label>
    <input type="text" name="intro">
    <br>
    <label for="">Detail</label>
    <input type="text" name="detail">
    <br>
    <label for="">Page</label>
    <input type="number" name="page" min=1>
    <br>
    <label for="">Price</label>
    <input type="number" name="price" min=1>
    <br>
    <label for="">Cate_id</label>
    <select name="cate_id" id="">
        <option value="1">Sách thiếu nhi</option>
        <option value="2">Sách triết lý</option>
        <option value="3">Sách xì ke Tiến</option>
    </select>
    <br>
    <button>Tạo mới</button>
</form>



