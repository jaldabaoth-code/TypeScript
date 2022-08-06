var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
/* Quest Typescript - OOP 2 */
console.log("--- Quest Typescript - OOP 2 ---\n");
/* Classes */
var Animals = /** @class */ (function () {
    function Animals(animal) {
        this.animal = animal;
    }
    Animals.prototype.photograph = function () {
        console.log("What a lovely photo of " + this.animal.name);
    };
    Animals.prototype.caress = function () {
        if (this.animal.paw === 4) {
            console.log("We can caress it");
        }
        else {
            console.log("We won't be able to caress it");
        }
    };
    Animals.prototype.feed = function () {
        if (this.animal.black) {
            console.log("We can feed it");
        }
        else {
            console.log("We can't feed it");
        }
    };
    return Animals;
}());
var Cat = /** @class */ (function (_super) {
    __extends(Cat, _super);
    function Cat() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    Cat.prototype.meow = function () {
        console.log("Meow");
    };
    return Cat;
}(Animals));
var Dog = /** @class */ (function (_super) {
    __extends(Dog, _super);
    function Dog() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    Dog.prototype.bark = function () {
        console.log("Ouaf");
    };
    return Dog;
}(Animals));
var Bird = /** @class */ (function (_super) {
    __extends(Bird, _super);
    function Bird() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    Bird.prototype.fly = function () {
        console.log("Fly");
    };
    return Bird;
}(Animals));
var Fish = /** @class */ (function (_super) {
    __extends(Fish, _super);
    function Fish() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    Fish.prototype.swim = function () {
        console.log("Swim");
    };
    return Fish;
}(Animals));
/* Objects */
var europeanCat = {
    name: "European cat",
    black: true,
    paw: 4
};
var carthusianCat = {
    name: "Carthusian cat",
    black: false,
    paw: 4
};
var newfoundlandDog = {
    name: "Newfoundland dog",
    black: true,
    paw: 4
};
var moonMoonDog = {
    name: "Moon moon dog",
    black: false,
    paw: 4
};
var tit = {
    name: "Tit",
    black: false,
    paw: 2
};
var blackbird = {
    name: "Blackbird",
    black: true,
    paw: 2
};
var tuna = {
    name: "Tuna",
    black: true,
    paw: 0
};
var shark = {
    name: "Shark",
    black: true,
    paw: 0
};
var maggot = {
    name: "Maggot",
    black: true,
    paw: 0
};
/* 7 Functions */
var animals = new Animals(europeanCat);
animals.photograph();
var cat = new Cat(carthusianCat);
cat.meow();
var dog = new Dog(newfoundlandDog);
dog.bark();
var bird = new Bird(tit);
bird.fly();
var fish = new Fish(shark);
fish.swim();
animals.caress();
animals.feed();
