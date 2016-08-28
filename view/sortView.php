<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<script type="text/javascript" src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
</head>
<body>
 <div id="result">等待排序结果</div>
 <form id="my" action="" method="post">
  <p><span>待排序数组（以“,”隔开）：</span><input type="text" id="sortdata" name="sortdata" /></p>
  <p><span>排序类型：</span>
  <select id="type">
  <option value="1">冒泡排序</option>
  <option value="2">插入排序</option>
  <option value="3">选择排序</option>
  <option value="4">快速排序</option>
  <option value="5">归并排序</option>
  </select></p>
 </form>
 <button id="send">提交</button>
</body>
<script type="text/javascript">
$(function(){
	  $("#send").click(function(){
	   var sortdata = $("#sortdata").val();
	   var type = $("#type").val();
	   $.ajax({
	    url:'../controller/test.php',
	    type:'post',
	    dataType:'json',
	    data:{sortdata:sortdata,type:type},
	    success:function(data){
	     var str = data.sortdata;
	     $("#result").html(str);
	    }
	  });
	});  
});
</script>
</html>