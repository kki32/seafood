#!/usr/bin/env python3

'''A trivial HTTP client: gets and prints a resource. '''

import socket

HTTP_PORT = 50010;
BUFF_SIZE = 4096;

def send_string(socket, s):
    '''Writes string s to the given socket, which involves encoding the
    string s (UTF-8 in Python3) as a byte stream'''
    socket.sendall(s.encode())
    

def display_resource(host, resource):
    '''Fetch the given resource from the given host and print it'''
    address = (host, HTTP_PORT)

    sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    sock.connect(address)      # Connect to the server

    send_string(sock, "GET " + resource + " HTTP/1.1\r\n") # Main request
    send_string(sock, "Host: " + host + "\r\n")     # Host header
    send_string(sock, "User-Agent: Client365\r\n")  # User-agent header ("browser" name)
    send_string(sock, "Connection: close\r\n")      # Close connection when done
    send_string(sock, "\r\n")                       # Indicates end of request

    byte_stream = sock.recv(BUFF_SIZE)
    while len(byte_stream) != 0:  # When connection closed, recv returns empty string
	print("yup")
        print(byte_stream.decode())
	
        byte_stream = sock.recv(BUFF_SIZE)


#display_resource('cosc.canterbury.ac.nz', '/365/sample.html')
display_resource('localhost', 'microwebserver.py')
