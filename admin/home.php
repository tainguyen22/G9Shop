
<h3>Thống kê đơn hàng theo: <span id="text-date"></span> </h3>
<p>
  <select class="select-date">
    <option value="7ngay">7 ngày qua</option>
    <option value="28ngay">28 ngày qua</option>
    <option value="90ngay">90 ngày qua</option>
    <option value="365ngay">365ngày qua</option>
  </select>
</p>
<div id="myfirstchart" style="height: 250px;"></div>
<script type="text/javascript">
  $(document).ready(function(){
    thongke();
    var char = new Morris.Area({
    element: 'myfirstchart',

    xkey: 'date',

    ykeys: ['order','sales','quantity'],

    labels: ['Đơn hàng','Doanh thu','Số lượng bán ra']
  });
  $('.select-date').change(function(){
    var thoigian = $(this).val();
    if(thoigian=='7ngay'){
      var text = '7 ngày qua';
    }else if(thoigian=='28ngay'){
      var text = '28 ngày qua';
    }else if(thoigian=='90ngay'){
      var text = '90 ngày qua';
    }else{
      var text = '365 ngày qua';
    }
    $('#text-date').text(text);
    $.ajax({
      url:"thongke.php",
      method:"POST",
      dataType:"JSON",
      data:{thoigian:thoigian},
      success:function(data)
      {
        char.setData(data);
        $('#text-date').text(text);
      }
    });
  })
  function thongke(){
    var text = '365 ngày qua';
    $('#text-date').text(text);
    $.ajax({
      url:"thongke.php",
      method:"POST",
      dataType:"JSON",
      success:function(data)
      {
        char.setData(data);
        $('#text-date').text(text);
      }
    });
  }
});

</script>



