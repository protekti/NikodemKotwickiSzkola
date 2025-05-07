# proxy_server.py
import socket
import threading
import select
from terminal import logger
import terminal
import urllib.parse

HOST = '0.0.0.0'
PORT = 8888
BUFFER_SIZE = 8192

def tunnel(client_sock, remote_sock):
    sockets = [client_sock, remote_sock]
    while True:
        readable, _, exceptional = select.select(sockets, [], sockets)
        if exceptional:
            break
        for s in readable:
            data = s.recv(BUFFER_SIZE)
            if not data:
                return
            if s is client_sock:
                remote_sock.sendall(data)
            else:
                client_sock.sendall(data)

def handle_client(client_socket):
    try:
        request = client_socket.recv(BUFFER_SIZE)
        if not request:
            return

        first_line = request.split(b'\n')[0].decode(errors="ignore")
        method, path, _ = first_line.split()

        print(f"[*] {method} request for {path}")

        if method.upper() == "CONNECT":
            host, port = path.split(":")
            port = int(port)
            remote = socket.create_connection((host, port))
            client_socket.sendall(b"HTTP/1.1 200 Connection established\r\n\r\n")
            tunnel(client_socket, remote)
        else:
            url = urllib.parse.urlparse(path)
            port = url.port or 80
            host = url.hostname
            remote = socket.create_connection((host, port))
            remote.sendall(request)

            while True:
                data = remote.recv(BUFFER_SIZE)
                if not data:
                    break
                client_socket.sendall(data)
            remote.close()

    except Exception as e:
        logger.error(f"[!] Error: {e}")
    finally:
        client_socket.close()

def start_proxy():
    print("Starting Proxy Server...")
    server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    server.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
    server.bind((HOST, PORT))
    server.listen(100)
    print(f"[*] Proxy Server running on {HOST}:{PORT}")

    while True:
        client_sock, addr = server.accept()
        print(f"[*] Connection from {addr[0]}:{addr[1]}")
        threading.Thread(target=handle_client, args=(client_sock,), daemon=True).start()

if __name__ == "__main__":
    start_proxy()
