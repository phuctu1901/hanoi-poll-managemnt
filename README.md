<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## web khảo sát ý kiến công dân hà nội dựa trên định danh phân tán

### i. quy trình thực hiện:
*yêu cầu hệ thống*
vì ứng dụng định danh phân tán vào trong quá trình đóng góp ý kiến trong trưng bay ý kiến công dân nên điều 

Bước 1: quét mã qr code của web trưng bày ý kiến để kết nối đến hệ thống (connection id)

Bước 2: hệ thống sẽ dựa vào `connection id` mà kết nối đến wallet của người dùng. hệ thống sẽ yêu cầu người dùng cung cấp thông tin xác thực về cuộc trưng cầu ý kiến, mà ở đây là `địa chỉ cư trú` (address). người dùng xác nhận chấp nhận cung cấp thông tin. Sau đó thông tin này sẽ được điên vào form có sẵn

Bước 3: người dùng nhập ý kiến và gởi về hệ thống.

Bươc 4: kết thúc

https://github.com/hyperledger/aries-cloudagent-python/blob/master/docs/GettingStartedAriesDev/RoutingEncryption.md
Mai đọc cái này để xem triển khai Aries Cloud Agent Python có khả thi hay không.

```html
  <select id="tourtype_id" name="poll_type"
                                                                                        class="form-control">
                                                                                    <option value="0" selected="" disabled="">Chọn loại câu hỏi
                                                                                    </option>

                                                                                    <option value="1">Tự luận</option>
                                                                                    <option value="2">Trắc nghiệm chọn 1 đáp án</option>
                                                                                    <option value="2">Trắc nghiệm chọn nhiều đáp án</option>
                                                                                </select>
```
