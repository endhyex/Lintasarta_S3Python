# Web Application for accessing StorageGRID with S3 Python

Aplikasi ini merupakan program yang digunakan untuk mengakses StorageGRID dengan menggunakan bahasa pemrograman PHP dan Python. Bahasa pemrograman PHP digunakan sebagai user interface dan bahasa pemrograman Python digunakan untuk dapat terhubung dengan StorageGRID.

# System Used
- Operation System 	    : Windows 10
- Visual Studio Code	: 1.37.0
- XAMPP			        : 7.2.2
- Framework		        : Flask
- AWS CLI		        : 1.16.202
- Python 		        : 2.7.15+
- Botocore (Boto3)	    : 1.12.192

# Accessing StorageGRID S3
## Install Python
Python digunakan untuk dapat menjalankan program dengan bahasa pemrograman Python yang digunakan pada aplikasi ini. Selain itu installasi Python secara otomatis akan melakukan installasi pip.
Download Python:
-	Windows
https://www.python.org/downloads/windows/

-	Linux/UNIX
https://www.python.org/downloads/source/

-	Mac OS X
https://www.python.org/downloads/mac-osx/

## Install AWS Command Line Interface
AWS CLI (Command Line Interface) digunakan untuk dapat melakukan konfigurasi sehingga dapat mengakses StorageGRID.
Download AWS CLI:
-	Windows
https://s3.amazonaws.com/aws-cli/AWSCLI64PY3.msi	(64 bit)
https://s3.amazonaws.com/aws-cli/AWSCLI32PY3.msi	(32 bit)
https://s3.amazonaws.com/aws-cli/AWSCLISetup.exe

-	MAC dan Linux
```sh
$pip install awscli
```

## AWS Configure
Konfigurasi AWS digunakan untuk melakukan pengaturan terhadap parameter yang dibutuhkan, diantaranya Access Key ID, Secret Access Key dan Region. Untuk melakukan konfigurasi AWS dapat menggunakan Command Prompt atau Terminal dengan menjalankan command berikut:
    ```sh
	aws configure
    ```

## Install boto3
Boto3 merupakan salah satu library dari bahasa pemrograman Python yang berfungsi untuk menjalankan fungsi S3. Untuk melakukan install boto3 dapat melalui Command Prompt atau Terminal dengan menjalankan command berikut:
    ```sh
	$pip install boto3
    ```

## Install flask
Flask merupakan salah satu library dari bahasa pemrograman Python yang berfungsi sebagai framework untuk dapat mengimplementasikan program Python ke dalam PHP sehingga dapat ditampilkan dalam bentuk Web Application
	```sh
    $ pip install flask
    ```

## Configure endpoint and profile name
Konfigurasi dari endpoint dan profile name digunakan sebagai parameter yang akan dipanggil oleh StorageGRID S3 dengan dimasukkan ke dalam program Python.
    ```sh
	session = boto3.session.Session(profile_name='my_profile')
	endpoint = 'https://s3.mycompany.com:8082'
    ```

## Start the Web Application
Program dapat dijalankan pada direktori menggunakan Python dengan menjalankan command berikut:
    ```sh
	$python app.py
    ```

Dan program dapat dibuka pada link berikut:
	http://localhost:5000

Username dan Password default yang digunakan adalah sebagai berikut:
	Username	: admin
	Password	: admin


# Bucket Operation
Seluruh fungsi dari Bucket Operation dapat digunakan dengan membuka menu “Bucket” dan memilih fungsi yang akan digunakan

## Create new bucket
Fungsi ini dapat dijalankan dengan memilih pilihan Create Bucket dan memasukkan nama bucket baru yang akan dibuat.

Untuk pembuatan bucket baru secara otomatis disimpan ke dalam region id-tbs karena sebelumnya telah diset pada bagian AWS Configure.

## List all buckets
Fungsi dari List Buckets dapat dijalankan dengan memilih pilihan List Bucket yang hasilnya akan ditampilkan pada command prompt atau terminal yang akan menampilkan nama dari seluruh bucket.

## Delete an empty bucket
Fungsi ini dapat dijalan dengan memilih pilihan Delete Bucket dan  menghapus bucket hanya dapat dilakukan terhadap bucket yang kosong, jika dilakukan terhadap bucket yang masih menyimpan file maka fungsi akan gagal dijalankan. Fungsi dapat dijalankan dengan memasukkan nama bucket yang ingin dihapus.


# Object Operation
Seluruh fungsi dari Object Operation dapat digunakan dengan membuka menu “File” dan memilih fungsi yang akan digunakan.

## Put a new object
Fungsi ini dapat dijalankan dengan memilih pilihan Upload File. Untuk melakukan upload sebelumnya harus memasukkan nama bucket yang akan digunakan sebagai tempat menyimpan file tersebut dan kemudian memasukkan file yang akan di upload dengan “Browse..” atau dapat dengan melakukan drag file ke dalam kolom input file.

## List all objects
Fungsi ini dapat dijalankan dengan memilih pilihan List File dan memasukkan nama bucket. Hasil dari list file akan ditampilkan pada command prompt atau terminal yang akan menampilkan nama dari seluruh file yang terdapat pada bucket tersebut.

## Open Object
Fungsi ini dapat dijalankan dengan memilih pilihan Open File dengan memasukkan nama bucket dan nama file serta format file yang akan dibuka.

Setelah nama bucket dan file telah diisi dapat langsung dibuka dengan mengklik pilihan Open yang kemudian akan menampilkan sebuah card dari file tersebut yang terdapat pilihan untuk membuka atau Open dan Download.

## Delete Object
Fungsi ini dapat dijalankan dengan memilih pilihan Delete File yang kemudian memasukkan nama bucket dan nama file serta format file yang akan dihapus.

# Reference
•	https://realpython.com/installing-python/
•	https://docs.aws.amazon.com/cli/latest/userguide/install-windows.html
•	https://flask.palletsprojects.com/en/1.1.x/installation/
•	https://github.com/NetApp/storagegrid-examples/tree/master/s3-python
