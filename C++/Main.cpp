/*Saya Meiva Labibah Putri NIM 2204343 mengerjakan
soal Latihan Praktikum dalam mata kuliah DPBO
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin*/

#include <bits/stdc++.h>
#include <iomanip>
#include "DPR.cpp"

using namespace std;

int main() 
{
    // Contoh penggunaan kelas DPR
    DPR anggota;

    int i, n = 0;
    int id;
    string nama;
    string bidang;
    string partai;

    list<DPR> llist;

    cout << "Welcome to DPR database. Please use one of these fitures to access the data" << '\n';
    cout << "1. Add" << '\n';
    cout << "2. Change" << '\n';
    cout << "3. Delete" << '\n';
    cout << "4. Print" << '\n';
    cout << "5. Done" << '\n';


    cout << "Choose the command: " << '\n';
    string kondisi;
    cin >> kondisi;

    while (kondisi != "Done")
    {
        if (kondisi == "Add" || kondisi == "add" || kondisi == "ADD")
        {
            cout << "Write the new data: " << '\n';
            DPR temp; 

            cin >> id >> nama >> bidang >> partai;

            temp.set_id(id);
            temp.set_nama(nama);
            temp.set_bidang(bidang);
            temp.set_partai(partai);

            llist.push_back(temp);

            cout << "Data has been set!!" << '\n';
        }
        else if (kondisi == "Change" || kondisi == "change" || kondisi == "CHANGE")
        {
            cout << "Choose the ID that want to be changed: " << '\n';
            cin >> id ;

            // Iterasi melalui list untuk mencari dan mengubah data yang sesuai
            for (auto &elem : llist) 
            {
                if (elem.get_id() == id) 
                {
                    cout << "Input new data: " << '\n';
                    cin >> nama >> bidang >> partai;
                    elem.set_nama(nama);
                    elem.set_bidang(bidang);
                    elem.set_partai(partai);
                    cout << "Data has been set !!" << '\n';
                    break; // Jika id ditemukan, keluar dari loop
                }
                else
                {
                    cout << "Oh no, the ID is missing!!" << '\n';
                    break;
                }
            }
        }

        else if(kondisi == "Delete" || kondisi == "delete" || kondisi == "DELETE")
        {
            cout << "Choose the ID that want to be deleted: " << '\n';
            cin >> id;

            // Iterasi melalui list untuk mencari dan menghapus data yang sesuai
            for (auto iter = llist.begin(); iter != llist.end(); ++iter) {
                if (iter->get_id() == id) {
                    iter = llist.erase(iter); // Menghapus elemen dari list
                    cout << "Data has been deleted!! " << '\n';
                    break; // Jika id ditemukan dan dihapus, keluar dari loop
                }
            }
        }
        else if(kondisi == "Print" || kondisi == "PRINT" || kondisi == "print")
        {
            cout << setw(6) << "No" << setw(10) << "ID" << setw(20) << "Nama" << setw(20) << "Bidang" << setw(20) << "Partai" << endl;
            
            // Mencetak data anggota
            i = 1; // Nomor urutan data
            for (auto it = llist.begin(); it != llist.end(); it++) {
                cout << setw(5) << i << "." << setw(10) << it->get_id() << setw(20) << it->get_nama() << setw(20) << it->get_bidang() << setw(20) << it->get_partai() << '\n';
                i++;
            }
        }

        cout << "Choose the command: " << '\n';
        cin >> kondisi; // Membaca input kondisi baru
    }

    cout << "Finish updating the data, have a nice day" << '\n';
    // Menambahkan data anggota
    return 0;
}