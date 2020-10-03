#!/usr/bin/python
list = []
line=""
i=0
fo = open("station", "rw+")
while (i!=4595):
	line = fo.readline()
	line = line.replace("\t"," ")
	line = line.replace("\n"," ")
	list.append(line)
	i=i+1
print list
fo.close()
