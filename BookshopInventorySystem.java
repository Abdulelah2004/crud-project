import java.util.ArrayList;
import java.util.Scanner;

class Book {
    private String title;
    private String author;
    private int year;

    public Book(String title, String author, int year) {
        this.title = title;
        this.author = author;
        this.year = year;
    }

    public String getTitle() {
        return title;
    }

    public String getAuthor() {
        return author;
    }

    public int getYear() {
        return year;
    }

    @Override
    public String toString() {
        return "Title: " + title + "\nAuthor: " + author + "\nYear: " + year;
    }
}

class BookInventory {
    private ArrayList<Book> books = new ArrayList<>();

    public void addBook(Book book) {
        books.add(book);
    }

    public void removeBook(String title) {
        books.removeIf(book -> book.getTitle().equalsIgnoreCase(title));
    }

    public void displayInventory() {
        if (books.isEmpty()) {
            System.out.println("Inventory is empty.");
        } else {
            System.out.println("Book Inventory:");
            for (Book book : books) {
                System.out.println(book);
                System.out.println("-----------------------");
            }
        }
    }
}

public class BookshopInventorySystem {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        BookInventory inventory = new BookInventory();

        while (true) {
            System.out.println("\nBookshop Inventory Management System");
            System.out.println("1. Add a Book");
            System.out.println("2. Remove a Book");
            System.out.println("3. Display Inventory");
            System.out.println("4. Exit");
            System.out.print("Enter your choice: ");

            int choice = scanner.nextInt();
            scanner.nextLine(); // Consume newline

            switch (choice) {
                case 1:
                    System.out.print("Enter the title: ");
                    String title = scanner.nextLine();
                    System.out.print("Enter the author: ");
                    String author = scanner.nextLine();
                    System.out.print("Enter the publication year: ");
                    int year = scanner.nextInt();
                    scanner.nextLine(); // Consume newline
                    Book newBook = new Book(title, author, year);
                    inventory.addBook(newBook);
                    System.out.println("Book added to inventory.");
                    break;
                case 2:
                    System.out.print("Enter the title of the book to remove: ");
                    String bookTitleToRemove = scanner.nextLine();
                    inventory.removeBook(bookTitleToRemove);
                    System.out.println("Book removed from inventory.");
                    break;
                case 3:
                    inventory.displayInventory();
                    break;
                case 4:
                    System.out.println("Exiting the program. Goodbye!");
                    System.exit(0);
                default:
                    System.out.println("Invalid choice. Please select a valid option.");
                    break;
            }
        }
    }
}
