function setupSidebar(page) {
    var filename = "sidebar.html";
    $.get(filename, function (sidebar) {
	    document.getElementById("sidebar").innerHTML = sidebar;
	    var border = (page == "resume" && $("#main").height() < $("#sidebar").height()) ? "border-bottom: none;" : "";
	    document.getElementById(page).setAttribute("style","color: black; background-color: /*#C11B17*/white; border-right: none;" + border);
	    var h = $("#content").height() - $("#sidebar").height();
	    document.getElementById("sidebar_filler").setAttribute("style", "height: " + h + "px");

	    if(page != "name") {
		$('#' + page + ' .hover').css('display', 'inline');
		$('#' + page + ' .normal').css('display', 'none');
	    }
	    
	    if(page == "fencing")
		document.getElementById("headshot").setAttribute("src", "img/fencing_headshot.jpg");
	    else if(page == "umd")
		document.getElementById("headshot").setAttribute("src", "img/grad_headshot.jpg");
	    else if(page == "work")
		document.getElementById("headshot").setAttribute("src", "img/party_headshot.jpg");
	    else if(page == "resume")
		document.getElementById("headshot").setAttribute("src", "img/headshot.jpg");
	});
}