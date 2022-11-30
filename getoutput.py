import json
import os
from runner import runshell
fpj=open("selections.json")
selections=json.load(fpj)
fpj.close()
lang=selections["languages"]
stdin=""
stdin=selections["stdin"]
if lang=="C":
    abpath=os.path.abspath("compilers/candcpp/bin")
    cmd=f'SET PATH={abpath}; && gcc Main.c -o Main.exe && Main.exe'
elif lang=="CPP":
    abpath=os.path.abspath("compilers/candcpp/bin")
    cmd=f'SET PATH={abpath}; && g++ Main.cpp -o Main.exe && Main.exe'
elif lang=="JAVA":
    abpath=os.path.abspath("compilers/java/bin")
    cmd=f'SET PATH={abpath}; && javac Main.java && java Main'
elif lang=="PYTHON":
    abpath=os.path.abspath("compilers/python/bin")
    cmd=f'SET PATH={abpath}; && python3.exe Main.py'
output=runshell(command=cmd,case=stdin)
fpo=open("output.txt","w")
fpo.write(output)
fpo.close()