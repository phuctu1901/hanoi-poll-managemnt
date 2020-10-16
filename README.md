<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>



## HỆ THỐNG KHẢO SAT Ý KIẾN DỰA TRÊN ĐỊNH DANH PHÂN TÁN

### I. Quy trình thực hiện:
**Yêu cầu hệ thống**

Vì ứng dụng định danh phân tán vào trong quá trình đóng góp ý kiến trong trưng bay ý kiến công dân nên điều 

Bước 1: quét mã qr code của web trưng bày ý kiến để kết nối đến hệ thống (connection id
Bước 2: hệ thống sẽ dựa vào `connection id` mà kết nối đến wallet của người dùng. hệ thống sẽ yêu cầu người dùng cung cấp thông tin xác thực về cuộc trưng cầu ý kiến, mà ở đây là `địa chỉ cư trú` (address). người dùng xác nhận chấp nhận cung cấp thông tin. Sau đó thông tin này sẽ được điên vào form có sẵn

Bước 3: người dùng nhập ý kiến và gởi về hệ thống.

Bươc 4: kết thúc 

https://github.com/hyperledger/aries-cloudagent-python/blob/master/docs/GettingStartedAriesDev/RoutingEncryption.md
Mai đọc cái này để xem triển khai Aries Cloud Agent Python có khả thi hay không.

```html
<select id="tourtype_id" name="poll_type" class="form-control">
    <option value="0" selected="" disabled="">Chọn loại câu hỏi
    </option>

    <option value="1">Tự luận</option>
    <option value="2">Trắc nghiệm chọn 1 đáp án</option>
    <option value="2">Trắc nghiệm chọn nhiều đáp án</option>
</select>
```


```javascript
var data = $('input[name="option[]"]').serializeArray();
```

Phân loại tài khoản:

Loại 1: Tài khoản hệ 
thống
- Quản trị
- Nhân viên

Loại 2: Tài khoản của tổ 
chức
- Quản trị của tổ chức
- Nhân viên

Loại 3: Người dùng
- Không cần tài khoản


Các quyền trong hệ thống:
- Tạo cuộc trưng cầu ý kiến mới
- Chỉnh sửa cuộc trưng cầu ý kiến
- Phê duyệt cuộc trưng cầu ý kiến
- Tra cứu kết quả cuộc trưng cầu ý kiến
- Quản trị người dùng
- Quản trị tổ chức
- Download kết quả


Các trạng thái của cuộc khảo sát
- Chưa bắt đầu (Trạng thái mặc định) - 0
- Đang diễn ra (Đang cho phép diễn ra) - 1
- Đã kết thúc (Đã hoàn thành) - 2
- Đã đóng (Chưa kết thúc nhưng dừng lại) - 3


Sửa lại Role Permission để phù hợp với nhiều tổ chức và admin
- Thêm trường `organization_id` tới bảng `roles`
> Mục đích của việc này để các tổ chức khác nhau tạo ra các loại người dùng khác nhau thì sẽ không bị tổ chức khác can thiệp
- Thêm trường `isAdminPermissions` tới bảng `permissions`
> Chỉ hiển thị các quyền phù hợp với loại tài khoản
- Thêm trường `displayName` tới bảng `roles` và `permissions`
> Phong phú hơn và dễ hiểu hơn việc hiển thị các quyền và loại tài khoản

