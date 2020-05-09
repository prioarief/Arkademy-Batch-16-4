const list_vowels = ["a", "e", "i", "o", "u"];

const count_vowels = (input) => {
  let vowels = 0;

  for (let i of input.toLowerCase()) {
    if (list_vowels.includes(i)) {
      vowels++;
    }
  }

  return vowels;
};

console.log(count_vowels("programmer"));
console.log(count_vowels("hmm.."));
