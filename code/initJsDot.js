init_jsdot_edit : function(e, divname, jsongraph) {
	this.jsdot_graphs[divname] = new JSDot(divname, {
		mode : "editor",
		json : jsongraph
	});
},