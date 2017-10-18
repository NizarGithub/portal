$('document').ready(function() {
	// select all checkbox
	jQuery('#select_all').on('click', function(e) {
		if($(this).is(':checked',true)) {
			$(".emp_checkbox").prop('checked', true);
		}
		else {
			$(".emp_checkbox").prop('checked',false);
		}
		// set all checked checkbox count
		$("#select_count").html($("input.emp_checkbox:checked").length+" Selected");
	});
	// set particular checked checkbox count
	$(".emp_checkbox").on('click', function(e) {
		$("#select_count").html($("input.emp_checkbox:checked").length+" Selected");
	});
	// delete selected records
	jQuery('#approve_records').on('click', function(e) {
		var employee = [];
		$(".emp_checkbox:checked").each(function() {
			employee.push($(this).data('emp-id'));
		});
		if(employee.length <=0)  {
			alert("Please select records.");
		}
		else {
			var message = "Are you sure you want to delete "+(employee.length>1?"these":"this")+" record?";
			var checked = confirm(message);
			if(checked == true) {
				var selected_values = employee.join(",");
				$.ajax({
					type: "POST",
					url: "approve_action.php",
					cache:false,
					data: 'emp_id='+selected_values,
					success: function(response) {
						// remove deleted employee rows
						var emp_ids = response.split(",");
						for (var i=0; i<emp_ids.length; i++ ) {
							$("#"+emp_ids[i]).remove();
						}
					}
				});
			}
		}
	});
});
