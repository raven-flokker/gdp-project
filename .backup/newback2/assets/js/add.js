var x = 0;

function addInput() {
	if (x < 10) {
		var str = '<input type="text" class="form-control" id="exampleInputOrganization1" aria-describedby="organizationHelp" name="organization' + (x + 1) + '"><div id="input' + (x + 1) + '"></div>';
		document.getElementById('input' + x).innerHTML = str;
		x++;
	} else {
		alert('STOP it!');
	}
}