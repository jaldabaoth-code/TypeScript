/* Quest Typescript - Installation - challenge */
console.log("--- Quest Typescript - Installation - challenge ---\n");
var printWilders = function (users) {
    users.map(function (user) {
        console.log("".concat(user.name, " is ").concat(user.age, " years old"));
    });
};
var wilders = [];
var pierre = { name: "Pierre", age: 23 };
var paul = { name: "Paul", birthday: "10/02/1990" };
var jacques = { name: "Jacques", age: 25 };
wilders.push(pierre);
wilders.push(paul);
wilders.push(jacques);
printWilders(wilders);
