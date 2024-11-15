$(document).ready(function() {
	var itemList = 1

	$.ajax({
		type:"GET",
		url:"js/items.php",
		success: function(data) {
			itemList = data
		},
		async: false,
		dataType: 'json',
	});

	items = Object.values(itemList)

	var itemsDiv = $("#items-wrapper");
	for (var i = 0; i < items.length; i++) 
	{
		var item = items[i];
		var modelformat = (item.format) ?' model-format="'+item.format+'"' : "";
		var html = '<div class="col-sm-4">' + '<a class="thumbnail add-item" model-price="'+ item.price +'" ' +' model-name="'+ item.name +'"' +' model-url="' +item.model+'"' +' model-type="' +item.type+'"' + modelformat+'>'+'<img src="'+item.image +'" alt="Add Item"> '+item.name +'</a></div>';
		itemsDiv.append(html);
	}
});
