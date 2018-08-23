FROM ubuntu:18.04
MAINTAINER Jose Baez, https://github.com/josebaez028
RUN apt-get update
RUN apt-get install -y net-tools curl host socat
RUN apt-get install -y iputils-ping iputils-tracepath
RUN apt-get install -y traceroute
RUN apt-get install -y tcpdump
RUN apt-get install -y telnet
RUN apt-get install -y nano
RUN apt-get install -y netcat
RUN apt-get install -y tacacs+
RUN apt-get install -y libpam-google-authenticator
RUN useradd -m -d /home/user1 -s /bin/bash user1
RUN echo 'user1:admin' | chpasswd
USER user1
RUN google-authenticator -t -d -f -r 3 -R 30 -W
RUN chmod 400 .google_authenticator
USER root
RUN echo 'auth requisite pam_google_authenticator.so forward_pass\n\
auth required pam_unix.so use_first_pass\n '\
>> /etc/pam.d/tac_plus

RUN apt-get clean
VOLUME [ "/root" ]
WORKDIR [ "/root" ]
CMD [ "sh", "-c", "cd; exec bash -i" ]
