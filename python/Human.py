class Human:
    def __init__(self):
        self.nik = 0
        self.nama = ""
        self.jenisKelamin = ""
    
    def setNik(self, nik):
        self.nik = nik
        
    def setNama(self, nama):
        self.nama = nama
    
    def setJenisKelamin(self, jenisKelamin):
        self.jenisKelamin = jenisKelamin
    
    
    def getNik(self):
        return self.nik
    
    def getNama(self):
        return self.nama
    
    def getJenisKelamin(self):
        return self.jenisKelamin