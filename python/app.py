from flask import Flask, send_from_directory

#instance flask instance
app = Flask(__name__)

#decorator for define the route
@app.route('/images/<filename>')

#function to serve the image file from the specified directory (images)
def serve_image(filename):
    return send_from_directory('images', filename)

#condition for executing just one file and doesnt returning form other file
if __name__ == '__main__':
#details error message
    app.run(debug=True)
