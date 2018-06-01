app.controller('ProfileController',function($http) {
	vm = this;
	vm.updateProfileUrl = '';
	vm.user;
	vm.csrf;
	vm.init = function (updateProfileUrl, user, csrf) {
		vm.updateProfileUrl = updateProfileUrl;
		vm.user = user;
		vm.user.new_password='';
		vm.user.new_password_confirmation='';
		vm.csrf = csrf;
		console.log(vm.user);
		vm.loading= false;
	

	}

	vm.toggle = function (field) {
		vm.success = false;
		switch(field) {
			case 'nameForm':
			vm.nameForm = ! vm.nameForm;
			break;
			case 'emailForm':
			vm.emailForm = ! vm.emailForm;
			break;

			case 'passwordForm':
			vm.passwordForm = ! vm.passwordForm;
			break;
		}
	}

	vm.update = function(att) {
		vm.loading = true;
		switch(att) {
			case 'name':
			$http.post(vm.updateProfileUrl,{
					'name':'name',
					'value':vm.user.name,
					'_token':vm.csrf
				}).then(function(res) {
					vm.loading = false;
					if(res.data.status) {
						vm.success = true;
					}
					
				})

			
			break;
			case 'email':
			if(vm.user.email.indexOf('@')==-1 || vm.user.email.indexOf('.')==-1  ) {
				vm.emailError="Email is not valid";
			} else {
				$http.post(vm.updateProfileUrl,{
					'name':'email',
					'value':vm.user.email,
					'_token':vm.csrf
				}).then(function(res) {
					vm.loading = false;
					if(res.data.status == false) {
						vm.emailError = res.data.error;
					} else {
						vm.success = true;
					}

				})

			}

			break;
			case 'password':
			
				$http.post(vm.updateProfileUrl,{
					'name':'password',
					'old':vm.user.old_password,
					'value':vm.user.new_password,
					'_token':vm.csrf
				}).then(function(res) {
					vm.loading = false;
					if(res.data.status == false) {
						vm.passwordError = res.data.error;
					} else {
						vm.success = true;
					}
					
				})


			

			break;
		}
		
		
	}
});