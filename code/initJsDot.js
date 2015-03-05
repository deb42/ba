init_jsdot_edit : function(e, divname, jsongraph, structureType) {
	this.jsdot_graphs[divname] = new JSDot(divname, {
		mode : "editor",
		json : jsongraph
	});
},