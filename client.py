import sys
import os
from PyQt6.QtWidgets import QApplication, QMainWindow, QVBoxLayout, QHBoxLayout, QWidget, QLineEdit, QPushButton
from PyQt6.QtWebEngineWidgets import QWebEngineView
from PyQt6.QtCore import QUrl
from PyQt6.QtNetwork import QNetworkProxy, QNetworkProxyFactory

class WebBrowser(QMainWindow):
    def __init__(self):
        super().__init__()
        self.setWindowTitle("Modern PyQt6 Web Browser")
        self.setGeometry(100, 100, 1024, 768)

        # Set up the proxy settings to use the proxy server
        self.setup_proxy()

        # Web browser view
        self.browser = QWebEngineView(self)

        # Set the default page to a local HTML file in the same directory
        script_dir = os.path.dirname(os.path.abspath(__file__))
        local_file = os.path.join(script_dir, "homepage.html")  # Local HTML file
        self.browser.setUrl(QUrl.fromLocalFile(local_file))

        # URL bar to navigate
        self.url_bar = QLineEdit(self)
        self.url_bar.returnPressed.connect(self.navigate)

        # Navigation buttons
        self.back_btn = QPushButton('Back', self)
        self.back_btn.clicked.connect(self.browser.back)

        self.forward_btn = QPushButton('Forward', self)
        self.forward_btn.clicked.connect(self.browser.forward)

        self.reload_btn = QPushButton('Reload', self)
        self.reload_btn.clicked.connect(self.browser.reload)

        self.home_btn = QPushButton('Home', self)
        self.home_btn.clicked.connect(self.navigate_home)

        # Horizontal layout for buttons at the top-left
        button_layout = QHBoxLayout()
        button_layout.addWidget(self.back_btn)
        button_layout.addWidget(self.forward_btn)
        button_layout.addWidget(self.reload_btn)
        button_layout.addWidget(self.home_btn)

        # Vertical layout for the whole window (URL bar + buttons + browser)
        self.layout = QVBoxLayout()
        self.layout.addLayout(button_layout)  # Add buttons at the top-left
        self.layout.addWidget(self.url_bar)
        self.layout.addWidget(self.browser)

        container = QWidget(self)
        container.setLayout(self.layout)
        self.setCentralWidget(container)

    def setup_proxy(self):
        # Set the proxy settings to point to the proxy server
        proxy = QNetworkProxy(QNetworkProxy.ProxyType.HttpProxy, "79.186.155.164", 8888)
        QNetworkProxy.setApplicationProxy(proxy)

        # Enable Qt network debugging (optional, for troubleshooting)
        import logging
        logging.basicConfig(level=logging.DEBUG)

        from PyQt6.QtCore import qInstallMessageHandler

        def message_handler(msg_type, context, msg):
            print(f"Qt Debug: {msg}")

        qInstallMessageHandler(message_handler)


    def navigate(self):
        url = self.url_bar.text()
        if not url.startswith("http"):
            url = "http://" + url
        self.browser.setUrl(QUrl(url))

    def navigate_home(self):
        # Set the home page to the local file
        script_dir = os.path.dirname(os.path.abspath(__file__))
        local_file = os.path.join(script_dir, "homepage.html")
        self.browser.setUrl(QUrl.fromLocalFile(local_file))

if __name__ == "__main__":
    app = QApplication(sys.argv)
    window = WebBrowser()
    window.show()
    sys.exit(app.exec())
