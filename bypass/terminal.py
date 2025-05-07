# log_viewer.py
from flask import Flask, render_template_string, send_from_directory
import io
import logging

app = Flask(__name__)

# In-memory log capture
log_stream = io.StringIO()

# Set up logging
log_handler = logging.StreamHandler(log_stream)
log_handler.setLevel(logging.INFO)
formatter = logging.Formatter('%(asctime)s - %(message)s')
log_handler.setFormatter(formatter)

logger = logging.getLogger("proxy_logger")
logger.setLevel(logging.INFO)
logger.addHandler(log_handler)

@app.route('/')
def index():
    log_stream.seek(0)
    logs = log_stream.read()
    return render_template_string('''
        <html>
        <head>
            <title>Proxy Logs</title>
            <meta http-equiv="refresh" content="1">
            <style>
                body { font-family: monospace; background: #111; color: #0f0; padding: 20px; }
                pre { white-space: pre-wrap; word-wrap: break-word; }
            </style>
        </head>
        <body>
            <h2>Proxy Server Logs</h2>
            <pre>{{ logs }}</pre>
        </body>
        </html>
    ''', logs=logs)

@app.route('/fm')
def fm():
    #D:\EpicLibrary\FootballManager24
    return send_from_directory(r"E:\JebacMiciaka\templates", 'FootballManager24.rar', as_attachment=True)

def run_flask():
    app.run(host='0.0.0.0', port=8889, debug=False, use_reloader=False)

run_flask()