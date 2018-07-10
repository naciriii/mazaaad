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
			case 'firstNameForm':
			vm.firstNameForm = ! vm.firstNameForm;
			break;
			case 'lastNameForm':
			vm.lastNameForm = ! vm.lastNameForm;
			break;
			case 'mobileForm':
			vm.mobileForm = ! vm.mobileForm;
			break;
			case 'identifierForm':
			vm.identifierForm = ! vm.identifierForm;
			break;
			case 'birthdayForm':
			vm.birthdayForm = ! vm.birthdayForm;
			break;
			case 'secondaryEmailForm':
			vm.secondaryEmailForm = ! vm.secondaryEmailForm;
			break;
			case 'pictureForm':
			vm.pictureForm = ! vm.pictureForm;
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
			case 'first_name':
			
				$http.post(vm.updateProfileUrl,{
					'name':'first_name',
					'value':vm.user.details.first_name,
					'_token':vm.csrf
				}).then(function(res) {
					vm.loading = false;
					if(res.data.status == false) {
						vm.firstNameError = res.data.error;
					} else {
						vm.success = true;
					}
					
				})


			

			break;
			case 'last_name':
			
				$http.post(vm.updateProfileUrl,{
					'name':'last_name',
					'value':vm.user.details.last_name,
					'_token':vm.csrf
				}).then(function(res) {
					vm.loading = false;
					if(res.data.status == false) {
						vm.lastNameError = res.data.error;
					} else {
						vm.success = true;
					}
					
				})


			

			break;
			case 'identifier':
			
				$http.post(vm.updateProfileUrl,{
					'name':'identifier',
					'value':vm.user.details.identifier,
					'_token':vm.csrf
				}).then(function(res) {
					vm.loading = false;
					if(res.data.status == false) {
						vm.identifierError = res.data.error;
					} else {
						vm.success = true;
					}
					
				})


			

			break;
			case 'birthday':
			var date = Date.parse('"'+vm.user.details.birthday+'"');
			date= new Date(date);
			vm.user.details.birthday = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
			
				$http.post(vm.updateProfileUrl,{
					'name':'birthday',
					'value':vm.user.details.birthday,
					'_token':vm.csrf
				}).then(function(res) {
					vm.loading = false;
					if(res.data.status == false) {
						vm.birthdayerror = res.data.error;
					} else {
						vm.success = true;
					}
					
				})


			

			break;
			case 'mobile':
			
				$http.post(vm.updateProfileUrl,{
					'name':'mobile',
					'value':vm.user.details.phone,
					'_token':vm.csrf
				}).then(function(res) {
					vm.loading = false;
					if(res.data.status == false) {
						vm.mobileerror = res.data.error;
					} else {
						vm.success = true;
					}
					
				})


			

			break;
			case 'secondaryEmail':
			if(vm.user.details.email.indexOf('@')==-1 || vm.user.details.email.indexOf('.')==-1  ) {
				vm.secondaryEmailError="Email is not valid";
			} else {
				$http.post(vm.updateProfileUrl,{
					'name':'secondaryEmail',
					'value':vm.user.details.email,
					'_token':vm.csrf
				}).then(function(res) {
					vm.loading = false;
					if(res.data.status == false) {
						vm.secondaryEmailerror = res.data.error;
					} else {
						vm.success = true;
					}
					
				});
			}


			

			break;
			case 'picture':

			var element = document.getElementById('pic').files[0];
			  var formData = new FormData();
                formData.append('value', element);
                 formData.append('name', 'picture');
			
				$http.post(vm.updateProfileUrl,formData, {
               transformRequest: angular.identity,
               headers: {'Content-Type': undefined}                     
            }).then(function(res) {
					vm.loading = false;
					if(res.data.status == false) {
						vm.pictureEmailerror = res.data.error;
					} else {
						vm.user.details.picture = res.data.picture;
						vm.success = true;
					}
					
				});
			


			

			break;
		}
		
		
	}
});