var getTierAndList = function (position) {
  for(var i = 0; i < tier; ++i){
    if (position && 50 * i - 15 < position[1] - 25 &&  position[1] - 25 < 50 * i + 15) {
      for(var j = 0; j < Math.pow(t, i); ++j){
        if (nodeListBounds[i][j][0] < position[0] && position[0] < nodeListBounds[i][j][1]) {
          for (var k = 0; k <= t; ++k) {
            if ((nodeListBounds[i][j][0]+k*30+15) < position[0] && position[0] < (nodeListBounds[i][j][0]+(k+1)*30+15)) {
              return {i: i, j: j, k: k};
            }
          }
          return {i: i, j: j};
        }
      }
    }
  }
  return undefined;
}