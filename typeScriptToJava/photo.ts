/* Quest Typescript - TypeScript to Java */
export class Photo {
    url: string;
    fileName: string;
    width: number;
    height: number;

    constructor(url: string, fileName: string, width: number, height: number) {
        this.url = url;
        this.fileName = fileName;
        this.width = width;
        this.height = height;
    }
}
