<html lang="en">
<head>

  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<title>TUH-COVID19</title>
    <?php $this->load->view('css/mycss'); ?>
  	<style type="text/css">
        html{
            height: 100%;
        }
  		body {
  			/*green bg gradien*/
  			background-image: linear-gradient(to bottom, #dbe9b7, #d3e7b4, #cbe5b1, #c2e3ae, #b9e1ac, #addcaa, #a1d6a8, #95d1a6, #84c7a3, #74bda0, #65b39d, #57a99a);

  			/*brown bg gradient*/
  			/*background-image: linear-gradient(to bottom, #f0ece2, #e1d9ca, #d3c7b3, #c6b49d, #b9a287, #b3987c, #ae8e71, #a88466, #a88061, #a87d5d, #a97959, #a97555); */
  		}

  	</style>
    
</head>
<body class="front-end">
<div class="container-fluid" id="app">

<!-- หน้าแรกของการ Login -->
<section id="signin">
	<div class="full-height" style="position: relative;">
		<div class="true-center-page badge-login container bg-white text-center shadow">
			<h1 class="font-weight-bold my-3" style="text-shadow: 0 0 20px #acdeaa;color: #57a99a;">TUH - COVID19</h1>

				
				<div class="px-4 mb-4">
					<input class="form-control text-center my-4 font-weight-bold" 
							type="text" 
							name="username" 
							id="username" 
							placeholder="ชื่อผู้ใช้" 
							style="font-size: 1.5rem;" 
							autocomplete="new-password"
							v-model="adminusername"
							@keyup.enter="$event.target.nextElementSibling.focus()" 
						/>

					<input class="form-control text-center my-4 font-weight-bold" 
							type="password" 
							name="password" 
							id="password" 
							placeholder="รหัสผ่าน" 
							style="font-size: 1.5rem;" 
							autocomplete="new-password"
							v-model="adminpassword" 
							@keyup.enter="usignin()" 
						/>

					<hr/>
					<button class="btn btn-block x-btn-forest mt-3 p-3" id="btnUsersignin" @click="usignin()" style="border-radius: 10px;">
						<i class="fas fa-sign-in-alt m-3 align-middle" style="font-size: 2rem;"></i>
						<br/>
						เข้าสู่ระบบ
					</button>
					
				</div>
		</div>
	</div>
</section>

	<!-- ********************     modal zone     ******************** -->


</div> <!-- end of div container #app -->

<?php $this->load->view('js/myjs'); ?>
<script type="text/javascript">
	var app = new Vue({
		el: '#app',
		data: {
			adminusername: '',
			adminpassword: '',
			adminicon: {},
			adminstyle : [
				{
					k: 'sign',
					icon:'far fa-user-circle',
					color: 'color: #0668E6;',
				},
				{
					k: 'load',
					icon:'fas fa-circle-notch fa-spin',
					color: 'color: #ff6600;',
				},
				{
					k: 'pass',
					icon:'far fa-check-circle',
					color: 'color: #00e600;',
				},
			],
			staffcode: '',
			staffname: '',
			tel: '',
			telvalid : true,
		},
		methods: {
			actionmodal(modal_id){
				switch(modal_id){
					case 'u-sign' :
						$('#'+modal_id).modal();
						this.adminicon = this.adminstyle[0];
						if(lcget('adminusername') && lcget('admindata')){
							this.adminicon = this.adminstyle[1];
							this.adminusername = '';
							this.adminpassword = '';
							setTimeout(() => {
								console.log("pass to get this admin username");
								this.adminicon = this.adminstyle[2];
								setTimeout(() => {
									ssset('adminusername',lcget('adminusername'));
									window.location = "<?php echo site_url('admin'); ?>";
								},1000);
							},1000);
						}
							
						break;
					default:
				}
			},
			idcardchecker(id) {
				if(id.length != 13){
					return false;
				}
				for(i=0, sum=0; i < 12; i++){
					sum += parseFloat(id.charAt(i))*(13-i); 
				}
				if((11-sum%11)%10!=parseFloat(id.charAt(12))){
					return false;
				}
				return true;
			},
			clearform(type){
				switch(type){

				}
			},
			usignin(){
				// $('#u-sign').modal('hide');
				Swal.fire({
	                title: "กำลังตรวจสอบข้อมูล กรุณารอสักครู่...",
	                allowOutsideClick: false,
	            });
	            Swal.showLoading();
	            axios.get("<?php echo site_url('login/usignin'); ?>",{
	            	params : {
	            		uid: this.adminusername
	            		,pwd: this.adminpassword
	            	}
	            }).then(res => {
	            	console.log(res);
	            	Swal.close();
	            	res = res.data;

	            	if(res.success){
						// $('#staffwork').modal();

						let admindetail = JSON.stringify(res.row[0]);
						ssset('adminusername',this.adminusername);
						lcset('adminusername',this.adminusername);
						lcset('admindata',admindetail);
						Swal.fire({
								type: 'success'
								,title: 'เข้าสู่ระบบเสร็จสิ้น'
								,text: 'กรุณารอสักครู่.....'
								,confirmButtonText: ''
								,timer: 2000
								,showConfirmButton: false
								,allowOutsideClick: false
							}).then(() => {
								window.location = "<?php echo site_url('admin'); ?>";
							});

	            	}else{
	            		Swal.fire({
						  type: 'error',
						  title: 'ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง!',
						  confirmButtonText: 'ปิด'
						});
	            	}
	            });
			},

		},
		mounted() {
			var _this = this;
			if(lcget('adminusername') && lcget('admindata')){
				Swal.fire({
					type: 'warning'
					,title: 'มีผู้ใช้กำลังเข้าสู่ระบบอยู่ในอุปกรณ์นี้!'
					,text: 'ต้องการเข้าสู่ระบบโดยใช้ชื่อเดิมหรือไม่?'
					,confirmButtonText: 'เข้าสู่ระบบ'
					,cancelButtonText: 'ไม่, เข้าสู่ระบบใหม่'
					,showConfirmButton: true
					,showCancelButton: true
					,allowOutsideClick: false
				}).then(result => {
					if(result.value){
						ssset('adminusername',lcget('adminusername'));
						window.location = "<?php echo site_url('admin'); ?>";
					}else{
						this.adminusername = '';
						this.adminpassword = '';
					}
				});
			}

		},
		computed: {

		},
		filters: {

		},
		watch: {

		},
		// created () {
		// 	document.addEventListener("backbutton", this.showLoginForm(), false);
		// },
		// beforeDestroy () {
		// 	document.removeEventListener("backbutton", this.showLoginForm());
		// }
	});
</script>
</body>
</html>