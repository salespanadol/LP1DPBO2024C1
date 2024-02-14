from DPR import DPR


llist = []

print("Welcome to DPR database. Please use one of these features to access the data")
print("1. Add")
print("2. Change")
print("3. Delete")
print("4. Print")
print("5. Done")

kondisi = input("Choose the command: ")

while kondisi != "done":
    if kondisi.lower() == "add":
        print("Write the new data:")
        id, nama, bidang, partai = input().split()
        temp = DPR(int(id), nama, bidang, partai)
        llist.append(temp)
        print("Data has been set!!")
        
    elif kondisi.lower() == "change":
        id = int(input("Choose the ID that want to be changed: "))
        found = False
        for elem in llist:
            if elem.get_id() == id:
                print("Input new data:")
                nama, bidang, partai = input().split()
                elem.set_nama(nama)
                elem.set_bidang(bidang)
                elem.set_partai(partai)
                print("Data has been set!!")
                found = True
                break
        if not found:
            print("Oh no, the ID is missing!!")

    elif kondisi.lower() == "delete":
        id = int(input("Choose the ID that want to be deleted: "))
        found = False
        for i, elem in enumerate(llist):
            if elem.get_id() == id:
                llist.pop(i)
                print("Data has been deleted!!")
                found = True
                break
        if not found:
            print("Oh no, the ID is missing!!")

    elif kondisi.lower() == "print":
        print("-" * 60)
        print("| {:^3} | {:^5} | {:^15} | {:^10} | {:^10} |".format("No", "ID", "Nama", "Bidang", "Partai"))
        print("-" * 60)
        for i, elem in enumerate(llist, 1):
            print("| {:^3} | {:^5} | {:^15} | {:^10} | {:^10} |".format(i, elem.get_id(), elem.get_nama(), elem.get_bidang(), elem.get_partai()))
        print("-" * 60)

    kondisi = input("Choose the command: ")

print("Finish updating the data, have a nice day")