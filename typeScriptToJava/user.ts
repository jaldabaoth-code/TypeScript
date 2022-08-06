/* Quest Typescript - TypeScript to Java */
console.log("--- Quest Typescript - TypeScript to Java ---\n");

import { Address } from './address';
import { Photo } from './photo';

export class User {
    birthdate: Date;
    size: number;
    photos: Photo[];
    address: Address;

    constructor(birthdate: Date, size: number, photos: Photo[], address: Address) {
        this.size = size;
        this.birthdate = birthdate;
        this.photos = photos;
        this.address = address;
    }
}
