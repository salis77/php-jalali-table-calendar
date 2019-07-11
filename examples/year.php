﻿<html>
<head>
<title>Persian Calendar For Year 1398</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
@font-face {
  font-family: 'Tanha';
  src: url('fonts/Tanha-FD.eot') format('eot'),  
       url('fonts/Tanha-FD.woff') format('woff'),
       url('fonts/Tanha-FD.ttf') format('truetype');  
  font-style:normal;
  font-weight:normal;
}
Body
{  
background-color: #EEEEDD;
font-family: Tanha; 
color: #000000;
font-size: 14 px;
margin-top: 0;
margin-left: 0
}


</style>
</head>

<body>
<?php
include "../Calendar.Class.php";
$c = new Calendar;
$c->SetStyle();
?>
<div align="center">
<table width="85%">
<tr>
<td valign="top"><?php $c->ShowJalaliMonth(1398,3) ?></td>
<td valign="top"><?php $c->ShowJalaliMonth(1398,2) ?></td>
<td valign="top"><?php $c->ShowJalaliMonth(1398,1) ?></td>
</tr>
<tr>
<td valign="top"><?php $c->ShowJalaliMonth(1398,6) ?></td>
<td valign="top"><?php $c->ShowJalaliMonth(1398,5) ?></td>
<td valign="top"><?php $c->ShowJalaliMonth(1398,4) ?></td>
</tr>
<tr>
<td valign="top"><?php $c->ShowJalaliMonth(1398,9) ?></td>
<td valign="top"><?php $c->ShowJalaliMonth(1398,8) ?></td>
<td valign="top"><?php $c->ShowJalaliMonth(1398,7) ?></td>
</tr>
<tr>
<td valign="top"><?php $c->ShowJalaliMonth(1398,12) ?></td>
<td valign="top"><?php $c->ShowJalaliMonth(1398,11) ?></td>
<td valign="top"><?php $c->ShowJalaliMonth(1398,10) ?></td>
</tr>
</table>
</div>
<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	jQuery(document).on("click",".ct-tooltipss-load",function() {
    var selected_dates = ' :تاریخ مورد نظر <br>'+jQuery(this).data('selected_dates');
    var datess=selected_dates+'-';
 bits = datess.split('-').slice(0, -1);
    if(datess.indexOf('--')>=1 || bits[2]>31 || bits[2]== 00){
        $(this).removeClass('activetd');
        $(this).removeClass('ct-weekday');
    }else {
        Swal.fire({
  				position: 'top-end',
 				 type: 'success',
 				 title: selected_dates,
  				showConfirmButton: false,
  				timer: 1500
				});
    }
});
</script>
</body>
</html>
