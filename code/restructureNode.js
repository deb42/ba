nodesPerTier[n.i][n.j].push(changedNode);
nodesPerTier[n.i][n.j].sort(function(a, b) {
	var x = a.position[0];
	var y = b.position[0];
	return ((x < y) ? -1 : ((x > y) ? 1 : 0));
});
for (var k = 0; k < nodesPerTier[n.i][n.j].length; ++k) {
	nodesPerTier[n.i][n.j][k].setPosition(/* ... */);
}