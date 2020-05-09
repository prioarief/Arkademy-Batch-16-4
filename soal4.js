const frasa = (input, search) => {
  if (search.length > input.length) {
    return `${search} tidak boleh lebih panjang dari ${input}`;
  }

  // reverse input
  const rev = String(input).split("").reverse().join("");

  const result = splicing(input, search);
  const result2 = splicing(rev, search);
  return `Ditemukan ${result + result2} kali`;
};

const splicing = (str, search) => {
  const arr = [];
  let end = search.length;
  for (let i = 0; i < str.length; i++) {
    const splitted = str
      .split("")
      .slice(i, end++)
      .join("");
    if (search.toLowerCase() === splitted.toLowerCase()) {
      arr.push(splitted);
    }
  }
  return arr.length;
};

console.log(frasa("banananana", "nana"));
