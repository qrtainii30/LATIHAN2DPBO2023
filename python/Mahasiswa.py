from Siak import Siak

class Mahasiswa(Siak):
    
    def __init__(self):
        self.nim = 0
        self.fakultas = ""
        self.prodi = ""
        
    def setNim(self, nim):
        self.nim = nim
    
    def setFakultas(self, fakultas):
        self.fakultas = fakultas
        
    def setProdi(self, prodi):
        self.prodi = prodi
    
    
    def getNim(self):
        return self.nim
    
    def getFakultas(self):
        return self.fakultas
    
    def getProdi(self):
        return self.prodi