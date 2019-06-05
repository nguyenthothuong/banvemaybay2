<form method="POST" action="" role="form">
	<h4 style="text-align: center;color: red;margin-top: 10px">THÔNG TIN LIÊN HỆ</h4>
	<table style="margin:0 auto;">
		<tbody><tr><td class="text-right">Họ và Tên (*)</td><td>
		<input name="fullname" class="form-control" id="fullname" value="" data-val="true" data-val-length="The field Name must be a string with a maximum length of 200." data-val-length-max="200" data-val-length-min="5" data-val-required="Họ tên bắt buộc" placeholder="Ví dụ: Nguyen Thi Tuyet" title="Vui lòng nhập họ và tên." pattern=".{3,}" required=""></td></tr>
		
		<tr><td class="text-right">Số điện thoại di động (*)</td><td> 
		<input name="phone" class="form-control" id="phone" value="" data-val="true" data-val-phone="Số điện thoại không hợp lệ" data-val-length-max="200" data-val-length-min="5" data-val-required="Phone bắt buộc" placeholder="Ví dụ: 028 3949 3949" title="Vui lòng nhập số điện thoại." pattern="\d{10,11}" required=""></td></tr>
		
		<tr><td class="text-right">Email (*)</td><td>
		<input name="email" class="form-control" id="email" value="" type="email" data-val="true" data-val-length="The field Name must be a string with a maximum length of 200." data-val-length-max="200" data-val-length-min="5" data-val-required="Email bắt buộc" placeholder="Ví dụ: anhtuyet@gmail.com" title="Vui lòng nhập email." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required=""></td></tr>
		
		<tr><td class="text-right">Địa chỉ</td><td>
		<textarea name="address" class="form-control" rows="3" style="padding: 10px; width: 328px;"></textarea></td></tr>
		
		<tr style="display:none;"><td></td><td><label><input id="xuathoadon-toggle" type="checkbox"> Tôi muốn xuất hóa đơn </label></td></tr>	
	</tbody>

</table>
<div style="display: block;text-align: center;margin-top: 20px">
		<button type="submit" name="action" value="tieptuc">Tiếp tục</button>								
</form>