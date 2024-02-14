import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        ArrayList<DPR> dprList = new ArrayList<>();
        Scanner scanner = new Scanner(System.in);

        System.out.println("Welcome to DPR database. Please use one of these features to access the data");
        System.out.println("1. Add");
        System.out.println("2. Change");
        System.out.println("3. Delete");
        System.out.println("4. Print");
        System.out.println("5. Done");

        System.out.print("Choose the command: ");
        String kondisi = scanner.nextLine();

        while (!kondisi.equals("Done")) {
            switch (kondisi.toLowerCase()) {
                case "add":
                    System.out.println("Write the new data:");
                    String[] inputData = scanner.nextLine().split(" ");
                    int id = Integer.parseInt(inputData[0]);
                    String nama = inputData[1];
                    String bidang = inputData[2];
                    String partai = inputData[3];
                    dprList.add(new DPR(id, nama, bidang, partai));
                    System.out.println("Data has been set!!");
                    break;

                case "change":
                    System.out.print("Choose the ID that want to be changed: ");
                    int changeId = scanner.nextInt();
                    scanner.nextLine(); // Consume newline
                    boolean found = false;
                    for (DPR dpr : dprList) {
                        if (dpr.getId() == changeId) {
                            System.out.println("Input new data:");
                            String[] newData = scanner.nextLine().split(" ");
                            dpr.setNama(newData[0]);
                            dpr.setBidang(newData[1]);
                            dpr.setPartai(newData[2]);
                            System.out.println("Data has been set!!");
                            found = true;
                            break;
                        }
                    }
                    if (!found) {
                        System.out.println("Oh no, the ID is missing!!");
                    }
                    break;

                case "delete":
                    System.out.print("Choose the ID that want to be deleted: ");
                    int deleteId = scanner.nextInt();
                    scanner.nextLine(); // Consume newline
                    found = false;
                    for (DPR dpr : dprList) {
                        if (dpr.getId() == deleteId) {
                            dprList.remove(dpr);
                            System.out.println("Data has been deleted!!");
                            found = true;
                            break;
                        }
                    }
                    if (!found) {
                        System.out.println("Oh no, the ID is missing!!");
                    }
                    break;

                case "print":
                    System.out.println("--------------------------------------------------------------------------------------------");
                    System.out.printf("| %-6s | %-10s | %-20s | %-20s | %-20s |\n", "No", "ID", "Nama", "Bidang", "Partai");
                    System.out.println("--------------------------------------------------------------------------------------------");
                    int count = 1;
                    for (DPR dpr : dprList) {
                        System.out.printf("| %-6d | %-10d | %-20s | %-20s | %-20s |\n", count++, dpr.getId(), dpr.getNama(), dpr.getBidang(), dpr.getPartai());
                    }
                    System.out.println("--------------------------------------------------------------------------------------------");
                    break;
            }
            System.out.print("Choose the command: ");
            kondisi = scanner.nextLine();
        }

        System.out.println("Finish updating the data, have a nice day");
    }

    
}