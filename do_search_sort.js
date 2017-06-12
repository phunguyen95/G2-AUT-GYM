
function getData(divID, key)  {
	var xhr = false;  
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    if(xhr) {
	    var place = document.getElementById(divID);
	 
	    				var url="search_data.phpta.php";
	    				url=url+"?key="+key;

	    xhr.open("POST",url,true);
	    console.log(key);
	    xhr.onreadystatechange = function() {

			if (xhr.readyState == 4 && xhr.status == 200) {
				place.innerHTML = xhr.responseText;
		    } // end if
	    } // end anonymous call-back function
	    xhr.send(null);
	} // end if
}

function getSortData(divID, key)  {
	var xhr = false;  
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    if(xhr) {
	    var place = document.getElementById(divID);
	 
	    				var url="sort_data.php";
	    				url=url+"?key="+key;

	    xhr.open("POST",url,true);
	    console.log(key);
	    xhr.onreadystatechange = function() {

			if (xhr.readyState == 4 && xhr.status == 200) {
				place.innerHTML = xhr.responseText;
		    } // end if
	    } // end anonymous call-back function
	    xhr.send(null);
	} // end if
}