def print_things(name, **kwargs):
    print "oo", kwargs
    print name
    if 'raw' in kwargs:
       print "Yea"
       
       
print_things("xx", raw='aaa')
