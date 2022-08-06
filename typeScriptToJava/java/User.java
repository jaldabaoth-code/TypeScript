import java.util.Date;

/* Quest Typescript - TypeScript to Java */
public class User {
    private Date birthdate;
    private String size;
    private Photo[] photos;
    private Address address;

    public static void main(String[] args) {
        System.out.println("--- Quest Typescript - TypeScript to Java ---");
    }

    public Date getBirthdate() {
        return birthdate;
    }

    public void setBirthdate(Date birthdate) {
        this.birthdate = birthdate;
    }

    public String getSize() {
        return size;
    }

    public void setSize(String size) {
        this.size = size;
    }

    public Photo[] getPhotos() {
        return photos;
    }

    public void setPhotos(Photo[] photos) {
        this.photos = photos;
    }

    public Address getAddress() {
        return address;
    }

    public void setAddress(Address address) {
        this.address = address;
    }
}
