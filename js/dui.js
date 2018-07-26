var dui = {
	
	jump:function(path,id_data,extras,show,waiting){
		if(show == undefined){
			show = true;
		}
		if(waiting == undefined){
			waiting = false;
		}
		 mui.openWindow({ 
                    url:path, //需要打开页面的url地址 
                    id:id_data,  //需要打开页面的url页面id
                    styles:{ 
                        top:'0px',//新页面顶部位置 
                        bottom:'0px',//新页面底部位置 
    //                  width:newpage-width,//新页面宽度，默认为100% 
    //                  height:newpage-height,//新页面高度，默认为100% ...... 
                    }, 
                    extras:extras
                    ,show:{ //控制打开页面的类型
                        autoShow:show,
    //                  //页面loaded事件发生后自动显示，默认为true 
                        aniShow:'pop-in',//页面显示动画，默认为”slide-in-right“；  页面出现的方式 左右上下
                        duration:'300'//页面动画持续时间，Android平台默认100毫秒，iOS平台默认200毫秒； 
                    }, waiting:{ // 控制 弹出转圈框的信息
                        autoShow:waiting,//自动显示等待框，默认为true 
//                      title:'康福佳...',//等待对话框上显示的提示内容 
                        options:{ 
                            width:'70px',//等待框背景区域宽度，默认根据内容自动计算合适宽度 
                            height:'70px',//等待框背景区域高度，默认根据内容自动计算合适高度 ...... 
                        } 
                    }
            });
	},
	
}
