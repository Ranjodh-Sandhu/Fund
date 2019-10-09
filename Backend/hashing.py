import hashlib

def hashing(string1):
    hash_object = hashlib.sha256(string1)
    hex_dig = hash_object.hexdigest()
    print(hex_dig)
