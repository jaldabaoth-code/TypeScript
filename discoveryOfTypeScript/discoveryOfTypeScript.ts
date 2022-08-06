/* Quest Typescript - Discovery of TypeScript */
console.log("--- Quest Typescript - Discovery of TypeScript ---\n");

function hello(name: string) {
    console.log("Hello " + name);
}

const firstName = "Bob";

hello(firstName);
hello(firstName + " Marley");

function concat(first: string, second: string) {
    return first + second;
}

const wcs = concat("Wild", concat("Code", "School"));
console.log(wcs);
