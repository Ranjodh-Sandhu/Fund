import re
        #name may not contain numbers -- only letters
        #email must contain @ and . -- letters,numbers
        #zipcode must be only 5 numbers -- only numbers
        #city and state cannot contain numbers -- only letters
        #passwords must contain at least one capital letter, one lowercase letter, and 1 number and be at least 8 characters

def wordcheck(string1):
    x = re.search("^[a-zA-Z]+$", string1)
    if (x):
        return True
    else:
        return False
def zipcheck(string1):
    x = re.search("^[0-9]{5}$", string1)
    if (x):
        return True
    else:
        return False
def emailcheck(string1):
    x = re.search("(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)", string1)
    if (x):
        return True
    else:
        return False

def passcheck(string1):
    password = string1

    length_regex = re.compile(r'.{8,}')
    uppercase_regex = re.compile(r'[A-Z]')
    lowercase_regex = re.compile(r'[a-z]')
    digit_regex = re.compile(r'[0-9]')

    return (length_regex.search(password) is not None
            and uppercase_regex.search(password) is not None
            and lowercase_regex.search(password) is not None
            and digit_regex.search(password) is not None)
