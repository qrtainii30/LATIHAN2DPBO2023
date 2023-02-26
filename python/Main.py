from Mahasiswa import Mahasiswa

print("Data Kelompok CERIA")
print("===================\n")

n = int(input("Jumlah data anggota yang akan di input: "))

data = [Mahasiswa() for i in range(n)]

#INPUTAN
i = 0
for i in range(n):
    print("\nAnggota ", i +1)
    
    nik = int(input("Berapa NIK kamu     : "))
    nim = int(input("Berapa NIM kamu     : "))
    nama = str(input("Siapa nama kamu     : "))
    emailEdu = str(input("Masukkan email kamu : "))
    jenisKelamin = str(input("Apa jenis kelaminmu : "))
    prodi = str(input("Apa nama Prodi kamu : "))
    fakultas = str(input("Fakultas apatuu     : "))
    asalUniv = str(input("Univ yang mana      : "))
    
    #simpan nilai
    data[i].setNik(nik)
    data[i].setNim(nim)
    data[i].setNama(nama)
    data[i].setEmailEdu(emailEdu)
    data[i].setJenisKelamin(jenisKelamin)
    data[i].setProdi(prodi)
    data[i].setFakultas(fakultas)
    data[i].setAsalUniv(asalUniv)

print("\nDATA YANG TELAH DIINPUT : ")

j = 0
for j in range(n):
    print("\n======= ANGGOTA KE ", j+1 , "=========")
    print("| NIK            : " , str(data[j].getNik()))
    print("| NIM            : " , str(data[j].getNim()))
    print("| Email          : " , str(data[j].getEmailEdu()))
    print("| Nama           : " , str(data[j].getNama()))
    print("| Jenis Kelamin  : " , str(data[j].getNim()))
    print("| Program Studi  : " , str(data[j].getProdi()))
    print("| Fakultas       : " , str(data[j].getFakultas()))
    print("| Universitas    : " , str(data[j].getAsalUniv()))

print("\nSEMANGAT QERJA RYODI^^")