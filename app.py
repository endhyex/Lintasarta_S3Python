from flask import Flask, render_template, request
import os
import boto3
import boto3.session

session = boto3.session.Session(profile_name='default')
endpoint = 'https://36.37.122.158:8082'

s3 = session.resource(service_name='s3', endpoint_url=endpoint, verify=False)
client = s3.meta.client\

FOLDER = os.path.join('templates', 'images')

app = Flask(__name__)
app.config['FOLDER1'] = FOLDER

# INDEX (LOGIN)
@app.route('/')
def index():
	image_name = os.path.join(app.config['FOLDER1'], 'lintasartalogo.png')
	return render_template("index.php", image1 = image_name)

# DASHBOARD (HOME)
@app.route('/home')
def home():
	return render_template("home.php")

@app.route('/home/listbucket')
def listbucket():

	print("")
	print("")
	print("======= LIST BUCKET =======")
	for bucket in s3.buckets.all():
		print("")
		print("Bucket Name : " + bucket.name)
		print("")

	return render_template("home.php")

@app.route('/home/createbucket', methods=['POST'])
def createbucket():

	newBucket=request.form['newBucket']
	bucket = s3.Bucket(newBucket).create()
	
	return render_template("home.php")

@app.route('/home/deletebucket', methods=['POST'])
def deletebucket():

	bucketName = request.form['bucketName']
	s3.Bucket(bucketName).delete()

	return render_template("home.php")

@app.route('/home/listfile', methods=['POST'])
def listfile():

	bucketName = request.form['bucketName']
	print("")
	print("")
	print("================= LIST OBJECT =================")
	for o in s3.Bucket(bucketName).objects.all():
		print("")
		print("Key : " + o.key)
		print("Size: " + str(o.size) + " Byte")
		print("Time: " + str(o.last_modified))
		print("------------------------------------------------")

	return render_template("home.php")

@app.route('/home/openfile', methods=['POST','GET'])
def openfile():
	if request.method=='POST':
		fileName=request.form['fileName']
		bucketName=request.form['bucketName']
	
	url = client.generate_presigned_url('get_object', 
									{'Bucket': bucketName, 'Key': fileName},
									ExpiresIn=3600)

	return render_template("searchfile.php", bucketName=bucketName, fileName=fileName, url=url)

@app.route('/home/uploadfile', methods=['POST','GET'])
def uploadfile():
	if request.method=='POST':
		bucketName=request.form['bucketName']
	for file in request.files.getlist("file"):
		filename = file.filename
		
	obj = s3.Object(bucketName, filename)
	obj.put(Body=request.files['file'])

	return render_template("home.php")

@app.route('/home/deletefile', methods=['POST'])
def deletefile():

	bucketName = request.form['bucketName']
	fileName=request.form['fileName']
	s3.Object(bucketName, fileName).delete()

	return render_template("home.php")

if __name__ == '__main__':
	app.run(debug=True)