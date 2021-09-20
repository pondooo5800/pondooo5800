<script>
	var data_id = {data_id};
	var state = 'edit';
</script>
<!--  [ View File name : edit_view.php ] -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-header-success card-header-text">
					<div class="card-icon">
						<i class="material-icons">edit</i>
					</div>
					<h4 class="card-title">แก้ไขข้อมูลเว็บไซต์</h4>
				</div>
				<div class="card-body">
					<form class='form-horizontal' id='formEdit' accept-charset='utf-8'>
						{csrf_protection_field}
						<input type="hidden" name="submit_case" value="edit" />
						<input type="hidden" name="data_id" value="{data_id}" />
						<div class="container">
							<div class="form-row justify-content-around">
								<div class="form-group col-md-4">
									<label class="control-label" for="username">Username :</label>
									<div class="form-group has-info">
										<input type="text" class="form-control form-control-lg" name="username" id="username" value="{record_username}" readonly>
									</div>
								</div>
								<div class="form-group col-md-4">
									<label class="control-label" for="password">รหัสผ่านใหม่ :</label>
									<div class="form-group has-info">
										<input type="password" class="form-control form-control-lg" name="password" id="password" value="{record_password}" placeholder="Password" required>
									</div>
								</div>
							</div>
							<div class="form-row justify-content-around">
								<div class="form-group col-md-4 ">
									<label class="control-label" for="fname">ชื่อ :</label>
									<div class="form-group has-success">
										<input type="text" class="form-control" id="fname" name="fname" value="{record_fname}" />
									</div>
								</div>
								<div class="form-group col-md-4 ">
									<label class="control-label" for="lname">นามสกุล :</label>
									<div class="form-group has-success">
										<input type="text" class="form-control " id="lname" name="lname" value="{record_lname}" />
									</div>
								</div>
							</div>
							<div class="form-row justify-content-around">
								<div class="form-group col-md-4 ">
									<label class="control-label" for="date_of_birth">วันเกิด :</label>
									<div class="form-group has-success">
										<input type="text" class="form-control datepicker" id="date_of_birth" name="date_of_birth" value="{record_date_of_birth}" />
									</div>
								</div>
								<div class="form-group col-md-4 ">
									<label class="control-label" for="age">อายุ :</label>
									<div class="form-group has-success">
										<input type="text" class="form-control" id="age" name="age" value="{record_age}" maxlength="3" OnKeyPress="return chkNumber(this)"/>
									</div>
								</div>
							</div>
							<div class="form-row justify-content-around">
								<div class="form-group col-md-4 ">
									<label class="control-label" for="tel">เบอร์โทรศัพท์ :</label>
									<div class="form-group has-success">
										<input type="text" class="form-control" id="tel" name="tel" value="{record_tel}" />
									</div>
								</div>

								<div class="form-group col-md-4 ">
									<label class="control-label" for="email_addr">อีเมล :</label>
									<div class="form-group has-success">
										<input type="text" class="form-control" id="email_addr" name="email_addr" value="{record_email_addr}" />
									</div>
								</div>
							</div>
							<div class="form-row justify-content-around">
								<div class="form-group col-md-4 ">
									<label class="control-label" for="addr">ที่อยู่ :</label>
									<div class="form-group has-success">
										<textarea class="form-control" id="addr" name="addr" rows="3">{record_addr}</textarea>
									</div>
								</div>
								<div class="form-group col-md-4 ">
								</div>
							</div>
						</div>
						<br>

						<div class="form-group">
							<div class="col-sm-12 text-right">
								<input type="hidden" id="add_encrypt_id" />
								<a href="{page_url}" class="my-tooltip btn btn-Secondarying btn-md" data-toggle="tooltip">
									&nbsp;&nbsp;<i class="fa fa-close"></i> &nbsp;ยกเลิก &nbsp;&nbsp;
								</a>
								<button type="button" id="btnConfirmSave" class="btn btn-success" data-toggle="modal" data-target="#editModal">
									&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;บันทึก &nbsp;&nbsp;
								</button>
							</div>
						</div>
						<input type="hidden" name="encrypt_user_id" value="{encrypt_user_id}" />


					</form>
				</div>
				<!--card-body-->
			</div>
			<!--card-->
		</div>
	</div>
</div>
<!-- Modal -->
<div class='modal fade' id='editModal' tabindex='-1' role='dialog' aria-labelledby='editModalLabel' aria-hidden='true'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<div class='modal-header'>
				<h4 class='modal-title' id='editModalLabel'>บันทึกข้อมูล</h4>
				<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
			</div>
			<div class='modal-body'>
				<p class="alert alert-info">ยืนยันการเปลี่ยนแปลงแก้ไขข้อมูล ?</p>
				<form class="form-horizontal" onsubmit="return false;">
					<div class="form-group">
					</div>
				</form>
			</div>
			<div class='modal-footer'>
				<button type="button" class="btn btn-Secondary" data-dismiss="modal">&nbsp;&nbsp;<i class="fa fa-close"></i> &nbsp;ปิด &nbsp;&nbsp;</button>&emsp;
				<button type="button" class="btn btn-success" id="btnSaveEdit">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;บันทึก &nbsp;&nbsp;</button>
			</div>
		</div>
	</div>
</div>