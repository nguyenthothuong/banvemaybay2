<table style="margin:0 auto;margin-top: 50px;width: 80%;">
	<?php print_r($macb)?>
	<?php foreach ($details_ve as $key => $value): ?>
		<tr style="border-top:1px solid black">
			<td>Từ <strong><?php if(isset($_GET["masbdi"])) { echo $_GET["masbdi"]; } ?></strong></td> <td>Đến <strong><?php if(isset($_GET["masbden"])) { echo $_GET["masbden"]; } ?></strong></td><td>Hãng: <strong>VietJet</strong></td></tr>
		
		<tr style="border-top:1px solid black">
			<td><strong>22:35</strong>; 24/05/2019</td> <td><strong>00:40</strong>; 25/05/2019</td><td>Hạng vé: <strong>Eco</strong></td>
		</tr>

		<tr style="border-top:1px solid black">
			<td>Sân bay: Tansonnhat ...</td> <td>Sân bay: Noibai Intl</td><td>Chuyến bay: <strong>VJ164</strong></td>
		</tr>
		<tr style="border-top:1px solid black">
			<td>Hành khách</td><td>Số lượng</td><td>Giá</td><td>Thuế &amp; Phí</td><td>Tổng cộng</td>
		</tr>

		<tr style="border-top:1px solid black">
			<td>Người lớn</td><td>1</td><td>1.030.000 VNĐ</td><td>595.000 VNĐ</td><td>1.625.000 VNĐ</td>
		</tr>

		<tr style="border-top:1px solid black">
			<td colspan="3"></td><td colspan="2">Tổng cộng: 1.625.000 VNĐ</td>
		</tr>
	 <?php endforeach ?>
</table>