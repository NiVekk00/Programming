const log = console.log

function multiply(a, b) {
  b = typeof b !== 'undefined' ?  b : 1;

  return a*b;
}

multiply(5); // 5

log(multiply)