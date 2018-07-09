<script>
		var dd, mm, yy, h, m, s;
	 	function startTime() {
		    var today = new Date();
		    dd = today.getDate();
		    mm = today.getMonth()+1;
		    yy = today.getFullYear();	
		    h = today.getHours();
		    m = today.getMinutes();
		    s = today.getSeconds();
		    dd = checkTime(dd);
		    mm = checkTime(mm);
		    m = checkTime(m);
		    s = checkTime(s);
		    document.getElementById('txt').innerHTML =
		    "DATE TIME: " + yy + "" + mm + "" + dd + "-" +h + "" + m + "" + s;
		    var t = setTimeout(startTime, 500);
	  	}

		function checkTime(i) {
		    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		    return i;
		}
	  
		function copyToClipboard(element) {
		  var $temp = $("<input>");
		  $("body").append($temp);
		  $temp.val($(element).text()).select();
		  document.execCommand("copy");
		  $temp.remove();
		}

</script>