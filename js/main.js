window.onload = function() {
	var kuld = document.getElementById("kuld");
	if (kuld) {
		kuld.disabled = true;
	}
};
function ellenoriz() {
	var rendben = true;
	var fokusz = null;

	var szoveg = document.getElementById("megjegyzes");
	if (szoveg) {
		if (szoveg.value.length==0 || szoveg.value.length>=100) {
			rendben = false;
			szoveg.style.background = '#f99';
			fokusz = szoveg;
		} else {
			szoveg.style.background = '#9f9';
		}
	}

	if (fokusz) {
		fokusz.focus();
	}

	var kuld = document.getElementById("kuld");
	if (kuld) {
		kuld.disabled = !rendben;
	}

	return rendben;
}