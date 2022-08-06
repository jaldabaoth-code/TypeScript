/* Quest Typescript - OOP 2 */
console.log("--- Quest Typescript - OOP 2 ---\n");

/* Interface */
interface Animal {
    name: string;
    black: boolean;
    paw: number;
}

/* Classes */
class Animals {
    animal: Animal;

    constructor(animal: Animal) {
        this.animal = animal;
    }

    photograph() {
        console.log("What a lovely photo of " + this.animal.name);
    }

    caress() {
        if (this.animal.paw === 4) {
            console.log("We can caress it");
        } else {
            console.log("We won't be able to caress it");
        }
    }

    feed() {
        if (this.animal.black) {
            console.log("We can feed it");
        } else {
            console.log("We can't feed it");
        }
    }
}

class Cat extends Animals {
    meow() {
        console.log("Meow");
    }
}

class Dog extends Animals {
    bark() {
        console.log("Ouaf");
    }
}

class Bird extends Animals {
    fly() {
        console.log("Fly");
    }
}

class Fish extends Animals {
    swim() {
        console.log("Swim");
    }
}

/* Objects */
let europeanCat = {
    name: "European cat",
    black: true,
    paw: 4
};

let carthusianCat = {
    name: "Carthusian cat",
    black: false,
    paw: 4
};

let newfoundlandDog = {
    name: "Newfoundland dog",
    black: true,
    paw: 4
};

let moonMoonDog = {
    name: "Moon moon dog",
    black: false,
    paw: 4
};

let tit = {
    name: "Tit",
    black: false,
    paw: 2
};

let blackbird = {
    name: "Blackbird",
    black: true,
    paw: 2
};

let tuna = {
    name: "Tuna",
    black: true,
    paw: 0
};

let shark = {
    name: "Shark",
    black: true,
    paw: 0
};

let maggot = {
    name: "Maggot",
    black: true,
    paw: 0
};
  
/* 7 Functions */
let animals = new Animals(europeanCat);
animals.photograph();

let cat = new Cat(carthusianCat);
cat.meow();

let dog = new Dog(newfoundlandDog);
dog.bark();

let bird = new Bird(tit);
bird.fly();

let fish = new Fish(shark);
fish.swim();

animals.caress();

animals.feed();
