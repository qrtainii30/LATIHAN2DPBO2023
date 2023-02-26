from Human import Human

class Siak(Human):
    
    def __init__(self):
        self.asalUniv = ""
        self.emailEdu = ""
    
    def setAsalUniv(self, asalUniv):
        self.asalUniv = asalUniv
    
    def setEmailEdu(self, emailEdu):
        self.emailEdu = emailEdu
    
    def getAsalUniv(self):
        return self.asalUniv
    
    def getEmailEdu(self):
        return self.emailEdu