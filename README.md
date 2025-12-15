<h1>วิธีใช้งานโปรเจ็ค</h1><br/><br/>
1. git clone repo<br/>
" git clone https://github.com/pyrnmsutdgt/dgtcrud.git "
<br/><br/>
2. ลง composer ใหม่<br/>
composer -install
<br/><br/>
3.สร้างไฟล์ .env แล้ว คัดลอก ข้อมูลในไฟล์ .env.example มาวางใน .env แล้วแก้ส่วนต่อไปนี้<br/>
"<br/>
DB_CONNECTION=sqlite<br/>
DB_HOST=127.0.0.1<br/>
DB_PORT=3306<br/>
DB_DATABASE=laravel<br/>
DB_USERNAME=root<br/>
DB_PASSWORD=<br/>
"

ไปเป็น<br/>

"<br/>
DB_CONNECTION=mysql<br/>
DB_HOST=127.0.0.1<br/>
DB_PORT=3307<br/>
DB_DATABASE=dgtcrud<br/>
DB_USERNAME=root<br/>
DB_PASSWORD=<br/>
"<br/><br/>

4. clone database หรือ import database <br/>
export dgtcrud.sql อกมา จาก phpMyAdmin	หรือใช้คำสั่งในแอพ MySQL ตามนี้ <br/>
"mysqldump -u root -p dgtcrud > dgtcrud.sql"

สร้าง database ใหม่บน phpMyAdmin เครื่้องใหม่ แล้ว import database ไปยังเครื่องใหม่ด้วยคำสั่ง<br/>

"mysql -u root -p dgtcrud < dgtcrud.sql"
หรือ<br/>
import จากไฟล์ที่ติดอยู่ในหน้าแรกของโปรเจ็ค ไฟล์ที่ชื่อว่า<br/>
"dgtcrud.sql"

5.Generate APP_KEY ใหม่ ด้วยคำสั่ง<br/>

"php artisan key:generate"

6. สั่งทำงาน<br/>
php php artisan serve
