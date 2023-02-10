
$("#thumbnail").on("change", function () {
    $this = $(this)
    $this.closest(".card-body").find(".preview-image").empty()
    if($this[0].files.length > 0){
      let filereader = new FileReader()
      let $img = jQuery.parseHTML(
        "<img src='' style='display:block;margin:10px auto;width: auto;height: 150px;object-fit:cover;border:1px solid #3699ff;border-radius:5px;'>"
      )
      filereader.onload = function () {
        $img[0].src = this.result
      }
      filereader.readAsDataURL(this.files[0])
      $this.closest(".card-body").find(".preview-image").append($img)
    }
})

$("#gallery").on("change", function () {
    $this = $(this)
    $this.closest(".card-body").find(".preview-image").empty()
    for (let i = 0; i < this.files.length; ++i) {
      let filereader = new FileReader()
      let $img = jQuery.parseHTML(
        "<img src='' style='width: 100%;height: 150px;object-fit:cover;border:1px solid #3699ff;border-radius:5px;'>"
      )
      filereader.onload = function () {
        $img[0].src = this.result
      }
      filereader.readAsDataURL(this.files[i])
      $this.closest(".card-body").find(".preview-image").append($img)
    }
})


function toSlug(str)
{
    // Chuyển hết sang chữ thường
    str = str.toLowerCase();     
 
    // xóa dấu
    str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
    str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
    str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
    str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
    str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
    str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
    str = str.replace(/(đ)/g, 'd');
 
    // Xóa ký tự đặc biệt
    str = str.replace(/([^0-9a-z-\s])/g, '');
 
    // Xóa khoảng trắng thay bằng ký tự -
    str = str.replace(/(\s+)/g, '-');
 
    // xóa phần dự - ở đầu
    str = str.replace(/^-+/g, '');
 
    // xóa phần dư - ở cuối
    str = str.replace(/-+$/g, '');
 
    // return
    return str;
}