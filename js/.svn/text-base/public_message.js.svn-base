
	var request_urls =  localStorage.getItem('kfj_request_url');//请求地址
	var user_ids = localStorage.getItem('ifa_login_id');
	mui.post(request_urls+'api/',{
		action: 'app_message_count',
		user_id:user_ids
	},function(data){
		
		if(data.msg=="1"){
			document.getElementById("public_message").innerText=data.count;
		}else{
			console.log(data.msgbox);
		}
	},'json'
	);
	

