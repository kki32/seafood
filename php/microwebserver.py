#!/usr/bin/env python3

'''A rudimentary web server.
   Written to show the basic idea of a web server, for SENG365.
'''
import socket

PORT = 50010              # Arbitrary non-privileged port
QUEUE_SIZE = 1
BUFF_SIZE = 4096
ANY_INTERFACE = ''
WEB_ROOT = "./"

def send_string(socket, s):
    '''Writes string s to the given socket, which involves encoding the
    string s (UTF-8 in Python3) as a byte stream'''
    socket.sendall(s.encode())
    
    
def main():
    ss = socket.socket(socket.AF_INET, socket.SOCK_STREAM)  # Create socket object
    try:
        ss.bind((ANY_INTERFACE, PORT))       # Bind it to the required port
        ss.listen(QUEUE_SIZE)                # Make it a "server socket"
        while True:
            sock, addr = ss.accept()         # Wait to dequeue a connection request
            request = sock.recv(BUFF_SIZE)   # Read request (assuming we get it all!)
            request_string = request.decode() # Convert byte stream to string
            print("\nReceived Request\n", request_string)
            lines = request_string.split('\r\n')
            (cmd, resource, protocol) = lines[0].split()
            assert cmd == 'GET' and protocol == 'HTTP/1.1'
            try:
                fd = open(WEB_ROOT + resource)
                data = fd.read()
            except IOError:
                send_string(sock, "HTTP/1.1 404 Not found\r\n\r\n")
            else:
                send_string(sock, "HTTP/1.1 200 OK\r\n\r\n")
                send_string(sock, data)
                print("Sent\n", data)
                fd.close()
            sock.shutdown(socket.SHUT_RDWR)
            sock.close()
    except Exception as e:
        print("Oops. Exception", e, "occurred.")
    ss.close()
        
main()
