<div style="margin-left: 500px;margin-top: 100px">
    <div class="in-left" name="masbdi" >
  <div">
        <label>Đi từ: </label>
          <select name="masbdi" id="depAirport" data-mini="true" class="airport-input" placeholder="Điểm khởi hành">
              <option name="masbdi">---Chọn---</option>
              <?php foreach ($sanbay as $sb): ?>
                
                <option name="masbdi" value="<?php echo $sb['tensb'] ?>"><?php echo $sb['tensb'] ?></option>
              <?php endforeach ?>
          </select>
      
  </div>                      
  </div>
  <div class="input-group" name="masbden" style="margin-left: 500px;margin-top: 10px">
      <label>Đến : </label>
          <select name="masbden" id="arvAirport" data-mini="true" class="airport-input" placeholder="Điểm đến">
            
               <option name="masbden">---Chọn---</option>
              <?php foreach ($sanbay as $sb): ?>

                <option name="masbden" value="<?php echo $sb['tensb']  ?>"><?php echo $sb['tensb'] ?></option>
              <?php endforeach ?>
          </select>
  </div>
  <br>
  <div class="bgtext" style="margin-left: 500px;margin-top: 10px">
      <fieldset>
         <label for="datago">Ngày đi:</label>
          <input id="datepicker" name="ngaydi" type="text" class="form-control date" id="datago" placeholder="Select date..." required="" style="font-size: 12px; border: 1px solid rgb(105, 105, 105); padding: 6px 2px 4px 5px; color: rgb(0, 0, 0); background: rgb(255, 255, 255) ;width: 104px; height: 22px;top: 178px; left: 780.5px; display: block;">
      </fieldset>
   </div>
  <button style="margin-left: 400px;" type="submit" name="action" value="save_nhanvien" class="btn btn-primary">Khởi tạo chuyến bay</button>
</div>