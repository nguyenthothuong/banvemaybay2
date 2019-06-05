<!-- <?php
print_r($detailsCB);
?> -->
<div style="width: 80%;background: white;margin: 0 auto;margin-top: 30px">
	
		<li style="font-size: 23px; padding: 0px;color: red">
			<span class="first-upper" style="font-size: 25px; line-height: 71px;">
			Chọn chuyến đi
			</span>
		 
		<b><?php if(isset($_GET["masbdi"])) { echo $_GET["masbdi"]; } ?>
			
		</b>
		 -> 
		 <b><?php if(isset($_GET["masbden"])) { echo $_GET["masbden"]; } ?></b>
	</li>
	<li style="font-size: 20px;color: red"><b class="date-go">Ngày đi
		<?php if(isset($_GET["ngaydi"])) { echo $_GET["ngaydi"]; } ?>	
	</b>. Hành khách: <strong><?php if(isset($_GET["adultNo"])) { echo $_GET["adultNo"]; } ?> Người lớn,  <?php if(isset($_GET["childNo"])) { echo $_GET["childNo"]; } ?> Trẻ em, <?php if(isset($_GET["infantNo"])) { echo $_GET["infantNo"]; } ?> Em bé</strong>. <i>Giá <u>chưa</u> bao gồm thuế và phí.</i></li>
	<form>
			<table style="width:100%;border: 1px solid red">
			  <tr>
			    <th>Chuyến bay</th>
			    <th>Khởi hành</th> 
			    <th>Đến</th>
			    <th>Giá</th> 
			    <th>Chi tiết</th>
			    <th></th>
			    <br>
				

			  </tr>
			  <?php foreach ($detailsCB as $key => $value): ?>
			  	</tr>
			  		<input type="hidden" name="" value="<?php echo $value['macb'] ?>">
				  	<th><?php echo $value['tencb'] ?></th>
				    <th><?php echo $value['thoigiandi'] ?></th> 
				    <th><?php echo $value['thoigianden'] ?></th>
				    <th style="color:red"><?php echo $value['giave'] ?></th> 
				    <th><a href="?action=details_ve">Chi tiết</a></th>
				     <th style="padding-top: 5px"><button type="submit" name="action" value="chon">Chọn</button></th>
			 	</tr>
			  <?php endforeach ?>
</div>
		</table>
	</form>

</div>	