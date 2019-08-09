from flask import Flask, render_template, request
import os
import boto3
import boto3.session
import webbrowser

session = boto3.session.Session(profile_name='default')
endpoint = 'https://36.37.122.158:8082'

s3 = session.resource(service_name='s3', endpoint_url=endpoint, verify=False)
client = s3.meta.client

FOLDER = os.path.join('templates', 'images')

app = Flask(__name__)
app.config['FOLDER1'] = FOLDER

# INDEX (LOGIN)
@app.route('/')
def index():
	image_name = os.path.join(app.config['FOLDER1'], 'lintasartalogo.png')
	return render_template("index.php", image1 = image_name)

	# # List all buckets for S3 account
	# for bucket in s3.buckets.all():
 #    	print(bucket.name)

 #    # List all objects for a bucket
	# for obj in s3.Bucket('bucket-sample2').objects.all():
	#     print(obj.key)

	# return '''<form method=POST enctype=multipart/form-data action="bucketsample2/putobj">
	# <input type=file name=file>
	# <input type=submit>
	# </form>
	
	# <form method=POST enctype=multipart/form-data action="bucketaldo/putobj">
	# <input type=file name=file>
	# <input type=submit>
	# </form>
	# '''

# @app.route('/bucket')
# def bucket():
# 	return render_template("bucket.php")

# @app.route('/test1')
# def test1():
# 	return render_template("test1.php")

# DASHBOARD (HOME)
@app.route('/home', methods=['POST','GET'])
def home():
	# if request.method=='POST':
	# 	bucketName=request.form['bucketName']
		return render_template("home.php")

# @app.route('/home', methods=['POST','GET'])
# def searchbucket():
# 	if request.method=='POST':
# 		bucketName=request.form['bucketName']
# 		return render_template("viewbucket.php", bucketName=bucketName)

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

@app.route('/home/search', methods=['POST', 'GET'])
def searchbucket():
	if request.method=='POST':
		bucketName=request.form['bucketName']
		return render_template("searchbucket.php", bucketName=bucketName)

@app.route('/home/create', methods=['POST'])
def createbucket():

	newBucket=request.form['newBucket']
	bucket = s3.Bucket(newBucket).create()
	
	return render_template("home.php")

@app.route('/home/delete', methods=['POST'])
def deletebucket():

	bucketName = request.form['bucketName']
	s3.Bucket(bucketName).delete()

	return render_template("home.php")

@app.route('/connect')
def connect():
	return render_template("connect.php")

@app.route('/logout')
def logout():
	return render_template("logout.php")

# OPEN BUCKET
@app.route('/bucket', methods=['POST', 'GET'])
def bucket():
	if request.method=='POST':
		bucketName=request.form['bucketName']
		return render_template("bucket.php", bucketName=bucketName)

# @app.route('/bucket', methods=['POST', 'GET'])
# def viewfile():
# 	if request.method=='POST':
# 		fileName=request.form['fileName']
# 		return render_template("viewobj.php", fileName=fileName)

# VIEW OBJECT
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

@app.route('/bucket/file', methods=['POST','GET'])
def searchfile():
	if request.method=='POST':
		fileName=request.form['fileName']
		bucketName=request.form['bucketName']
	
	url = client.generate_presigned_url('get_object', 
									{'Bucket': bucketName, 'Key': fileName},
									ExpiresIn=3600)

	return render_template("searchfile.php", bucketName=bucketName, fileName=fileName, url=url)

@app.route('/home/uploadfile', methods=['POST'])
def uploadfile():

	bucketName=request.form['bucketName']
	fileName=request.form['fileName']

	for file in request.files.getlist("file"):
		fileName = file.fileName
	
	obj = s3.Object(bucketName, fileName)
	obj.put(Body=request.files['fileName'])

	return render_template("home.php")

# s3.Object('bucket-sample2', 'tester1.py').put(
#           Body='This is my object\'s data')

# Get object from bucket
# response = obj.GET()
# data = response['Body'].read()
# metadata = response['Metadata']
# print("Data: %s // Metadata: %s" % (data, metadata))
	
# @app.route('/bucket-sample1/localsample1')
# def uploadlokalsample1():
# 	return render_template("uploadlokalsample1.php")

@app.route('/home/deletefile', methods=['POST'])
def deletefile():

	bucketName = request.form['bucketName']
	fileName=request.form['fileName']
	s3.Object(bucketName, fileName).delete()

	return render_template("home.php")

@app.route('/bucket-sample1/downloadobj', methods=['POST'])
def downloadsample1():

	downloadname = request.form['downloadfile']
	url = client.generate_presigned_url('get_object', 
                                    {'Bucket': 'bucket-sample1', 'Key': downloadname},
                                    ExpiresIn=3600)
	return url
	# return '<html><body><a href="%s" % (url) target="_blank"> OPEN LINK </a></body></html>'

# @app.route('/bucket-sample2')
# def bucketsample2():
# 	return render_template("bucketsample2.php")

# @app.route('/bucket-sample2/putobj', methods=['POST'])
# def uploadsample2():

# Delete the object from its bucket
# s3.Object('bucket-sample2', 'tester1.py').()

# Put a new object to a bucket
	# for file in request.files.getlist("file"):
	# 	filename = file.filename
	
	# obj = s3.Object('bucket-sample2', filename)
	# obj.put(Body=request.files['file'])

# s3.Object('bucket-sample2', 'tester1.py').put(
#           Body='This is my object\'s data')

# Get object from bucket
# response = obj.GET()
# data = response['Body'].read()
# metadata = response['Metadata']
# print("Data: %s // Metadata: %s" % (data, metadata))
	# return render_template("bucketsample2.php")

# @app.route('/bucket-sample2/localsample2')
# def uploadlokalsample2():
# 	return render_template("uploadlokalsample2.php")

if __name__ == '__main__':
	app.run(debug=True)