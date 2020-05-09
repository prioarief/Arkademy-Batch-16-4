const createTriangle = (a, b) => {
  // check positif
  if (a > 0 && b > 0) {
    if (parseInt(a) > parseInt(b)) {
      return `Parameter A tidak boleh lebih besar dari paramater B`;
    }

    let result = "";

    // row
    for (let row = a; row <= b; row += a) {
      // space
      for (let space = b; space > row; space -= a) {
        result += " ";
      }
      // show
      for (let k = a; k <= row; k += a) {
        result += `${k}`;
      }

      // breakline
      result += "\n";
    }
    return result;
  }
  return `Bilangan Harus Positif!!`;
};

console.log(createTriangle(2, 10));
console.log(createTriangle(2, 2));
console.log(createTriangle(-2, 10));
