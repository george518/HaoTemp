<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    	<!--360浏览器优先以webkit内核解析-->
    	<meta name="renderer" content="webkit">
    	<link href="/Public/System/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<title>主题说明</title>

	</head>

	<body class="gray-bg">
		<!-- 编辑区域开始-->
		<div class="container">
			<h1>h1. Bootstrap heading</h1>
			<h2>h2. Bootstrap heading</h2>
			<h3>h3. Bootstrap heading</h3>
			<h4>h4. Bootstrap heading</h4>
			<h5>h5. Bootstrap heading</h5>
			<h6>h6. Bootstrap heading</h6>

			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">File input</label>
			    <input type="file" id="exampleInputFile">
			    <p class="help-block">Example block-level help text here.</p>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Check me out
			    </label>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>

			<div class="alert alert-success" role="alert">警告框元素</div>
			<div class="alert alert-info" role="alert">...</div>
			<div class="alert alert-warning" role="alert">...</div>
			<div class="alert alert-danger" role="alert">...</div>

			<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Warning!</strong> Better check yourself, you're not looking too good.
			</div>

			<nav>
			  <ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>

			<!-- Single button -->
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Action <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a href="#">Action</a></li>
			    <li><a href="#">Another action</a></li>
			    <li><a href="#">Something else here</a></li>
			    <li role="separator" class="divider"></li>
			    <li><a href="#">Separated link</a></li>
			  </ul>
			</div>

			<!-- Standard button -->
			<button type="button" class="btn btn-default">（默认样式）Default</button>

			<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			<button type="button" class="btn btn-primary">（首选项）Primary</button>

			<!-- Indicates a successful or positive action -->
			<button type="button" class="btn btn-success">（成功）Success</button>

			<!-- Contextual button for informational alert messages -->
			<button type="button" class="btn btn-info">（一般信息）Info</button>

			<!-- Indicates caution should be taken with this action -->
			<button type="button" class="btn btn-warning">（警告）Warning</button>

			<!-- Indicates a dangerous or potentially negative action -->
			<button type="button" class="btn btn-danger">（危险）Danger</button>

			<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
			<button type="button" class="btn btn-link">（链接）Link</button>

			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
			</label>

			<label class="radio-inline">
			  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
			</label>
			<label class="radio-inline">
			  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
			</label>
			<label class="radio-inline">
			  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
			</label>

			<ul class="nav nav-pills" role="tablist">
			  <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
			  <li role="presentation"><a href="#">Profile</a></li>
			  <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
			</ul>

			<div class="panel panel-success">
			  <div class="panel-body panel-success">
			    Panel content
			  </div>
			  <div class="panel-footer">Panel footer</div>
			</div>
		</div>
		<!-- 编辑区域介绍 -->
	</body>
	<script type="text/javascript" src="/Public/System/Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/System/Bootstrap/js/bootstrap.min.js"></script>
</html>