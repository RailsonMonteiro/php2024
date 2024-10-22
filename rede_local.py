import os
import socket
import qrcode
import tkinter as tk
from tkinter import messagebox
from PIL import Image, ImageTk

def get_local_ip():
    hostname = socket.gethostname()
    ip_address = socket.gethostbyname(hostname)
    return ip_address

def generate_qr_code(data):
    qr = qrcode.QRCode(
        version=1,
        error_correction=qrcode.constants.ERROR_CORRECT_L,
        box_size=10,
        border=4,
    )
    qr.add_data(data)
    qr.make(fit=True)
    img = qr.make_image(fill_color="black", back_color="white")
    img.save("qrcode.png")
    return img

def save_qr_code():
    messagebox.showinfo("Salvar QR Code", "QR Code salvo como 'qrcode.png'.")

def create_window():
    root = tk.Tk()
    root.title("Rede Local")
    root.configure(bg="green")

    ip_address = get_local_ip()
    qr_image = generate_qr_code(ip_address)

    # Carregar e exibir a imagem do QR Code
    img = Image.open("qrcode.png")
    img_tk = ImageTk.PhotoImage(img)

    label = tk.Label(root, text=f"Endereço IP: {ip_address}", bg="green", fg="white", font=("Arial", 14))
    label.pack(pady=20)

    qr_label = tk.Label(root, image=img_tk, bg="green")
    qr_label.image = img_tk  # Manter referência da imagem
    qr_label.pack(pady=10)

    button = tk.Button(root, text="Salvar", bg="blue", fg="white", command=save_qr_code)
    button.pack(pady=10)

    root.geometry("300x400")  # Aumentar a altura da janela
    root.mainloop()

if __name__ == "__main__":
    create_window()
