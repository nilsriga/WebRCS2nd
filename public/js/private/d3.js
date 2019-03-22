var someInt = 123;
var someFloat = 3.14;
var someText = 'foo';
var someText = 'bar' + someText;
var someText3 = `asfdsdae
asdf
asdf
asdf
asfd
${someText}`; // tikai ES6 un tikai ar backtikiem

var biz = 211; // var ir vienmēr globāls


//___________________
let foo = 123; // let ir vienmēr lokāls
const bar = 2321; // nevar pārrastīt, bet var mainīt vērtības
//________________


var someTrue = false;
var someNothing = null;
var someNoting2;
var something1 = true,
    something2 = false;

var cars = ['vaz', 'zaz', 'gaz', 'uaz', 'maz', 'bmw'];
console.log(cars[2]);

cars.push(123);

console.log(cars);

var person = {
    firstName: 'John',
    lastName: 'Doe',
    age: 21,
};

console.log(person.lastName);

var people = [
    {
        firstName: 'John',
        lastName: 'Doe',
        age: 21,
    },
    {
        firstName: 'Jane',
        lastName: 'Doe',
        age: 23,
    },
    {
        firstName: 'Jenny',
        lastName: 'Doe',
        age: 33,
    },
]

if (1==1) {

} else if (1 ==2)  {

}


var bars = "a"
switch (bar) {
    case "a":
        1;
        break;
    case "b":
        2;
        break;
    case "c":
        3;
        break;
    default:
        4;
}

// while (true) {

// }

// do {

// } while (false);

for (let i = 0; i < 10; i++) {
    console.log(i);
}

for (var i = 1; i <51; i++) {
    if (i%2==0) {
        console.log("fizz");
    } else if (i%3==0) {
        console.log("bar");
    } else {
        console.log(i);
    }
}

//parseInt();
//parseFloat();

console.log(parseFloat('3.14sadf')) // 3.14
console.log(parseFloat('as3.14sadf')) // NaN

console.log(Math.round(3.14)); // 3
console.log(Math.ceil(3.0004)); // 4
console.log(Math.floor(3.999)) // 3

var now = new Date(); // nevar palauties - dabun datumu un liaku no klienta datora

function add(var1, var2) {
    return var1 + var2;
}
var subtract = function (var1, var2) {
    return var1 - var2;
}

function add2(var1, var2) {
    return var1 + var2();
}

console.log(add2(10, function() {
    return 20;
}))