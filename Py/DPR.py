class DPR:
    
    def __init__(self, id=0, nama="", bidang="", partai=""):
        self.id = id
        self.nama = nama
        self.bidang = bidang
        self.partai = partai

    def get_id(self):
        return self.id

    def set_id(self, id):
        self.id = id

    def get_nama(self):
        return self.nama

    def set_nama(self, nama):
        self.nama = nama

    def get_bidang(self):
        return self.bidang

    def set_bidang(self, bidang):
        self.bidang = bidang

    def get_partai(self):
        return self.partai

    def set_partai(self, partai):
        self.partai = partai

