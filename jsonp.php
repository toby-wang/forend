<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>推荐搜索</h1>
	<input type="text" name="wd" id="">
	<input type="button" value="搜索">
	<ul></ul>
</body>
<script>
	function abc(res) {
		var wds=res['s'];
		for (var i = 0,str=' '; i < wds.length;i++ ) {
			str = str + '<li>' + wds[i] +'</li>';
		}
		//alert(str);
		document.getElementsByTagName('ul')[0].innerHTML = str;
	}
	document.getElementsByName('wd')[0].oninput = function(){
		/**
		 * cb就是callback的函数  wd就是输入的关键字
		 * 
		 */
		var url = 'https://sp0.baidu.com/5a1Fazu8AA54nxGko9WTAnF6hhy/su?wd='+this.value+'&json=1&p=3&sid=1422_21120&req=2&csor=4&cb=abc';
		var sc = document.createElement('script');
		sc.src = url;
		var hd = document.getElementsByTagName('head')[0];
		hd.appendChild(sc);

	}
</script>
</html>
