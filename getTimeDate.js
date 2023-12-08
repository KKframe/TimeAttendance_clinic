
	function fillZero(n){
		if(n<10){n ="0"+n};
		return n;
	}
	
	function startDateTime(){
	var today = new Date();
	var day = today.getDay();
	var hr = today.getHours();
	var date = today.getDate();
	var min = today.getMinutes();
	var sec = today.getSeconds();
	var year = today.getFullYear();
	var month = today.getMonth()+1;
	
        mt=['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
	d=['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
        
        document.getElementById('dispTime').innerHTML = fillZero(hr)+":"+fillZero(min)+":"+fillZero(sec);
	document.getElementById('dispDate').innerHTML = "วัน"+ d[day]+"  ที่  "+date+"  "+mt[month]+"  "+(year+543);
	
	colors=["red","yellow","pink","green","orange","skyblue","purple"];
	//document.getElementById('dispDate').style.color = colors[day];
	
        var t = setTimeout(startDateTime,500);
	
	}
	
window.onload=function(){
	startDateTime();
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


