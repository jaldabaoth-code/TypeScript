/* Quest Typescript - Installation - challenge */
console.log("--- Quest Typescript - Installation - challenge ---\n");

interface User {
    name: string;
    age?: number;
    birthday?: string;
}

const printWilders = (users: User[]) => {
    users.map((user: User) => {
        console.log(`${ user.name } is ${ user.age } years old`);
    });
};
  
const wilders: User[] = [];
const pierre = { name: "Pierre", age: 23 };
const paul = { name: "Paul", birthday: "10/02/1990" };
const jacques = { name: "Jacques", age: 25 };
wilders.push(pierre);
wilders.push(paul);
wilders.push(jacques);
printWilders(wilders);
