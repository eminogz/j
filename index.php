<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pera 3D Demo</title>
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/app.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script
	src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.7.3/dat.gui.min.js"></script>

<script src="js/bp3djs.min.js"></script>
<script src="js/items.js"></script>
<script src="js/items_gltf.js"></script>
<!-- <script src="js/items_obj.js"></script> -->
<script src="js/app.js"></script>
</head>

<body>
	<div id='interfaces' class='card'>
		<div id="floorplanner" class='front'>
			<div id="floorplanner-controls">
				<a href="#"
					class="btn btn-default btn-sm glyphicon glyphicon-floppy-disk"
					id="new2d" title="New Layout"></a>
				<button id="move" class="btn btn-sm btn-default" title="Move Walls">
					<span class="glyphicon glyphicon-move"></span>
				</button>
				<button id="draw" class="btn btn-sm btn-default"
					title="Draw New Walls">
					<span class="glyphicon glyphicon-pencil"></span>
				</button>
				<button id="delete" class="btn btn-sm btn-default"
					title="Delete Walls">
					<span class="glyphicon glyphicon-remove"></span>
				</button>
				<button id="help2d" class="btn btn-sm btn-default"
					title="Tips&#10;Shift Key: Snap To Axis&#10;ESC: Stop drawing walls">
					<span class="glyphicon glyphicon-info-sign"></span>
				</button>
			</div>
			<div class="btn-hint ">Press the "Esc" key to stop drawing
				walls</div>
			<canvas id="floorplanner-canvas"></canvas>
		</div>

		<div id="viewer" class='back'>
			<div id="main-controls">
				<a href="#"
					class="btn btn-default btn-sm glyphicon glyphicon-floppy-disk"
					id="new" title="New Layout"></a> <a href="#"
					class="btn btn-default btn-sm glyphicon glyphicon-floppy-save"
					id="saveFile" title="Save Layout"></a> <a
					class="btn btn-sm btn-default btn-file glyphicon glyphicon-floppy-open">
					<input type="file" class="hidden-input" id="loadFile">
				</a> <a href="#"
					class="btn btn-default btn-sm glyphicon glyphicon-asterisk"
					id="saveMesh" title="Save Scene as a mesh"></a>
			</div>
		</div>
	</div>
	<div id='interface-controls'>
		<button id="showFloorPlan" class="btn btn-sm btn-default active"
			title="Edit 2D floorplan">
			<span class="glyphicon glyphicon-move"></span> Floor Plan
		</button>
		<button id="showDesign" class="btn btn-sm btn-default"
			title="Edit 3D floorplan">
			<span class="glyphicon glyphicon-move"></span> 3D
		</button>
		<div class="btn-group-vertical" id='viewcontrols' >
			<div class="btn btn-sm btn-default">	
		            <a class="btn btn-default bottom" href="#" id="leftview" title="Show side view (left)">
		              <span class="glyphicon glyphicon glyphicon-object-align-left"></span>
		            </a>
		            <span class="btn-group-vertical">
		              <a class="btn btn-default" href="#" id="topview" title="Show top view">
		                <span class="glyphicon glyphicon glyphicon-object-align-horizontal"></span>
		              </a>
		              <a class="btn btn-default" href="#" id="isometryview" title="Show 3d view">
		                <span class="glyphicon glyphicon glyphicon-inbox"></span>
		              </a>
		              <a class="btn btn-default" href="#" id="frontview" title="Show front view">
		                <span class="glyphicon glyphicon glyphicon-object-align-vertical"></span>
		              </a>                
		            </span>
		            <a class="btn btn-default bottom" href="#" id="rightview" title="Show side view (right)" >
		              <span class="glyphicon glyphicon glyphicon-object-align-right"></span>
		            </a>
	        </div>
	        <button id="showSwitchCameraMode" class="btn btn-sm btn-default" title="Switch Camera ortho/perspective">
				<span class="glyphicon glyphicon-camera"></span>			
			</button>
			<button id="showSwitchWireframeMode" class="btn btn-sm btn-default" title="Switch wireframe mode">
				<span class="glyphicon glyphicon-pencil"></span>
			</button>			
        </div>
		<button id="showAddItems" class="btn btn-sm btn-default" title="Add/Remove items in 3D">
			<span class="glyphicon glyphicon-plus"></span>
		</button>
		<!--<button id="showFirstPerson" class="btn btn-sm btn-default" title="Walk through">
			<span class="glyphicon glyphicon-eye-open"></span>-->
		</button>
		<button id="showItemList" class="btn btn-sm btn-default" title="Item List">
			<span class="glyphicon glyphicon-export"></span>  Fiyat oluştur
		</button>	
		<div class="itemlist">
		<ul>
		</ul>
		</div>		
	</div>

	<!-- Add Items -->
	<div id="add-items">
		<div class="row" id="items-wrapper">
			<!-- Items added here by items.js -->
		</div>
	</div>
	
	
</body>
</html>