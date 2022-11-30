import subprocess
def runshell(command,case):
	try:
		p=subprocess.Popen(str(command),shell=True,stdout=subprocess.PIPE,stderr=subprocess.PIPE,stdin=subprocess.PIPE,text=True)
		stdout,stderr=p.communicate(input=f"{case}",timeout=5)
	except:
		log='ERROR WHILE EXECUTING PROGRAM\n----->POSSIBLY TIME LIMIT EXCEEDED OR\n----->INCOMPATIBLE TEST CASES\n'
	else:
		if p.returncode!=0:
			log=str(stderr)
		elif p.returncode==0:
			log=str(stdout)	
	finally:
		return log