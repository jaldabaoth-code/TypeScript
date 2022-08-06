/* Quest Typescript - OOP1 */
console.log("--- Quest Typescript - OOP1 ---\n");

class Person {
    name: string;
    age: number;

    constructor(name: string, age: number) {
        this.name = name;
        this.age = age;
    }

    tellMyName() {
        console.log("I am " + this.name);
    }
    
    tellMyAge() {
        console.log("I am " + this.age + " years old");
    }
}

const john = new Person("John", 40);
const mary = new Person("Mary", 35);

/* Information about John */
john.tellMyName();
john.tellMyAge();

/* Information about Mary */
mary.tellMyName();
mary.tellMyAge();
