import smtplib
from_address='9908276025vinaykumar@gmail.com'
to_address={'madhuri.setti02@gmail.com','8897285347vinaykumar@gmail.com','vandhithameegada12@gmail.com','deepika.bolla7j@gmail.com','17b91a1275@srkrec.edu.in','seerapubhavyareddy7658@gmail.com'}
subject="mail from blood doantion camp"
username="9908276025vinaykumar@gmail.com"
password="9908276025v"
def send_mail(ip):
        #Body of the email
        body=ip
        msg='\r\n'.join({'To: %s ' % to_address,
                         'From: %s' % from_address,
                         'Subject:%s ' % subject,
                         '', body})
        #Sending mail
        server = smtplib.SMTP('smtp.gmail.com:587')
        server.starttls() # Our security for credentials
        server.login(username,password)
        server.sendmail(from_address,to_address,msg)
        server.quit()
        print("email has been sent")
send_mail("Hello mail check")