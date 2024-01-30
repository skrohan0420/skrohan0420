$(document).ready(function(){
	
	
	loadData()

	// SELECT Ajax
	function loadData(){
		$.ajax({
			url : 'select.php',
			type : 'POST',
			success : function(data){
				$('#tb').html(data)
			}
		})
	}
	


	// INSERT Ajax
	$('#insertBtn').on('click',function(e){

		e.preventDefault()

		var fName = $("#fName").val()
		var lName = $("#lName").val()

		if (fName == "" || lName == ""){

			alert('All Fields are required')

		}else{

			$.ajax({

				url : 'insert.php',
				type : 'POST',
				data : {
						firstName : fName,
						lastName : lName
					},
					success : function(data){
					if(data == 1){
						loadData()
						$('#addForm').trigger('reset')
					}else{
						alert("Can't Save Records")
					}	
				}
			})
		}
	})



	// DELETE Ajax
	$(document).on('click','.dltBtn', function(){

		if (confirm('Are you sure you want to delete?')){
			var studentId = $(this).data('id')
			var ellem = this;
			// alert(studentId) 
			$.ajax({
				url : 'delete.php',
				type : 'POST',
				data : {id : studentId},
				success : function(data) {
					if (data == 1){
						$(ellem).closest("tr").fadeOut()
					}else{
						alert('Data Not Deleted...')
					}
				}
			})
		}
	})	






	// EDIT Ajax
	$(document).on('click','.edtBtn', function(){

		$('#model').css('display','flex')

		var studentEid = $(this).data('eid')
		// alert(studentEid)

		$.ajax({
			url : 'update.php',
			type : 'POST',
			data : {id: studentEid},
			success : function(data){
				$('#modelForm table').html(data)

			}
		})
		loadData()
	})











	// model close func
	$('#close-btn').on('click',function(){
		$('#model').hide()

	})











	// SAVE UPDTED form
	$(document).on('click','#edit-submit', function(){

		if (confirm('Are you sure you want to EDIT This?')){

			var stuId = $('#edit-id').val()
			var stuFname = $('#edit-fname').val()
			var stuLname = $('#edit-lname').val()

			$.ajax({
				url : 'form-update.php',
				type : 'POST',
				data : {
					id: stuId,
					fName : stuFname,
					lName : stuLname
				},
				success : function(data){
					if (data == 1){
						$('#model').hide()
						loadData()
									
						}else{
						alert('Not updated')
					}
				}
			})
		}
	})
	






})