app.controller('ProfileController',function() {
	vm = this;
	vm.updateProfileUrl = '';
	vm.user;
	vm.csrf;
	vm.init = function (updateProfileUrl, user, csrf) {
		vm.updateProfileUrl = updateProfileUrl;
		vm.user = user;
		vm.csrf = csrf;
	

	}

	vm.toggle = function (field) {
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

	vm.update = function(att, value) {
		
	}
});