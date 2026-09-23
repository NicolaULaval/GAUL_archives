Ext.onReady(function() {
	
	var menu1_link = Ext.get('menu1_link');
	var menu2_link = Ext.get('menu2_link');
	var menu3_link = Ext.get('menu3_link');
	var menu4_link = Ext.get('menu4_link');
	
	menu1_link.on('click', function () {
		switchMenu(1);
	});
	menu2_link.on('click', function () {
		switchMenu(2);
	});
	menu3_link.on('click', function () {
		switchMenu(3);
	});
	menu4_link.on('click', function () {
		switchMenu(4);
	});

	function switchMenu(n) { 
		var id;
		var verify = [];
		
		switch(n) { 
			case 1 : id = "menu1_content"; verify = ['menu2_content', "menu3_content", "menu4_content"]; break;
			case 2 : id = "menu2_content"; verify = ["menu1_content", "menu3_content", "menu4_content"]; break;
			case 3 : id = "menu3_content"; verify = ["menu1_content", "menu2_content", "menu4_content"]; break;
			case 4 : id = "menu4_content"; verify = ["menu1_content", "menu2_content", "menu3_content"]; break; 
		} 
		
		for (var i = 0; i < verify.length; i++) {
			var el = Ext.get(verify[i]);
			if (el.isVisible()) {
				el.slideOut();
			}
		}
		
		var clicked = Ext.get(id);
		if (clicked.isVisible()) {
			clicked.slideOut();
		} else {
			clicked.slideIn();
		}
	} 

});